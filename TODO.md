# TODO: Implement Sale Details Display on Right Side After Creation

- [x] Modify `back-end/create/addSales.php` to return the generated `sale_id` in the success response.
- [x] Create a new endpoint `back-end/read/fetchSale.php` to fetch a single sale by `sale_id`, including sale details and associated products/items.
- [x] Update `public/staff/pages/addSales.php` to add a right-side div (e.g., a new column or section) for displaying the sale details after creation.
- [x] Modify `src/js/addSales.js` to, upon successful sale creation, use the returned `sale_id` to fetch and display the sale product information in the right-side div (instead of just resetting the form).
- [x] Adjust the order: Display sale details before showing the success message.
