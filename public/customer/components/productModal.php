<!-- Modal -->
<div class="modal-overlay" id="modalOverlay" onclick="closeModalOnOverlay(event)">
    <div class="modal-content">
        <button class="close-btn" onclick="closeModal()">×</button>
        
        <div class="modal-inner">
            <!-- Left Side - Product Images -->
            <div class="product-image-section">
                <img 
                    src="https://via.placeholder.com/600x800/f5f5f5/333333?text=Summer+Collection" 
                    alt="Elegant Summer Maxi Dress"     
                    class="main-image"
                    id="mainImage"
                >
                <div class="thumbnail-list">
                    <div class="thumbnail active">
                        <img src="https://via.placeholder.com/70x70/f5f5f5/333333?text=1" alt="View 1">
                    </div>
                    <div class="thumbnail">
                        <img src="https://via.placeholder.com/70x70/e8e8e8/333333?text=2" alt="View 2">
                    </div>
                    <div class="thumbnail">
                        <img src="https://via.placeholder.com/70x70/e0e0e0/333333?text=3" alt="View 3">
                    </div>
                </div>
            </div>

            <!-- Right Side - Product Info -->
            <div class="product-info-section">
                <h2 class="product-title" id="productTitle"></h2>

                <div class="product-price" id="productPrice"></div>

                <!-- Color Selection -->
                <div class="color-section">
                    <label class="section-label">Color</label>
                    <div class="color-options">
                        <button class="color-option" onclick="selectColor(this)">White</button>
                        <button class="color-option" onclick="selectColor(this)">Blush Pink</button>
                        <button class="color-option" onclick="selectColor(this)">Sky Blue</button>
                        <button class="color-option" onclick="selectColor(this)">Sunshine Yellow</button>
                    </div>
                </div>

                <!-- Size Selection -->
                <div class="size-section">
                    <label class="section-label">Size</label>
                    <div class="size-options">
                        <button class="size-option" onclick="selectSize(this)">Small</button>
                        <button class="size-option" onclick="selectSize(this)">Medium</button>
                        <button class="size-option" onclick="selectSize(this)">Large</button>
                        <button class="size-option" onclick="selectSize(this)">X-Large</button>
                    </div>
                </div>

                <!-- Quantity -->
                <div class="quantity-section">
                    <label class="section-label">Quantity</label>
                    <div class="quantity-selector">
                        <button class="quantity-btn" onclick="decreaseQuantity()">−</button>
                        <input type="number" class="quantity-input" value="1" min="1" id="quantityInput" readonly>
                        <button class="quantity-btn" onclick="increaseQuantity()">+</button>
                    </div>
                </div>

                <!-- Add to Cart -->
                <button class="add-to-cart-btn" onclick="addToCart()">Add to Cart</button>
            </div>
        </div>
    </div>
</div>

<script src="../../../src/js/modal.js"></script>