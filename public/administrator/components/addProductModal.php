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
                            <option value="Sneakers">Sneakers</option>
                            <option value="T-Shirts">T-Shirts</option>
                            <option value="Shirts">Shirts</option>
                            <option value="Accessories">Accessories</option>
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

<script>
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

function handleDragOver(event) {
    event.preventDefault();
    event.stopPropagation();
    const container = document.getElementById('imageUploadContainer');
    container.style.borderColor = '#3b82f6';
    container.style.backgroundColor = '#eff6ff';
}

function handleDragLeave(event) {
    event.preventDefault();
    event.stopPropagation();
    const container = document.getElementById('imageUploadContainer');
    container.style.borderColor = '#ddd';
    container.style.backgroundColor = '#fafafa';
}

function handleDrop(event) {
    event.preventDefault();
    event.stopPropagation();
    const container = document.getElementById('imageUploadContainer');
    container.style.borderColor = '#ddd';
    container.style.backgroundColor = '#fafafa';

    const files = event.dataTransfer.files;
    const fileInput = document.getElementById('productImages');
    fileInput.files = files;
    handleImageSelection({ target: { files: files } });
}

function handleImageSelection(event) {
    const files = event.target.files;
    const previewContainer = document.getElementById('imagePreview');
    previewContainer.innerHTML = '';

    for (let i = 0; i < files.length; i++) {
        const file = files[i];
        if (file.type !== 'image/png' && file.type !== 'image/jpeg') {
            alert('Only PNG and JPG files are allowed.');
            event.target.value = '';
            return;
        }
        if (file.size > 4 * 1024 * 1024) {
            alert('File size exceeds 4MB limit.');
            event.target.value = '';
            return;
        }

        const reader = new FileReader();
        reader.onload = function(e) {
            const imgContainer = document.createElement('div');
            imgContainer.style.position = 'relative';
            imgContainer.style.display = 'inline-block';

            const img = document.createElement('img');
            img.src = e.target.result;
            img.style.width = '80px';
            img.style.height = '80px';
            img.style.objectFit = 'cover';
            img.style.borderRadius = '4px';
            img.style.border = '1px solid #ddd';

            const removeBtn = document.createElement('button');
            removeBtn.innerHTML = '×';
            removeBtn.style.position = 'absolute';
            removeBtn.style.top = '-5px';
            removeBtn.style.right = '-5px';
            removeBtn.style.background = 'red';
            removeBtn.style.color = 'white';
            removeBtn.style.border = 'none';
            removeBtn.style.borderRadius = '50%';
            removeBtn.style.width = '20px';
            removeBtn.style.height = '20px';
            removeBtn.style.cursor = 'pointer';
            removeBtn.style.fontSize = '12px';
            removeBtn.onclick = function() {
                imgContainer.remove();
            };

            imgContainer.appendChild(img);
            imgContainer.appendChild(removeBtn);
            previewContainer.appendChild(imgContainer);
        };
        reader.readAsDataURL(file);
    }
}

function updateSizeOptions() {
    const category = document.getElementById('productCategory').value;
    const sizeContainer = document.getElementById('sizeButtons');
    sizeContainer.innerHTML = ''; // Clear existing buttons

    let sizes = [];
    if (category === 'Sneakers') {
        // Shoe sizes: 28 to 47
        for (let i = 28; i <= 47; i++) {
            sizes.push(i.toString());
        }
    } else if (category === 'T-Shirts' || category === 'Shirts') {
        // Clothing sizes
        sizes = ['XS', 'S', 'M', 'L', 'XL', 'XXL'];
    } else if (category === 'Accessories') {
        // Accessories might not have sizes, or generic
        sizes = ['One Size'];
    }

    sizes.forEach(size => {
        const button = document.createElement('button');
        button.type = 'button';
        button.textContent = size;
        button.value = size;
        button.style.padding = '5px 10px';
        button.style.border = '1px solid #ddd';
        button.style.borderRadius = '4px';
        button.style.cursor = 'pointer';
        button.style.background = '#f9f9f9';
        button.style.fontSize = '14px';
        button.style.margin = '2px';
        button.classList.add('size-button');

        button.onclick = function() {
            if (button.classList.contains('selected')) {
                button.classList.remove('selected');
                button.style.background = '#f9f9f9';
                button.style.color = '#000';
            } else {
                button.classList.add('selected');
                button.style.background = '#10b981';
                button.style.color = '#fff';
            }
        };

        sizeContainer.appendChild(button);
    });
}

function <?php echo $confirmFunction; ?>() {
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
    const selectedButtons = document.querySelectorAll('.size-button.selected');
    const selectedSizes = Array.from(selectedButtons).map(button => button.value);

    // Prepare data for AJAX request
    const formData = new FormData();
    formData.append('productName', name);
    formData.append('productSKU', sku);
    formData.append('productCategory', category);
    formData.append('productPrice', price);
    formData.append('productStock', stock);
    selectedSizes.forEach(size => formData.append('productSize[]', size));

    // Append image files
    const imageInput = document.getElementById('productImages');
    for (let i = 0; i < imageInput.files.length; i++) {
        formData.append('productImages[]', imageInput.files[i]);
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
                size: selectedSizes.length > 0 ? selectedSizes.join(', ') : "N/A"
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

            <?php echo $closeFunction; ?>();
        } else {
            alert(data.message || 'Error adding product');
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Error adding product');
    });
}
</script>