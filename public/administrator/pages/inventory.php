<div class="main-content">
    <div class="content-header">
        <div>
            <h2 class="page-title">Inventory Management</h2>
            <p class="page-subtitle">Manage your product inventory and stock levels</p>
        </div>
    </div>

<?php
include 'components/editProductModal.php';
include 'components/deleteProductModal.php';
include '../../back-end/create/addProduct.php';
include '../../back-end/read/fetchProduct.php';
include '../../back-end/update/editProduct.php';
include '../../back-end/delete/removeProduct.php';

// Fetch products from database
$products = fetchProducts();
$recentProduct = !empty($products) ? $products[0] : null;
?>


<div id="successMessage" class="success-message" style="display: none;">
    <div class="success-content">
        <span class="success-icon">✓</span>
        <span class="success-text">Successfully Deleted!</span>
    </div>
</div>

<!-- Add Product Modal - Improved Layout -->
<div class="modal-overlay" id="addProductModalOverlay" onclick="closeAddProductModalOnOverlay(event)" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: transparent; justify-content: center; align-items: center; z-index: 10000;">
    <div class="modal-content" style="max-width: 800px; width: 90%; background: white; border-radius: 16px; padding: 0; position: relative; max-height: 90vh; overflow-y: auto; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);" onclick="event.stopPropagation();">
        <!-- Modal Header -->
        <div style="padding: 30px 40px; border-bottom: 1px solid #e5e7eb; position: sticky; top: 0; background: white; z-index: 10; border-radius: 16px 16px 0 0;">
            <button class="close-btn" onclick="closeAddProductModal()" style="position: absolute; top: 20px; right: 25px; background: none; border: none; font-size: 28px; cursor: pointer; color: #9ca3af; line-height: 1; transition: color 0.2s;" onmouseover="this.style.color='#374151'" onmouseout="this.style.color='#9ca3af'">×</button>
            <h2 style="margin: 0 0 8px 0; font-size: 28px; font-weight: 700; color: #111827;">Add New Product</h2>
            <p style="margin: 0; color: #6b7280; font-size: 15px; line-height: 1.5;">
                Fill in the product details below to add it to your inventory
            </p>
        </div>

        <!-- Modal Body -->
        <div style="padding: 40px;">
            <form id="addProductForm" enctype="multipart/form-data" onsubmit="event.preventDefault(); addProduct();">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                    <!-- Product Name -->
                    <div style="grid-column: span 2;">
                        <label for="productName" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Product Name <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="text" id="productName" name="productName" required 
                            placeholder="Enter product name" 
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;" 
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';" 
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- SKU -->
                    <div>
                        <label for="productSKU" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            SKU <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="text" id="productSKU" name="productSKU" required 
                            placeholder="e.g., SNK-001" 
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;" 
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';" 
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="productCategory" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Category <span style="color: #ef4444;">*</span>
                        </label>
                        <select id="productCategory" name="productCategory" required 
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s; background: white; cursor: pointer;" 
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';" 
                            onblur="this.style.borderColor='#e5e7eb';">
                            <option value="">Select Category</option>
                            <option value="Sneakers">Sneakers</option>
                            <option value="T-Shirts">T-Shirts</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Accessories">Accessories</option>
                        </select>
                    </div>

                    <!-- Price -->
                    <div>
                        <label for="productPrice" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Price <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="text" id="productPrice" name="productPrice" required 
                            placeholder="₱0.00" 
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;" 
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';" 
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- Stock -->
                    <div>
                        <label for="productStock" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Stock Quantity <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="number" id="productStock" name="productStock" min="0" required 
                            placeholder="0" 
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;" 
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';" 
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- Size -->
                    <div style="grid-column: span 2;">
                        <label for="productSize" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Available Sizes
                        </label>
                        <input type="text" id="productSize" name="productSize" 
                            placeholder="e.g., S, M, L, XL or 7, 8, 9, 10" 
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;" 
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';" 
                            onblur="this.style.borderColor='#e5e7eb';">
                        <p style="margin: 8px 0 0 0; font-size: 13px; color: #6b7280;">Separate multiple sizes with commas</p>
                    </div>

                    <!-- Product Images -->
                    <div style="grid-column: span 2;">
                        <label for="productImages" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Product Images
                        </label>
                        <input type="file" id="productImages" name="productImages[]" multiple accept="image/*"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                        <p style="margin: 8px 0 0 0; font-size: 13px; color: #6b7280;">Select multiple images (max 4MB each). Leave empty to use default product image</p>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div style="display: flex; gap: 12px; justify-content: flex-end; margin-top: 32px; padding-top: 24px; border-top: 1px solid #e5e7eb;">
                    <button type="button" onclick="closeAddProductModal()" 
                        style="padding: 12px 28px; background: #f3f4f6; color: #374151; border: 2px solid #e5e7eb; border-radius: 8px; cursor: pointer; font-size: 15px; font-weight: 600; transition: all 0.2s;" 
                        onmouseover="this.style.background='#e5e7eb'" 
                        onmouseout="this.style.background='#f3f4f6'">
                        Cancel
                    </button>
                    <button type="submit" 
                        style="padding: 12px 32px; background: #10b981; color: white; border: none; border-radius: 8px; cursor: pointer; font-size: 15px; font-weight: 600; transition: all 0.2s; box-shadow: 0 1px 3px rgba(0, 0, 0, 0.1);" 
                        onmouseover="this.style.background='#059669'; this.style.boxShadow='0 4px 6px rgba(0, 0, 0, 0.1)'" 
                        onmouseout="this.style.background='#10b981'; this.style.boxShadow='0 1px 3px rgba(0, 0, 0, 0.1)'">
                        <span style="display: inline-flex; align-items: center; gap: 8px;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Add Product
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<link rel="stylesheet" href="../../../src/css/modal.css">
<link rel="stylesheet" href="../../../src/css/successMessage.css">

