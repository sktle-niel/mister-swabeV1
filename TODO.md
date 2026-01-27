# TODO: Make Product Modal Dynamic

## Steps to Complete

- [x] Edit productModal.php: Remove dummy data and add IDs for dynamic elements (e.g., id="productTitle", id="productPrice", id="mainImage"). Ensure modal starts hidden (display: none). Add JavaScript function to open modal with data.
- [x] Edit products.php: Change product cards to divs/buttons with onclick="openModal(this)". Add data attributes (data-name, data-price, data-image, data-sizes) to cards.
- [x] Edit home.php: Change product cards to divs/buttons with onclick="openModal(this)". Add data attributes (data-name, data-price, data-image, data-sizes) to cards.
- [x] Add JavaScript: Implement openModal function to populate modal from card data, including dynamic size options.
- [x] Include productModal.php in main.php to load the modal component on the page.
- [x] Test modal functionality: Click on a product card in products.php or home.php to open the modal with the correct data, including sizes.
