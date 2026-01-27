<!-- Cart Overlay -->
<div class="cart-overlay" id="cartOverlay" onclick="closeCart()"></div>

<!-- Cart Sidebar -->
<div class="cart-sidebar" id="cartSidebar">
    <!-- Cart Header -->
    <div class="cart-header">
        <h2>Shopping Cart</h2>
        <button class="cart-close-btn" onclick="closeCart()" aria-label="Close cart">
            <svg fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/>
            </svg>
        </button>
    </div>

    <!-- Cart Content Will Be Loaded Here -->
    <div class="cart-content-container" id="cartContent">
        <div class="cart-loading">
            <div class="cart-loading-spinner"></div>
        </div>
    </div>
</div>

<script>
    let cartIsOpen = false;

    function openCart() {
        cartIsOpen = true;
        document.getElementById('cartOverlay').classList.add('active');
        document.getElementById('cartSidebar').classList.add('active');
        document.body.style.overflow = 'hidden'; // Prevent background scrolling
        
        // Load cart content from /userCart.php
        loadCartContent();
    }

    function closeCart() {
        cartIsOpen = false;
        document.getElementById('cartOverlay').classList.remove('active');
        document.getElementById('cartSidebar').classList.remove('active');
        document.body.style.overflow = ''; // Restore scrolling
    }

    function loadCartContent() {
        const cartContent = document.getElementById('cartContent');
        
        // Show loading state
        cartContent.innerHTML = '<div class="cart-loading"><div class="cart-loading-spinner"></div></div>';
        
        // Fetch cart content
        fetch('/userCart.php')
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to load cart');
                }
                return response.text();
            })
            .then(html => {
                cartContent.innerHTML = html;
            })
            .catch(error => {
                console.error('Error loading cart:', error);
                cartContent.innerHTML = `
                    <div class="cart-error">
                        <p>Failed to load cart. Please try again.</p>
                        <button class="cart-retry-btn" onclick="loadCartContent()">Retry</button>
                    </div>
                `;
            });
    }

    // Add click event to cart icon when DOM is ready
    document.addEventListener('DOMContentLoaded', function() {
        // Find all cart icon links and add click event
        const cartLinks = document.querySelectorAll('a[title="Cart"]');
        cartLinks.forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                openCart();
            });
        });

        // Close cart with Escape key
        document.addEventListener('keydown', function(e) {
            if (e.key === 'Escape' && cartIsOpen) {
                closeCart();
            }
        });
    });

    // Optional: Function to refresh cart (can be called from other scripts)
    function refreshCart() {
        if (cartIsOpen) {
            loadCartContent();
        }
    }
</script>