<script>
let products = <?php echo json_encode($products); ?>;

function renderProducts(productsToRender) {
    const tbody = document.getElementById('products-tbody');
    tbody.innerHTML = '';

    productsToRender.forEach(product => {
        const row = document.createElement('tr');

        const stockClass = product.stock === 0 ? 'var(--accent-danger)' : product.stock <= 10 ? 'var(--accent-warning)' : '';
        const statusClass = product.status === 'In Stock' ? 'badge-success' : product.status === 'Low Stock' ? 'badge-warning' : 'badge-danger';

        row.innerHTML = `
            <td>
                <img src="${product.image}" alt="${product.name}" style="width: 50px; height: 50px; border-radius: var(--radius-md); object-fit: cover; cursor: pointer;" onclick="previewImage('${product.image}')">
            </td>
            <td style="color: var(--text-muted); font-size: 0.875rem;">${product.sku}</td>
            <td><span class="badge badge-info">${product.category}</span></td>
            <td style="font-weight: 600;">${product.price}</td>
            <td style="${stockClass ? `color: ${stockClass}; font-weight: 600;` : ''}">${product.stock}</td>
            <td>${product.size || 'N/A'}</td>
            <td><span class="badge ${statusClass}">${product.status}</span></td>
            <td>
                <div style="display: flex; gap: var(--spacing-xs);">
                    <button class="btn btn-icon btn-secondary" title="View" onclick="previewImage('${product.image}')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M1 12s4-8 11-8 11 8 11 8-4 8-11 8-11-8-11-8z"></path>
                            <circle cx="12" cy="12" r="3"></circle>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Edit" onclick="openEditProductModal('${product.sku}')">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                            <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                        </svg>
                    </button>
                    <button class="btn btn-icon btn-secondary" title="Delete" onclick="window.productToDelete = '${product.sku}'; document.getElementById('deleteModalOverlay').style.display = 'flex';">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="3,6 5,6 21,6"></polyline>
                            <path d="M19,6v14a2,2 0 0,1-2,2H7a2,2 0 0,1-2-2V6m3,0V4a2,2 0 0,1,2-2h4a2,2 0 0,1,2,2v2"></path>
                            <line x1="10" y1="11" x2="10" y2="17"></line>
                            <line x1="14" y1="11" x2="14" y2="17"></line>
                        </svg>
                    </button>
                </div>
            </td>
        `;

        tbody.appendChild(row);
    });
}

