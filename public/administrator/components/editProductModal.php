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

                    <!-- Product Images -->
                    <div style="grid-column: span 2;">
                        <label style="display: block; margin-bottom: 8px; font-weight: 600; font-size: 14px; color: #374151;">
                            Product Images
                        </label>
                        <div id="editImageUploadContainer" style="border: 2px dashed #ddd; border-radius: 8px; padding: 40px; text-align: center; cursor: pointer; transition: all 0.3s; background: #fafafa;"
                             onclick="document.getElementById('editProductImages').click();"
                             ondragover="handleEditDragOver(event)"
                             ondragleave="handleEditDragLeave(event)"
                             ondrop="handleEditDrop(event)">
                            <div style="font-size: 48px; color: #ccc; margin-bottom: 10px;">+</div>
                            <div style="color: #666; font-size: 16px;">Click to add images or drag & drop</div>
                            <div style="color: #999; font-size: 12px; margin-top: 5px;">PNG, JPG only (max 4MB each)</div>
                        </div>
                        <input type="file" id="editProductImages" name="editProductImages[]" multiple accept="image/png,image/jpeg" style="display: none;" onchange="handleEditImageSelection(event)">
                        <div id="editImagePreview" style="display: flex; flex-wrap: wrap; gap: 10px; margin-top: 10px;"></div>
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

<script src="../../../src/js/editProductModal.js"></script>
