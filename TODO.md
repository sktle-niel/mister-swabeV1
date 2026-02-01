# TODO List for Add Quantity Modal Modifications

## Completed Tasks

- [x] Modify `back-end/update/addQuantity.php` to update `size_quantities` JSON field instead of `stock`
- [x] Modify `back-end/read/getSizes.php` to fetch size-specific quantities from `size_quantities`
- [x] Add "Size Quantity" column to inventory table after "Size" column
- [x] Modify `back-end/read/fetchProduct.php` to include `size_quantities` in SELECT query and response
- [x] Update `src/js/inventory.js` renderProducts function to display size quantities with improved parsing logic

## Pending Tasks

- [ ] Test the quantity addition functionality
- [ ] Verify that quantities are saved and displayed correctly per size
