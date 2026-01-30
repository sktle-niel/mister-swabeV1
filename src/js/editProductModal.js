// Fetch and populate categories
function loadCategories() {
  fetch("../../back-end/read/fetchCategory.php")
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        const categorySelects = document.querySelectorAll(
          "#productCategory, #editProductCategory",
        );
        categorySelects.forEach((select) => {
          // Clear existing options except the first one
          select.innerHTML = '<option value="">Select Category</option>';
          data.categories.forEach((category) => {
            const option = document.createElement("option");
            option.value = category.id;
            option.textContent = category.name;
            select.appendChild(option);
          });
        });
      }
    })
    .catch((error) => console.error("Error loading categories:", error));
}

// Load categories when page loads
document.addEventListener("DOMContentLoaded", loadCategories);

// Edit Product Modal Functions
function closeEditProductModal() {
  document.getElementById("editProductModalOverlay").style.display = "none";
  document.getElementById("editProductForm").reset();
}

function closeEditProductModalOnOverlay(event) {
  if (event.target === document.getElementById("editProductModalOverlay")) {
    closeEditProductModal();
  }
}

function openEditProductModal(sku) {
  const product = products.find((p) => p.sku === sku);
  if (product) {
    document.getElementById("editProductSku").value = product.sku;
    document.getElementById("editProductName").value = product.name;
    document.getElementById("editProductSKU").value = product.sku;
    document.getElementById("editProductCategory").value = product.category;
    document.getElementById("editProductPrice").value = product.price;
    document.getElementById("editProductStock").value = product.stock;
    document.getElementById("editProductSize").value = product.size || "";
    // Clear image previews
    document.getElementById("editImagePreview").innerHTML = "";
    document.getElementById("editProductModalOverlay").style.display = "flex";
  }
}

function handleEditDragOver(event) {
  event.preventDefault();
  event.stopPropagation();
  const container = document.getElementById("editImageUploadContainer");
  container.style.borderColor = "#3b82f6";
  container.style.backgroundColor = "#eff6ff";
}

function handleEditDragLeave(event) {
  event.preventDefault();
  event.stopPropagation();
  const container = document.getElementById("editImageUploadContainer");
  container.style.borderColor = "#ddd";
  container.style.backgroundColor = "#fafafa";
}

function handleEditDrop(event) {
  event.preventDefault();
  event.stopPropagation();
  const container = document.getElementById("editImageUploadContainer");
  container.style.borderColor = "#ddd";
  container.style.backgroundColor = "#fafafa";

  const files = event.dataTransfer.files;
  const fileInput = document.getElementById("editProductImages");
  fileInput.files = files;
  handleEditImageSelection({ target: { files: files } });
}

function handleEditImageSelection(event) {
  const files = event.target.files;
  const previewContainer = document.getElementById("editImagePreview");
  previewContainer.innerHTML = "";

  for (let i = 0; i < files.length; i++) {
    const file = files[i];
    if (file.type !== "image/png" && file.type !== "image/jpeg") {
      alert("Only PNG and JPG files are allowed.");
      event.target.value = "";
      return;
    }
    if (file.size > 4 * 1024 * 1024) {
      alert("File size exceeds 4MB limit.");
      event.target.value = "";
      return;
    }

    const reader = new FileReader();
    reader.onload = function (e) {
      const imgContainer = document.createElement("div");
      imgContainer.style.position = "relative";
      imgContainer.style.display = "inline-block";

      const img = document.createElement("img");
      img.src = e.target.result;
      img.style.width = "80px";
      img.style.height = "80px";
      img.style.objectFit = "cover";
      img.style.borderRadius = "4px";
      img.style.border = "1px solid #ddd";

      const removeBtn = document.createElement("button");
      removeBtn.innerHTML = "×";
      removeBtn.style.position = "absolute";
      removeBtn.style.top = "-5px";
      removeBtn.style.right = "-5px";
      removeBtn.style.background = "red";
      removeBtn.style.color = "white";
      removeBtn.style.border = "none";
      removeBtn.style.borderRadius = "50%";
      removeBtn.style.width = "20px";
      removeBtn.style.height = "20px";
      removeBtn.style.cursor = "pointer";
      removeBtn.style.fontSize = "12px";
      removeBtn.onclick = function () {
        imgContainer.remove();
      };

      imgContainer.appendChild(img);
      imgContainer.appendChild(removeBtn);
      previewContainer.appendChild(imgContainer);
    };
    reader.readAsDataURL(file);
  }
}

function updateProduct() {
  const form = document.getElementById("editProductForm");
  if (!form.checkValidity()) {
    form.reportValidity();
    return;
  }

  const originalSku = document.getElementById("editProductSku").value;
  const name = document.getElementById("editProductName").value.trim();
  const sku = document.getElementById("editProductSKU").value.trim();
  const category = document.getElementById("editProductCategory").value;
  const price = document
    .getElementById("editProductPrice")
    .value.trim()
    .replace("₱", "");
  const stock = parseInt(document.getElementById("editProductStock").value);
  const size = document.getElementById("editProductSize").value.trim();

  // Check if new SKU already exists (excluding the current product)
  if (sku !== originalSku && products.some((p) => p.sku === sku)) {
    alert("A product with this SKU already exists!");
    return;
  }

  // Prepare data for AJAX request
  const formData = new FormData();
  formData.append("originalSku", originalSku);
  formData.append("name", name);
  formData.append("sku", sku);
  formData.append("category", category);
  formData.append("price", price);
  formData.append("stock", stock);
  formData.append("size", size);

  // Append image files
  const imageInput = document.getElementById("editProductImages");
  for (let i = 0; i < imageInput.files.length; i++) {
    formData.append("editProductImages[]", imageInput.files[i]);
  }

  // Send AJAX request to editProduct.php
  fetch("../../back-end/update/editProduct.php", {
    method: "POST",
    body: formData,
  })
    .then((response) => response.json())
    .then((data) => {
      if (data.success) {
        // Update the local products array
        const productIndex = products.findIndex((p) => p.sku === originalSku);
        if (productIndex !== -1) {
          // Determine status based on stock
          let status = "In Stock";
          if (stock === 0) status = "Out of Stock";
          else if (stock <= 10) status = "Low Stock";

          const updatedProduct = {
            id: products[productIndex].id,
            name,
            sku,
            category,
            price,
            stock,
            status,
            image:
              data.images && data.images.length > 0
                ? data.images[0]
                : products[productIndex].image,
            size: size || "N/A",
          };
          products[productIndex] = updatedProduct;
          localStorage.setItem("inventoryProducts", JSON.stringify(products));
          renderProducts(products);
        }

        // Show success message
        const successMessage = document.getElementById("successMessage");
        const successText = successMessage.querySelector(".success-text");
        successText.textContent = "Product Updated Successfully!";
        successMessage.style.display = "block";

        setTimeout(() => {
          successMessage.style.display = "none";
        }, 3000);

        closeEditProductModal();
      } else {
        alert(data.message || "Error updating product");
      }
    })
    .catch((error) => {
      console.error("Error:", error);
      alert("Error updating product");
    });
}
