<?php
include 'components/skuScanner.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    header('Content-Type: application/json');
    require_once '../../config/connection.php';

    $customer_name = $_POST['customerName'] ?? '';
    $total_amount = $_POST['totalAmount'] ?? 0;
    $payment_method = $_POST['paymentMethod'] ?? '';
    $products = $_POST['products'] ?? [];

    $conn->begin_transaction();

    try {
        // Generate 7-digit sale id
        $sale_id = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);

        // Insert into sales table
        $stmt = $conn->prepare("INSERT INTO sales (id, customer_name, total_amount, payment_method) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssds", $sale_id, $customer_name, $total_amount, $payment_method);
        $stmt->execute();

        // Insert each product into sale_items table
        $stmt_item = $conn->prepare("INSERT INTO sale_items (id, sale_id, product_id, quantity, price) VALUES (?, ?, ?, ?, ?)");
        foreach ($products as $product) {
            $item_id = str_pad(mt_rand(1, 9999999), 7, '0', STR_PAD_LEFT);
            $product_id = $product['id'] ?? 0;
            $quantity = $product['quantity'] ?? 0;
            $price = $product['price'] ?? 0;
            $stmt_item->bind_param("ssiid", $item_id, $sale_id, $product_id, $quantity, $price);
            $stmt_item->execute();
        }

        $conn->commit();
        echo json_encode(['success' => true]);
    } catch (Exception $e) {
        $conn->rollback();
        echo json_encode(['success' => false, 'error' => $e->getMessage()]);
    }
    exit;
}
?>
<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Add Sales</h2>
            <p class="page-subtitle">Create a new sales transaction</p>
        </div>
    </div>

    <div class="card" style="max-width: 800px;">
        <div class="card-header">
            <h3>Sales Information</h3>
        </div>

        <form id="addSalesForm" class="form">
            <div class="form-group">
                <label for="customerName">Customer Name</label>
                <input type="text" id="customerName" name="customerName">
            </div>

            <div class="products-section">
                <h4>Products</h4>
                <div id="productsContainer">
                    <div class="product-row">
                        <div class="form-group">
                            <label>Product SKU</label>
                            <div class="product-scanner">
                                <input type="text" name="products[0][sku]" class="product-sku" placeholder="Scan barcode or enter SKU" required autocomplete="off">
                                <button type="button" class="btn btn-icon btn-primary scan-btn">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                                        <circle cx="12" cy="13" r="4"></circle>
                                    </svg>
                                </button>
                            </div>
                            <input type="hidden" name="products[0][id]" class="product-id">
                            <span class="product-name-display"></span>
                        </div>

                        <div class="form-group">
                            <label>Quantity</label>
                            <input type="number" name="products[0][quantity]" min="1" value="1" required>
                        </div>

                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" name="products[0][price]" step="0.01" readonly>
                        </div>

                        <button type="button" class="btn btn-icon btn-danger remove-product">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="18" y1="6" x2="6" y2="18"></line>
                                <line x1="6" y1="6" x2="18" y2="18"></line>
                            </svg>
                        </button>
                    </div>
                </div>

                <button type="button" id="addProductBtn" class="btn btn-secondary">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <line x1="12" y1="5" x2="12" y2="19"></line>
                        <line x1="5" y1="12" x2="19" y2="12"></line>
                    </svg>
                    Add Product
                </button>
            </div>

            <div class="form-group total-section">
                <label><strong>Total Amount: ₱<span id="totalAmount">0.00</span></strong></label>
                <input type="hidden" id="totalAmountInput" name="totalAmount" value="0.00">
            </div>

            <div class="form-group">
                <label for="paymentMethod">Payment Method</label>
                <select id="paymentMethod" name="paymentMethod" required>
                    <option value="">Select Payment Method</option>
                    <option value="cash">Cash</option>
                    <option value="online transfer">Online transfer</option>
                </select>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn btn-primary">Create Sale</button>
                <button type="reset" class="btn btn-secondary">Reset</button>
            </div>
        </form>
    </div>
</div>

