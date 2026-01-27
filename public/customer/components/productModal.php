<!-- Product Modal Component -->
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    /* Modal Overlay */
    .modal-overlay {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.5);
        z-index: 1000;
        align-items: center;
        justify-content: center;
        padding: 20px;
        font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', 'Helvetica Neue', Arial, sans-serif;
    }

    /* Modal Content */
    .modal-content {
        background: white;
        border-radius: 12px;
        max-width: 1000px;
        width: 100%;
        max-height: 90vh;
        overflow-y: auto;
        position: relative;
    }

    .modal-inner {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 40px;
        padding: 40px;
    }

    /* Close Button */
    .close-btn {
        position: absolute;
        top: 20px;
        right: 20px;
        width: 36px;
        height: 36px;
        background: white;
        border: 1px solid #e0e0e0;
        border-radius: 50%;
        cursor: pointer;
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 24px;
        line-height: 1;
        color: #666;
        transition: all 0.3s;
        z-index: 10;
    }

    .close-btn:hover {
        background: #f5f5f5;
        color: #000;
    }

    /* Left Side - Image */
    .product-image-section {
        position: relative;
    }

    .main-image {
        width: 100%;
        height: auto;
        border-radius: 8px;
        margin-bottom: 15px;
    }

    .thumbnail-list {
        display: flex;
        gap: 10px;
    }

    .thumbnail {
        width: 70px;
        height: 70px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        padding: 4px;
        cursor: pointer;
        transition: border-color 0.3s;
    }

    .thumbnail.active {
        border-color: #333;
    }

    .thumbnail:hover {
        border-color: #666;
    }

    .thumbnail img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        border-radius: 4px;
    }

    /* Right Side - Info */
    .product-info-section {
        display: flex;
        flex-direction: column;
    }

    .product-title {
        font-size: 32px;
        font-weight: 400;
        margin-bottom: 20px;
        line-height: 1.3;
        color: #1a1a1a;
    }

    .product-price {
        font-size: 36px;
        font-weight: 600;
        color: #1a1a1a;
        margin-bottom: 30px;
    }

    /* Color Section */
    .color-section {
        margin-bottom: 25px;
    }

    .section-label {
        font-weight: 600;
        font-size: 15px;
        margin-bottom: 12px;
        display: block;
        color: #1a1a1a;
    }

    .color-options {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .color-option {
        padding: 12px 20px;
        border: 2px solid #e0e0e0;
        background: white;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s;
        border-radius: 6px;
    }

    .color-option:hover {
        border-color: #333;
    }

    .color-option.selected {
        border-color: #333;
        background: #333;
        color: white;
    }

    /* Size Section */
    .size-section {
        margin-bottom: 25px;
    }

    .size-options {
        display: flex;
        gap: 10px;
        flex-wrap: wrap;
    }

    .size-option {
        padding: 12px 20px;
        border: 2px solid #e0e0e0;
        background: white;
        cursor: pointer;
        font-size: 14px;
        font-weight: 500;
        transition: all 0.3s;
        border-radius: 6px;
    }

    .size-option:hover {
        border-color: #333;
    }

    .size-option.selected {
        border-color: #333;
        background: #333;
        color: white;
    }

    /* Quantity Section */
    .quantity-section {
        margin-bottom: 30px;
    }

    .quantity-selector {
        display: flex;
        align-items: center;
        gap: 0;
        width: fit-content;
    }

    .quantity-btn {
        width: 44px;
        height: 44px;
        border: 2px solid #e0e0e0;
        background: white;
        cursor: pointer;
        font-size: 20px;
        display: flex;
        align-items: center;
        justify-content: center;
        transition: all 0.3s;
        font-weight: 500;
    }

    .quantity-btn:hover {
        background: #f5f5f5;
        border-color: #333;
    }

    .quantity-btn:first-child {
        border-radius: 6px 0 0 6px;
    }

    .quantity-btn:last-child {
        border-radius: 0 6px 6px 0;
    }

    .quantity-input {
        width: 70px;
        height: 44px;
        border: 2px solid #e0e0e0;
        border-left: none;
        border-right: none;
        text-align: center;
        font-size: 16px;
        font-weight: 600;
    }

    .quantity-input:focus {
        outline: none;
    }

    /* Add to Cart Button */
    .add-to-cart-btn {
        width: 100%;
        padding: 18px;
        background: #333;
        color: white;
        border: none;
        font-size: 16px;
        font-weight: 600;
        cursor: pointer;
        transition: background 0.3s;
        text-transform: uppercase;
        letter-spacing: 1.5px;
        border-radius: 8px;
    }

    .add-to-cart-btn:hover {
        background: #000;
    }

    /* Responsive */
    @media (max-width: 768px) {
        .modal-inner {
            grid-template-columns: 1fr;
            gap: 30px;
            padding: 30px 20px;
        }

        .product-title {
            font-size: 24px;
        }

        .product-price {
            font-size: 28px;
        }

        .close-btn {
            top: 15px;
            right: 15px;
        }

        .size-options,
        .color-options {
            gap: 8px;
        }

        .size-option,
        .color-option {
            padding: 10px 16px;
            font-size: 13px;
        }
    }
</style>

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

<script>
    // Modal Functions
    function openModal(card) {
        const name = card.getAttribute('data-name');
        const price = card.getAttribute('data-price');
        const image = card.getAttribute('data-image');
        const sizes = card.getAttribute('data-sizes');

        document.getElementById('productTitle').textContent = name;
        document.getElementById('productPrice').textContent = price;
        document.getElementById('mainImage').src = image;
        document.getElementById('mainImage').alt = name;

        // Handle size section visibility and population
        const sizeSection = document.querySelector('.size-section');
        const sizeOptionsContainer = document.querySelector('.size-options');

        if (sizes && sizes.trim() !== '') {
            sizeSection.style.display = 'block'; // Show size section
            sizeOptionsContainer.innerHTML = ''; // Clear existing options

            const sizeArray = sizes.split(',');
            sizeArray.forEach(size => {
                const sizeButton = document.createElement('button');
                sizeButton.className = 'size-option';
                sizeButton.textContent = size.trim();
                sizeButton.onclick = function() { selectSize(this); };
                sizeOptionsContainer.appendChild(sizeButton);
            });
        } else {
            sizeSection.style.display = 'none'; // Hide size section for accessories
        }

        document.getElementById('modalOverlay').style.display = 'flex';
    }

    function closeModal() {
        document.getElementById('modalOverlay').style.display = 'none';
    }

    function closeModalOnOverlay(event) {
        if (event.target === document.getElementById('modalOverlay')) {
            closeModal();
        }
    }

    // Color Selection
    function selectColor(element) {
        document.querySelectorAll('.color-option').forEach(btn => {
            btn.classList.remove('selected');
        });
        element.classList.add('selected');
    }

    // Size Selection
    function selectSize(element) {
        document.querySelectorAll('.size-option').forEach(btn => {
            btn.classList.remove('selected');
        });
        element.classList.add('selected');
    }

    // Quantity Control
    function increaseQuantity() {
        const input = document.getElementById('quantityInput');
        input.value = parseInt(input.value) + 1;
    }

    function decreaseQuantity() {
        const input = document.getElementById('quantityInput');
        if (parseInt(input.value) > 1) {
            input.value = parseInt(input.value) - 1;
        }
    }

    // Add to Cart
    function addToCart() {
        const size = document.querySelector('.size-option.selected');
        const color = document.querySelector('.color-option.selected');
        const quantity = document.getElementById('quantityInput').value;
        
        if (!size) {
            alert('Please select a size');
            return;
        }
        
        if (!color) {
            alert('Please select a color');
            return;
        }
        
        alert(`Added ${quantity} item(s) in size ${size.textContent} to cart!`);
        closeModal();
    }

    // Keyboard shortcut to close modal (ESC key)
    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closeModal();
        }
    });
</script>