function filterProducts() {
    const searchFilter = document.getElementById('search-filter').value.toLowerCase();
    const categoryFilter = document.getElementById('category-filter').value;
    const statusFilter = document.getElementById('status-filter').value;

    let filteredProducts = products;

    if (searchFilter) {
        filteredProducts = filteredProducts.filter(product =>
            product.name.toLowerCase().includes(searchFilter) ||
            product.sku.toLowerCase().includes(searchFilter)
        );
    }

    if (categoryFilter) {
        filteredProducts = filteredProducts.filter(product => product.category.toLowerCase() === categoryFilter);
    }

    if (statusFilter) {
        const statusMap = {
            'in-stock': 'In Stock',
            'low-stock': 'Low Stock',
            'out-of-stock': 'Out of Stock'
        };
        filteredProducts = filteredProducts.filter(product => product.status === statusMap[statusFilter]);
    }

    renderProducts(filteredProducts);
}

function clearFilters() {
    document.getElementById('search-filter').value = '';
    document.getElementById('category-filter').value = '';
    document.getElementById('status-filter').value = '';
    renderProducts(products);
}

function filterActivities() {
    const searchValue = document.getElementById('activity-search').value.toLowerCase();
    const activityItems = document.querySelectorAll('.card .card > div > div');

    activityItems.forEach(item => {
        const text = item.textContent.toLowerCase();
        if (text.includes(searchValue)) {
            item.style.display = '';
        } else {
            item.style.display = 'none';
        }
    });
}

function handleScroll() {
    const tableContainer = document.querySelector('.table-container');
    const tbody = document.getElementById('products-tbody');

    if (tableContainer.scrollTop + tableContainer.clientHeight >= tableContainer.scrollHeight - 10) {
        // Load more products (simulate by duplicating existing ones)
        const currentProducts = Array.from(tbody.children).map(row => {
            return {
                name: row.cells[0].textContent.trim(),
                sku: row.cells[1].textContent.trim(),
                category: row.cells[2].textContent.trim(),
                price: row.cells[3].textContent.trim(),
                stock: parseInt(row.cells[4].textContent.trim()),
                size: row.cells[5].textContent.trim(),
                status: row.cells[6].textContent.trim(),
                color: row.cells[0].querySelector('div').style.background
            };
        });

        // Add more products (duplicate for demo)
        const additionalProducts = currentProducts.slice(0, 5);
        renderProducts([...currentProducts, ...additionalProducts], false);
    }
}

function showActionsMenu(event, sku) {
    event.stopPropagation();

    // Remove any existing menu
    const existingMenu = document.querySelector('.actions-menu');
    if (existingMenu) {
        existingMenu.remove();
    }

    // Create menu container
    const menu = document.createElement('div');
    menu.className = 'actions-menu';
    menu.style.position = 'absolute';
    menu.style.backgroundColor = 'white';
    menu.style.border = '1px solid var(--border-color)';
    menu.style.borderRadius = 'var(--radius-md)';
    menu.style.boxShadow = '0 4px 12px rgba(0, 0, 0, 0.15)';
    menu.style.zIndex = '1000';
    menu.style.minWidth = '120px';
    menu.style.padding = 'var(--spacing-xs) 0';

    // Edit option
    const editOption = document.createElement('div');
    editOption.style.padding = 'var(--spacing-sm) var(--spacing-md)';
    editOption.style.cursor = 'pointer';
    editOption.style.display = 'flex';
    editOption.style.alignItems = 'center';
    editOption.style.gap = 'var(--spacing-sm)';
    editOption.style.color = 'var(--text-primary)';
    editOption.style.fontSize = '0.875rem';
    editOption.innerHTML = '<span style="background: white; border-radius: 2px; display: inline-block; padding: 2px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path><path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path></svg></span> Edit';
    editOption.addEventListener('click', () => {
        menu.remove();
        openEditProductModal(sku);
    });

    // Delete option
    const deleteOption = document.createElement('div');
    deleteOption.style.padding = 'var(--spacing-sm) var(--spacing-md)';
    deleteOption.style.cursor = 'pointer';
    deleteOption.style.display = 'flex';
    deleteOption.style.alignItems = 'center';
    deleteOption.style.gap = 'var(--spacing-sm)';
    deleteOption.style.color = 'var(--accent-danger)';
    deleteOption.style.fontSize = '0.875rem';
    deleteOption.innerHTML = `
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" style="background: white; border-radius: 2px;">
            <polyline points="3,6 5,6 21,6"></polyline>
            <path d="M19,6v14a2,2 0 0,1-2,2H7a2,2 0 0,1-2-2V6m3,0V4a2,2 0 0,1,2-2h4a2,2 0 0,1,2,2v2"></path>
            <line x1="10" y1="11" x2="10" y2="17"></line>
            <line x1="14" y1="11" x2="14" y2="17"></line>
        </svg>
        Delete
    `;
    deleteOption.addEventListener('click', () => {
        menu.remove();
        window.productToDelete = sku;
        document.getElementById('deleteModalOverlay').style.display = 'flex';
    });

    menu.appendChild(editOption);
    menu.appendChild(deleteOption);

    // Position the menu
    const button = event.target.closest('button');
    const rect = button.getBoundingClientRect();
    menu.style.top = `${rect.bottom + 5}px`;
    menu.style.left = `${rect.left}px`;

    document.body.appendChild(menu);

    // Close menu when clicking outside
    const closeMenu = (e) => {
        if (!menu.contains(e.target) && e.target !== button) {
            menu.remove();
            document.removeEventListener('click', closeMenu);
        }
    };
    setTimeout(() => {
        document.addEventListener('click', closeMenu);
    }, 0);
}

