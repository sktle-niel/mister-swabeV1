<?php
// Default values for the edit product modal
$modalId = $modalId ?? 'editProductModal';
$title = $title ?? 'Edit Product';
$cancelText = $cancelText ?? 'Cancel';
$confirmText = $confirmText ?? 'Update Product';
$confirmFunction = $confirmFunction ?? 'updateProduct';
$closeFunction = $closeFunction ?? 'closeEditProductModal';
?>

<!-- Edit Product Modal -->
    <div class="modal-overlay" id="<?php echo $modalId; ?>Overlay" onclick="<?php echo $closeFunction; ?>OnOverlay(event)" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: transparent; justify-content: center; align-items: center; z-index: 10000;">
    <div class="modal-content" style="max-width: 800px; width: 90%; background: white; border-radius: 16px; padding: 0; position: relative; max-height: 90vh; overflow-y: auto; box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);" onclick="event.stopPropagation();">
        <!-- Modal Header -->
        <div style="padding: 30px 40px; border-bottom: 1px solid #e5e7eb; position: sticky; top: 0; background: white; z-index: 10; border-radius: 16px 16px 0 0;">
            <button class="close-btn" onclick="<?php echo $closeFunction; ?>()" style="position: absolute; top: 20px; right: 25px; background: none; border: none; font-size: 28px; cursor: pointer; color: #9ca3af; line-height: 1; transition: color 0.2s;" onmouseover="this.style.color='#374151'" onmouseout="this.style.color='#9ca3af'">×</button>
            <h2 style="margin: 0 0 8px 0; font-size: 28px; font-weight: 700; color: #111827;">Edit Product</h2>
            <p style="margin: 0; color: #6b7280; font-size: 15px; line-height: 1.5;">
                Update the product details below
            </p>
        </div>

        <!-- Modal Body -->
        <div style="padding: 40px;">
            <form id="editProductForm" onsubmit="event.preventDefault(); <?php echo $confirmFunction; ?>();">
                <input type="hidden" id="editProductSku" name="editProductSku">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 24px;">
                    <!-- Product Name -->
                    <div style="grid-column: span 2;">
                        <label for="editProductName" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Product Name <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="text" id="editProductName" name="editProductName" required
                            placeholder="Enter product name"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- SKU -->
                    <div>
                        <label for="editProductSKU" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            SKU <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="text" id="editProductSKU" name="editProductSKU" required
                            placeholder="e.g., SNK-001"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- Category -->
                    <div>
                        <label for="editProductCategory" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Category <span style="color: #ef4444;">*</span>
                        </label>
                        <select id="editProductCategory" name="editProductCategory" required
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
                        <label for="editProductPrice" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Price <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="text" id="editProductPrice" name="editProductPrice" required
                            placeholder="₱0.00"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- Stock -->
                    <div>
                        <label for="editProductStock" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Stock Quantity <span style="color: #ef4444;">*</span>
                        </label>
                        <input type="number" id="editProductStock" name="editProductStock" min="0" required
                            placeholder="0"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                    </div>

                    <!-- Size -->
                    <div style="grid-column: span 2;">
                        <label for="editProductSize" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Available Sizes
                        </label>
                        <input type="text" id="editProductSize" name="editProductSize"
                            placeholder="e.g., S, M, L, XL or 7, 8, 9, 10"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                        <p style="margin: 8px 0 0 0; font-size: 13px; color: #6b7280;">Separate multiple sizes with commas</p>
                    </div>

                    <!-- Image URL -->
                    <div style="grid-column: span 2;">
                        <label for="editProductImage" style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Product Image URL
                        </label>
                        <input type="url" id="editProductImage" name="editProductImage"
                            placeholder="https://example.com/image.jpg"
                            style="width: 100%; padding: 12px 16px; border: 2px solid #e5e7eb; border-radius: 8px; font-size: 15px; box-sizing: border-box; transition: all 0.2s;"
                            onfocus="this.style.borderColor='#3b82f6'; this.style.outline='none';"
                            onblur="this.style.borderColor='#e5e7eb';">
                        <p style="margin: 8px 0 0 0; font-size: 13px; color: #6b7280;">Leave empty to use default product image</p>
                    </div>
                </div>

                <!-- Modal Footer -->
                <div style="display: flex; gap: 12px; justify-content: flex-end; margin-top: 32px; padding-top: 24px; border-top: 1px solid #e5e7eb;">
                    <button type="button" onclick="<?php echo $closeFunction; ?>()"
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
                                <path d="M11 4H4a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2v-7"></path>
                                <path d="M18.5 2.5a2.121 2.121 0 0 1 3 3L12 15l-4 1 1-4 9.5-9.5z"></path>
                            </svg>
                            Update Product
                        </span>
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script>
// Edit Product Modal Functions
function <?php echo $closeFunction; ?>() {
    document.getElementById("<?php echo $modalId; ?>Overlay").style.display = "none";
    document.getElementById("editProductForm").reset();
}