<!-- Scanner Modal -->
<div id="scannerModal" class="modal">
    <div class="modal-content">
        <div class="modal-header">
            <h3>Scan Barcode</h3>
            <button type="button" class="btn btn-icon btn-close" onclick="closeScanner()">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                    <line x1="18" y1="6" x2="6" y2="18"></line>
                    <line x1="6" y1="6" x2="18" y2="18"></line>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <div id="scanner-container">
                <video id="scanner-video" autoplay playsinline></video>
            </div>
            <div class="scanner-status">
                <p>Position the barcode in front of the camera</p>
            </div>
            <div class="scanner-controls">
                <button type="button" class="btn btn-secondary" onclick="closeScanner()">Cancel</button>
            </div>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/@zxing/library@0.19.3/umd/index.min.js"></script>
<script>
(function() {
    'use strict';
    
    // Prevent double initialization
    if (window.salesFormInitialized) {
        return;
    }
    window.salesFormInitialized = true;

// Global variables
var products = [];
var codeReader;
var currentRow;

// Load products from database
async function loadProducts() {
    try {
        const response = await fetch('../../back-end/read/fetchToSales.php');
        products = await response.json();
        if (products.error) {
            console.error('Error loading products:', products.error);
            products = [];
            return;
        }
        console.log('Products loaded:', products.length);
    } catch (error) {
        console.error('Error fetching products:', error);
        products = [];
    }
}

// Lookup product by SKU and fill form
function lookupProductBySKU(sku, row) {
    if (!sku || sku.trim() === '') {
        return;
    }

    const product = products.find(p => p.sku === sku.trim());
    
    if (product) {
        // Fill in the product details
        row.querySelector('.product-id').value = product.id;
        row.querySelector('input[name*="[price]"]').value = product.price;
        
        // Display product name
        const nameDisplay = row.querySelector('.product-name-display');
        if (nameDisplay) {
            nameDisplay.textContent = product.name;
            nameDisplay.style.color = 'green';
            nameDisplay.style.fontWeight = 'bold';
        }
        
        // Update total
        updateTotal();
        
        // Visual feedback
        const skuInput = row.querySelector('.product-sku');
        skuInput.style.borderColor = 'green';
        setTimeout(() => {
            skuInput.style.borderColor = '';
        }, 2000);
    } else {
        // Product not found
        alert('Product not found with SKU: ' + sku);
        
        // Clear fields
        row.querySelector('.product-id').value = '';
        row.querySelector('input[name*="[price]"]').value = '';
        
        const nameDisplay = row.querySelector('.product-name-display');
        if (nameDisplay) {
            nameDisplay.textContent = 'Product not found';
            nameDisplay.style.color = 'red';
        }
        
        // Visual feedback
        const skuInput = row.querySelector('.product-sku');
        skuInput.style.borderColor = 'red';
        setTimeout(() => {
            skuInput.style.borderColor = '';
        }, 2000);
    }
}

// Open barcode scanner
window.openScanner = function(row) {
    currentRow = row;
    document.getElementById('scannerModal').style.display = 'block';

    // Initialize ZXing barcode reader
    codeReader = new ZXing.BrowserMultiFormatReader();

    // Start scanning
    codeReader.decodeFromVideoDevice(null, 'scanner-video', (result, err) => {
        if (result) {
            const code = result.text;
            console.log('Barcode detected:', code);
            
            // Fill the SKU input
            const skuInput = currentRow.querySelector('.product-sku');
            skuInput.value = code;
            
            // Lookup product
            lookupProductBySKU(code, currentRow);
            
            // Close scanner
            window.closeScanner();
        }
        if (err && !(err instanceof ZXing.NotFoundException)) {
            console.error('Scanner error:', err);
        }
    }).catch((err) => {
        console.error('Error starting scanner:', err);
        alert('Camera access denied or not available. Please enter SKU manually.');
        window.closeScanner();
    });
}

// Close scanner
window.closeScanner = function() {
    document.getElementById('scannerModal').style.display = 'none';
    if (codeReader) {
        codeReader.reset();
        codeReader = null;
    }
}

// Update total amount
function updateTotal() {
    const rows = document.querySelectorAll('.product-row');
    let total = 0;
    
    rows.forEach(row => {
        const price = parseFloat(row.querySelector('input[name*="[price]"]').value) || 0;
        const quantity = parseInt(row.querySelector('input[name*="[quantity]"]').value) || 0;
        total += price * quantity;
    });
    
    document.getElementById('totalAmount').textContent = total.toFixed(2);
    document.getElementById('totalAmountInput').value = total.toFixed(2);
}

// Add new product row
function addProductRow() {
    const container = document.getElementById('productsContainer');
    const rowCount = container.children.length;
    const row = document.createElement('div');
    row.className = 'product-row';
    row.innerHTML = `
        <div class="form-group">
            <label>Product SKU</label>
            <div class="product-scanner">
                <input type="text" name="products[${rowCount}][sku]" class="product-sku" placeholder="Scan barcode or enter SKU" required autocomplete="off">
                <button type="button" class="btn btn-icon btn-primary scan-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                        <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"></path>
                        <circle cx="12" cy="13" r="4"></circle>
                    </svg>
                </button>
            </div>
            <input type="hidden" name="products[${rowCount}][id]" class="product-id">
            <span class="product-name-display"></span>
        </div>
        <div class="form-group">
            <label>Quantity</label>
            <input type="number" name="products[${rowCount}][quantity]" min="1" value="1" required>
        </div>
        <div class="form-group">
            <label>Price</label>
            <input type="number" name="products[${rowCount}][price]" step="0.01" readonly>
        </div>
        <button type="button" class="btn btn-icon btn-danger remove-product">
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                <line x1="18" y1="6" x2="6" y2="18"></line>
                <line x1="6" y1="6" x2="18" y2="18"></line>
            </svg>
        </button>
    `;
    container.appendChild(row);
}

// Remove product row
function removeProductRow(button) {
    if (document.querySelectorAll('.product-row').length > 1) {
        button.closest('.product-row').remove();
        updateTotal();
    } else {
        alert('At least one product is required');
    }
}

// Event listeners
document.addEventListener('DOMContentLoaded', function() {
    // Load products on page load
    loadProducts();

    // Add product button
    document.getElementById('addProductBtn').addEventListener('click', addProductRow);

    // SKU input change - auto lookup
    document.addEventListener('input', function(e) {
        if (e.target.classList.contains('product-sku')) {
            const row = e.target.closest('.product-row');
            const sku = e.target.value.trim();
            
            // Auto-lookup when SKU is entered (debounce)
            clearTimeout(e.target.lookupTimeout);
            e.target.lookupTimeout = setTimeout(() => {
                if (sku) {
                    lookupProductBySKU(sku, row);
                }
            }, 500);
        }
    });

    // Quantity change - update total
    document.addEventListener('change', function(e) {
        if (e.target.name && e.target.name.includes('[quantity]')) {
            updateTotal();
        }
    });

    // Scan button click
    document.addEventListener('click', function(e) {
        if (e.target.closest('.scan-btn')) {
            e.preventDefault();
            const row = e.target.closest('.product-row');
            window.openScanner(row);
        }
    });

    // Remove product button
    document.addEventListener('click', function(e) {
        if (e.target.closest('.remove-product')) {
            removeProductRow(e.target.closest('.remove-product'));
        }
    });

    // Form submission
    document.getElementById('addSalesForm').addEventListener('submit', async function(e) {
        e.preventDefault();
        
        // Validate that all products have valid IDs
        const rows = document.querySelectorAll('.product-row');
        let isValid = true;
        
        rows.forEach(row => {
            const productId = row.querySelector('.product-id').value;
            if (!productId) {
                isValid = false;
                const skuInput = row.querySelector('.product-sku');
                skuInput.style.borderColor = 'red';
            }
        });
        
        if (!isValid) {
            alert('Please ensure all products are valid');
            return;
        }
        
        const formData = new FormData(this);
        
        try {
            const response = await fetch('../../back-end/create/addSales.php', {
                method: 'POST',
                body: formData
            });
            const result = await response.json();
            
            if (result.success) {
                alert('Sale created successfully!');
                this.reset();
                
                // Reset products to one row
                const container = document.getElementById('productsContainer');
                while (container.children.length > 1) {
                    container.lastChild.remove();
                }
                
                // Clear product displays
                document.querySelectorAll('.product-name-display').forEach(display => {
                    display.textContent = '';
                });
                
                updateTotal();
            } else {
                alert('Error creating sale: ' + result.error);
            }
        } catch (error) {
            console.error('Error submitting form:', error);
            alert('Error submitting form');
        }
    });

    // Form reset
    document.getElementById('addSalesForm').addEventListener('reset', function() {
        // Clear product displays
        document.querySelectorAll('.product-name-display').forEach(display => {
            display.textContent = '';
        });
        updateTotal();
    });
});

// Close modal when clicking outside
window.onclick = function(event) {
    const modal = document.getElementById('scannerModal');
    if (event.target == modal) {
        window.closeScanner();
    }
}

})(); // End of IIFE
</script>