function previewImage(imageUrl) {
    // Create modal overlay
    const modal = document.createElement('div');
    modal.style.position = 'fixed';
    modal.style.top = '0';
    modal.style.left = '0';
    modal.style.width = '100%';
    modal.style.height = '100%';
    modal.style.backgroundColor = 'transparent';
    modal.style.display = 'flex';
    modal.style.justifyContent = 'center';
    modal.style.alignItems = 'center';
    modal.style.zIndex = '1000';
    modal.style.animation = 'fadeIn 0.3s ease-in-out';

    // Create modal content container
    const modalContent = document.createElement('div');
    modalContent.style.position = 'relative';
    modalContent.style.maxWidth = '90%';
    modalContent.style.maxHeight = '90%';
    modalContent.style.overflow = 'hidden';
    modalContent.style.animation = 'zoomIn 0.3s ease-in-out';

    // Create image element
    const img = document.createElement('img');
    img.src = imageUrl;
    img.style.width = '100%';
    img.style.height = 'auto';
    img.style.maxHeight = '80vh';
    img.style.objectFit = 'contain';
    img.style.display = 'block';
    img.style.borderRadius = 'var(--radius-md)';

    // Create close button
    const closeBtn = document.createElement('button');
    closeBtn.innerHTML = '×';
    closeBtn.style.position = 'absolute';
    closeBtn.style.top = '15px';
    closeBtn.style.right = '15px';
    closeBtn.style.color = 'white';
    closeBtn.style.fontSize = '32px';
    closeBtn.style.cursor = 'pointer';
    closeBtn.style.background = 'none';
    closeBtn.style.border = 'none';

    // Close modal on click outside image
    modal.addEventListener('click', () => {
        modal.style.animation = 'fadeOut 0.3s ease-in-out';
        modalContent.style.animation = 'zoomOut 0.3s ease-in-out';
        setTimeout(() => {
            document.body.removeChild(modal);
        }, 300);
    });

    closeBtn.addEventListener('click', (e) => {
        e.stopPropagation();
        modal.style.animation = 'fadeOut 0.3s ease-in-out';
        modalContent.style.animation = 'zoomOut 0.3s ease-in-out';
        setTimeout(() => {
            document.body.removeChild(modal);
        }, 300);
    });

    // Prevent modal close when clicking on image
    img.addEventListener('click', (e) => {
        e.stopPropagation();
    });

    modalContent.appendChild(img);
    modalContent.appendChild(closeBtn);
    modal.appendChild(modalContent);
    document.body.appendChild(modal);

    // Add CSS animations
    const style = document.createElement('style');
    style.textContent = `
        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }
        @keyframes fadeOut {
            from { opacity: 1; }
            to { opacity: 0; }
        }
        @keyframes zoomIn {
            from { transform: scale(0.9); opacity: 0; }
            to { transform: scale(1); opacity: 1; }
        }
        @keyframes zoomOut {
            from { transform: scale(1); opacity: 1; }
            to { transform: scale(0.9); opacity: 0; }
        }
    `;
    document.head.appendChild(style);
}

