<?php
// Default values for the add product modal
$modalId = $modalId ?? 'addProductModal';
$title = $title ?? 'Add New Product';
$cancelText = $cancelText ?? 'Cancel';
$confirmText = $confirmText ?? 'Add Product';
$confirmFunction = $confirmFunction ?? 'addProduct';
$closeFunction = $closeFunction ?? 'closeAddProductModal';
?>

<!-- Add Product Modal -->
<div id="successMessage" class="success-message" style="display: none;">
    <div class="success-content">
        <span class="success-icon">✓</span>
        <span class="success-text">Successfully Deleted!</span>
    </div>
</div>

<!-- Add Product Modal - Direct Include -->
<div class="modal-overlay" id="addProductModalOverlay" onclick="closeAddProductModalOnOverlay(event)" style="display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0, 0, 0, 0.5); justify-content: center; align-items: center; z-index: 9999;">
    <div class="modal-content" style="max-width: 600px; background: white; border-radius: 12px; padding: 30px; position: relative;" onclick="event.stopPropagation();">
        <button class="close-btn" onclick="closeAddProductModal()" style="position: absolute; top: 15px; right: 15px; background: none; border: none; font-size: 28px; cursor: pointer; color: #666; line-height: 1;">×</button>

        <div class="modal-inner">
            <div style="text-align: center; margin-bottom: 20px;">
                <h2 style="margin-bottom: 10px; font-size: 24px; font-weight: 600;">Add New Product</h2>
                <p style="color: #666; line-height: 1.5; font-size: 14px;">
                    Fill in the details to add a new product to your inventory.
                </p>
            </div>

            <form id="addProductForm" onsubmit="event.preventDefault(); addProduct();">
                <div style="display: grid; grid-template-columns: 1fr 1fr; gap: 15px;">
                    <div>
                        <label for="productName" style="display: block; margin-bottom: 5px; font-weight: 500;">Product Name *</label>
                        <input type="text" id="productName" name="productName" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label for="productSKU" style="display: block; margin-bottom: 5px; font-weight: 500;">SKU *</label>
                        <input type="text" id="productSKU" name="productSKU" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label for="productCategory" style="display: block; margin-bottom: 5px; font-weight: 500;">Category *</label>
                        <select id="productCategory" name="productCategory" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box;" onchange="updateSizeOptions()">
                            <option value="">Select Category</option>
                        </select>
                    </div>
                    <div>
                        <label for="productPrice" style="display: block; margin-bottom: 5px; font-weight: 500;">Price *</label>
                        <input type="text" id="productPrice" name="productPrice" placeholder="₱0.00" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label for="productStock" style="display: block; margin-bottom: 5px; font-weight: 500;">Stock *</label>
                        <input type="number" id="productStock" name="productStock" min="0" required style="width: 100%; padding: 10px; border: 1px solid #ddd; border-radius: 6px; font-size: 14px; box-sizing: border-box;">
                    </div>
                    <div>
                        <label style="display: block; margin-bottom: 5px; font-weight: 500;">Available Sizes</label>
                        <div id="sizeButtons" style="display: flex; flex-wrap: wrap; gap: 10px; max-height: 120px; overflow-y: auto; border: 1px solid #ddd; border-radius: 6px; padding: 10px; box-sizing: border-box; min-height: 40px;">
                            <span id="sizePlaceholder" style="color: #999; font-style: italic;">Select a category to choose sizes</span>
                        </div>
                    </div>
                    <div style="grid-column: span 2;">
                        <label for="productImages" style="display: block; margin-bottom: 5px; font-weight: 500;">Product Images</label>
                        <input type="file" id="productImages" name="productImages[]" multiple accept="image/*"
                            style="display: none;" onchange="handleImageSelection(event)">
                        <div id="imageUploadContainer" 
                             style="border: 2px dashed #ddd; border-radius: 8px; padding: 40px; text-align: center; cursor: pointer; transition: all 0.3s; background: #fafafa;"
                             onclick="document.getElementById('productImages').click();"
                             ondragover="handleDragOver(event)"
                             ondragleave="handleDragLeave(event)"
                             ondrop="handleDrop(event)">
                            <div style="font-size: 48px; color: #ccc; margin-bottom: 10px;">+</div>
                            <div style="color: #666; font-size: 16px;">Click to add images or drag & drop</div>
                            <div style="color: #999; font-size: 12px; margin-top: 5px;">PNG, JPG only (max 4MB each)</div>
                        </div>
                        <div id="imagePreview" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;"></div>
                    </div>
                </div>

                <div style="display: flex; gap: 10px; justify-content: flex-end; margin-top: 20px;">
                    <button type="button" onclick="closeAddProductModal()" style="padding: 12px 24px; background: #f5f5f5; border: 1px solid #e0e0e0; border-radius: 6px; cursor: pointer; font-size: 14px;">Cancel</button>
                    <button type="submit" style="padding: 12px 24px; background: #10b981; color: white; border: none; border-radius: 6px; cursor: pointer; font-size: 14px;">Add Product</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="../../../src/js/addProductModal.js"></script>