<style>
.form-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: var(--spacing-lg);
    margin-bottom: var(--spacing-xl);
}

.form-group {
    margin-bottom: var(--spacing-lg);
}

.form-group label {
    display: block;
    margin-bottom: var(--spacing-xs);
    font-weight: 500;
}

.form-group input,
.form-group select,
.form-group textarea {
    width: 100%;
    padding: var(--spacing-sm);
    border: 1px solid var(--border-color);
    border-radius: 8px;
    font-size: 14px;
    transition: border-color 0.3s;
}

.product-row {
    display: grid;
    grid-template-columns: 2fr 1fr 1fr auto;
    gap: var(--spacing-md);
    align-items: start;
    margin-bottom: var(--spacing-md);
    padding: var(--spacing-md);
    border: 1px solid var(--border-color);
    border-radius: var(--border-radius);
}

.products-section {
    margin-bottom: var(--spacing-xl);
}

.total-section {
    text-align: right;
    font-size: 18px;
    margin-bottom: var(--spacing-lg);
}

.form-actions {
    display: flex;
    gap: var(--spacing-md);
    justify-content: flex-end;
}

.product-scanner {
    display: flex;
    gap: var(--spacing-sm);
    align-items: stretch;
}

.product-scanner input {
    flex: 1;
}

.product-scanner .btn {
    flex-shrink: 0;
    padding: var(--spacing-sm);
}