function confirmDelete() {
    if (window.productToDelete) {
        // Send AJAX request to delete product from database
        fetch('../../back-end/delete/removeProduct.php', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/x-www-form-urlencoded',
            },
            body: 'sku=' + encodeURIComponent(window.productToDelete)
        })
        .then(response => response.json())
        .then(data => {
            if (data.success) {
                // Remove from local products array
                const index = products.findIndex(p => p.sku === window.productToDelete);
                if (index !== -1) {
                    products.splice(index, 1);
                    localStorage.setItem('inventoryProducts', JSON.stringify(products));
                    filterProducts(); // Re-apply current filters to update the UI
                }

                // Show success message
                const successMessage = document.getElementById('successMessage');
                const successText = successMessage.querySelector('.success-text');
                successText.textContent = 'Successfully Deleted!';
                successMessage.style.display = 'block';

                setTimeout(() => {
                    successMessage.style.display = 'none';
                }, 3000);
            } else {
                alert(data.message || 'Error deleting product');
            }
        })
        .catch(error => {
            console.error('Error:', error);
            alert('Error deleting product');
        });

        window.productToDelete = null;
        document.getElementById('deleteModalOverlay').style.display = 'none';
    }
}

// Add Product Modal Functions
function closeAddProductModal() {
    document.getElementById("addProductModalOverlay").style.display = "none";
    document.getElementById("addProductForm").reset();
}

function closeAddProductModalOnOverlay(event) {
    if (event.target === document.getElementById("addProductModalOverlay")) {
        closeAddProductModal();
    }
}