function <?php echo $closeFunction; ?>OnOverlay(event) {
    if (event.target === document.getElementById("<?php echo $modalId; ?>Overlay")) {
        <?php echo $closeFunction; ?>();
    }
}

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
        document.getElementById("editProductImage").value = product.image || "";
        document.getElementById("<?php echo $modalId; ?>Overlay").style.display = 'flex';
    }
}

function <?php echo $confirmFunction; ?>() {
    const form = document.getElementById("editProductForm");
    if (!form.checkValidity()) {
        form.reportValidity();
        return;
    }

    const originalSku = document.getElementById("editProductSku").value;
    const name = document.getElementById("editProductName").value.trim();
    const sku = document.getElementById("editProductSKU").value.trim();
    const category = document.getElementById("editProductCategory").value;
    const price = document.getElementById("editProductPrice").value.trim();
    const stock = parseInt(document.getElementById("editProductStock").value);
    const size = document.getElementById("editProductSize").value.trim();
    const image = document.getElementById("editProductImage").value.trim() || "https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90";

    // Check if new SKU already exists (excluding the current product)
    if (sku !== originalSku && products.some(p => p.sku === sku)) {
        alert("A product with this SKU already exists!");
        return;
    }

    // Initialize temporary changes if not exists
    if (!window.temporaryChanges) {
        window.temporaryChanges = [];
    }

    // Determine status based on stock
    let status = "In Stock";
    if (stock === 0) status = "Out of Stock";
    else if (stock <= 10) status = "Low Stock";

    const updatedProduct = {
        originalSku,
        name,
        sku,
        category,
        price,
        stock,
        status,
        image,
        size: size || "N/A"
    };

    // Check if this product already has temporary changes
    const existingChangeIndex = window.temporaryChanges.findIndex(change => change.originalSku === originalSku);
    if (existingChangeIndex !== -1) {
        window.temporaryChanges[existingChangeIndex] = updatedProduct;
    } else {
        window.temporaryChanges.push(updatedProduct);
    }

    // Save temporary changes to localStorage
    localStorage.setItem('temporaryChanges', JSON.stringify(window.temporaryChanges));

    // Update the UI to show temporary changes (visual indicator)
    const productIndex = products.findIndex(p => p.sku === originalSku);
    if (productIndex !== -1) {
        // Temporarily update the display
        products[productIndex] = { ...products[productIndex], ...updatedProduct };
        delete products[productIndex].originalSku;
        renderProducts(products);
    }

    // Show temporary save message
    const successMessage = document.getElementById('successMessage');
    const successText = successMessage.querySelector('.success-text');
    successText.textContent = 'Successfully Updated!';
    successMessage.style.display = 'block';

    setTimeout(() => {
        successMessage.style.display = 'none';
    }, 3000);

    <?php echo $closeFunction; ?>();
}
</script>