.product-name-display {
    display: block;
    margin-top: 4px;
    font-size: 12px;
    min-height: 16px;
}

/* Modal Styles */
.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    left: 0;
    top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7);
    animation: fadeIn 0.3s;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

.modal-content {
    background-color: white;
    margin: 5% auto;
    padding: 0;
    border-radius: var(--border-radius);
    width: 90%;
    max-width: 600px;
    box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3);
    animation: slideIn 0.3s;
}

@keyframes slideIn {
    from {
        transform: translateY(-50px);
        opacity: 0;
    }
    to {
        transform: translateY(0);
        opacity: 1;
    }
}

.modal-header {
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: var(--spacing-lg);
    border-bottom: 1px solid var(--border-color);
}

.modal-header h3 {
    margin: 0;
}

.btn-close {
    background: none;
    border: none;
    cursor: pointer;
    color: var(--text-secondary);
    padding: 4px;
}

.btn-close:hover {
    color: var(--primary-color);
}

.modal-body {
    padding: var(--spacing-lg);
}

#scanner-container {
    position: relative;
    width: 100%;
    max-width: 500px;
    margin: 0 auto;
    background: #000;
    border-radius: var(--border-radius);
    overflow: hidden;
}

#scanner-video {
    width: 100%;
    display: block;
    min-height: 300px;
}

.scanner-status {
    text-align: center;
    margin: var(--spacing-md) 0;
    color: var(--text-secondary);
}

.scanner-controls {
    text-align: center;
    margin-top: var(--spacing-md);
}

/* Button styles */
.btn {
    padding: var(--spacing-sm) var(--spacing-md);
    border: none;
    border-radius: var(--border-radius);
    cursor: pointer;
    font-size: 14px;
    font-weight: 500;
    transition: all 0.3s;
    display: inline-flex;
    align-items: center;
    gap: var(--spacing-xs);
}

.btn-primary {
    background-color: var(--primary-color, #007bff);
    color: white;
}

.btn-primary:hover {
    background-color: var(--primary-color-dark, #0056b3);
}

.btn-secondary {
    background-color: var(--secondary-color, #6c757d);
    color: white;
}

.btn-secondary:hover {
    background-color: var(--secondary-color-dark, #545b62);
}

.btn-danger {
    background-color: var(--danger-color, #dc3545);
    color: white;
}

.btn-danger:hover {
    background-color: var(--danger-color-dark, #c82333);
}

.btn-icon {
    padding: var(--spacing-xs);
}
</style>