function addProduct() {
    const form = document.getElementById("addProductForm");
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    const name = document.getElementById("productName").value.trim();
    const sku = document.getElementById("productSKU").value.trim();
    const category = document.getElementById("productCategory").value;
    const price = document.getElementById("productPrice").value.trim();
    const stock = parseInt(document.getElementById("productStock").value);
    const size = document.getElementById("productSize").value.trim();
    const imageFiles = document.getElementById("productImages").files;

    // Validate file sizes (max 4MB each)
    for (let file of imageFiles) {
        if (file.size > 4 * 1024 * 1024) { // 4MB
            alert(`File ${file.name} is too large. Maximum size is 4MB.`);
            return;
        }
    }

    // Prepare data for AJAX request
    const formData = new FormData();
    formData.append('productName', name);
    formData.append('productSKU', sku);
    formData.append('productCategory', category);
    formData.append('productPrice', price);
    formData.append('productStock', stock);
    formData.append('productSize', size);

    // Append image files
    for (let i = 0; i < imageFiles.length; i++) {
        formData.append('productImages[]', imageFiles[i]);
    }

    // Send AJAX request to addProduct.php
    fetch('../../back-end/create/addProduct.php', {
        method: 'POST',
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        if (data.success) {
            // Add to local products array for immediate UI update
            const newProduct = {
                id: data.id,
                name,
                sku,
                category,
                price,
                stock,
                status: stock === 0 ? 'Out of Stock' : stock <= 10 ? 'Low Stock' : 'In Stock',
                image: data.images && data.images.length > 0 ? data.images[0] : "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90",
                size: size || "N/A"
            };
            products.push(newProduct);
            localStorage.setItem('inventoryProducts', JSON.stringify(products));
            renderProducts(products);

            // Show success message
            const successMessage = document.getElementById('successMessage');
            const successText = successMessage.querySelector('.success-text');
            successText.textContent = 'Product Added Successfully!';
            successMessage.style.display = 'block';

            setTimeout(() => {
                successMessage.style.display = 'none';
            }, 3000);

            closeAddProductModal();
        } else {
            alert(data.message || 'Error adding product');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error adding product');
    });
}

// Function to open add product modal
function openProductModal(mode) {
    if (mode === 'add') {
        document.getElementById('addProductModalOverlay').style.display = 'flex';
    }
}

// Function to open edit product modal
function openEditProductModal(sku) {
    const product = products.find(p => p.sku === sku);
    if (product) {
        document.getElementById("editProductSku").value = product.sku;
        document.getElementById("editProductName").value = product.name;
        document.getElementById("editProductSKU").value = product.sku;
        document.getElementById("editProductCategory").value = product.category;
        document.getElementById("editProductPrice").value = product.price;
        document.getElementById("editProductStock").value = product.stock;
        document.getElementById("editProductSize").value = product.size || "";
        // Clear image previews
        document.getElementById("editImagePreview").innerHTML = "";
        document.getElementById("editProductModalOverlay").style.display = 'flex';
    }
}



document.addEventListener('DOMContentLoaded', () => {
    // Load temporary changes from localStorage
    window.temporaryChanges = JSON.parse(localStorage.getItem('temporaryChanges')) || [];

    // Apply temporary changes to products array
    window.temporaryChanges.forEach(change => {
        const productIndex = products.findIndex(p => p.sku === change.originalSku);
        if (productIndex !== -1) {
            products[productIndex] = { ...products[productIndex], ...change };
            delete products[productIndex].originalSku;
        }
    });

    renderProducts(products);

    document.getElementById('search-filter').addEventListener('input', filterProducts);
    document.getElementById('category-filter').addEventListener('change', filterProducts);
    document.getElementById('status-filter').addEventListener('change', filterProducts);

    const activitySearch = document.getElementById('activity-search');
    if (activitySearch) {
        activitySearch.addEventListener('input', filterActivities);
    }

    document.querySelector('.table-container').addEventListener('scroll', handleScroll);
});
</script>
    
    <div style="display: grid; grid-template-columns: 1fr 320px; gap: var(--spacing-lg);">
        <!-- Main Content -->
        <div>
            <div class="card">
                <div class="products-header" style="margin-bottom: var(--spacing-lg); display: flex; justify-content: space-between; align-items: center;">
                    <h3 style="font-size: 1.125rem; font-weight: 600;">Products</h3>
                    <div style="display: flex; gap: var(--spacing-md); align-items: center;">
                        <button style="width: 400px; height: 41px; background: black; color: white; padding: 0.625rem 1.5rem; border: none; border-radius: var(--radius-md); font-family: 'Outfit', sans-serif; font-weight: 500; font-size: 0.875rem; cursor: pointer; transition: all var(--transition-base); display: inline-flex; align-items: center; gap: 0.5rem; text-decoration: none; position: relative; overflow: hidden; justify-content: center;" onclick="openProductModal('add')">
                            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <line x1="12" y1="5" x2="12" y2="19"></line>
                                <line x1="5" y1="12" x2="19" y2="12"></line>
                            </svg>
                            Add Product
                        </button>

                    </div>
                </div>

                <div class="products-filters" style="margin-bottom: var(--spacing-lg); display: flex; gap: var(--spacing-md);">
                    <input type="text" id="search-filter" placeholder="Search by name or SKU..." class="filter-select" style="padding: 0.5rem; border: 1px solid var(--border-color); border-radius: var(--radius-md); font-size: 0.875rem;">

                    <select class="filter-select" id="category-filter" >
                        <option value="">All Categories</option>
                        <option value="sneakers">Sneakers</option>
                        <option value="t-shirts">T-Shirts</option>
                        <option value="shirts">Shirts</option>
                        <option value="accessories">Accessories</option>
                    </select>

                    <select class="filter-select" id="status-filter">
                        <option value="">All Status</option>
                        <option value="in-stock">In Stock</option>
                        <option value="low-stock">Low Stock</option>
                        <option value="out-of-stock">Out of Stock</option>
                    </select>

                    <button class="btn btn-secondary" style="width: 400px; height: 43px;" onclick="clearFilters()">Clear Filters</button>
                </div>

                <div class="table-container" style="max-height: 530px; overflow-y: auto;">
                    <table>
                        <thead>
                            <tr>
                                <th>Product</th>
                                <th>SKU</th>
                                <th>Category</th>
                                <th>Price</th>
                                <th>Stock</th>
                                <th>Size</th>
                                <th>Status</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody id="products-tbody">
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        
        <!-- Sidebar -->
        <div style="display: flex; flex-direction: column; gap: var(--spacing-lg);">
            <!-- Recent Activity -->
            <div class="card">
                <h3 style="font-size: 1rem; font-weight: 600; margin-bottom: var(--spacing-md);">Recent Activity</h3>
            </div>
        </div>
    </div>
</div>