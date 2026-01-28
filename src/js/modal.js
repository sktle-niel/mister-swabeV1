// Modal Functions
function openModal(card) {
  const name = card.getAttribute("data-name");
  const price = card.getAttribute("data-price");
  const image = card.getAttribute("data-image");
  const sizes = card.getAttribute("data-sizes");

  document.getElementById("productTitle").textContent = name;
  document.getElementById("productPrice").textContent = price;
  document.getElementById("mainImage").src = image;
  document.getElementById("mainImage").alt = name;

  // Handle size section visibility and population
  const sizeSection = document.querySelector(".size-section");
  const sizeOptionsContainer = document.querySelector(".size-options");

  if (sizes && sizes.trim() !== "") {
    sizeSection.style.display = "block"; // Show size section
    sizeOptionsContainer.innerHTML = ""; // Clear existing options

    const sizeArray = sizes.split(",");
    sizeArray.forEach((size) => {
      const sizeButton = document.createElement("button");
      sizeButton.className = "size-option";
      sizeButton.textContent = size.trim();
      sizeButton.onclick = function () {
        selectSize(this);
      };
      sizeOptionsContainer.appendChild(sizeButton);
    });
  } else {
    sizeSection.style.display = "none"; // Hide size section for accessories
  }

  document.getElementById("modalOverlay").style.display = "flex";
}

function closeModal() {
  document.getElementById("modalOverlay").style.display = "none";
}

function closeModalOnOverlay(event) {
  if (event.target === document.getElementById("modalOverlay")) {
    closeModal();
  }
}

// Color Selection
function selectColor(element) {
  document.querySelectorAll(".color-option").forEach((btn) => {
    btn.classList.remove("selected");
  });
  element.classList.add("selected");
}

// Size Selection
function selectSize(element) {
  document.querySelectorAll(".size-option").forEach((btn) => {
    btn.classList.remove("selected");
  });
  element.classList.add("selected");
}

// Quantity Control
function increaseQuantity() {
  const input = document.getElementById("quantityInput");
  input.value = parseInt(input.value) + 1;
}

function decreaseQuantity() {
  const input = document.getElementById("quantityInput");
  if (parseInt(input.value) > 1) {
    input.value = parseInt(input.value) - 1;
  }
}

// Add to Cart
function addToCart() {
  const size = document.querySelector(".size-option.selected");
  const color = document.querySelector(".color-option.selected");
  const quantity = document.getElementById("quantityInput").value;

  if (!size) {
    alert("Please select a size");
    return;
  }

  if (!color) {
    alert("Please select a color");
    return;
  }

  alert(`Added ${quantity} item(s) in size ${size.textContent} to cart!`);
  closeModal();
}

// Keyboard shortcut to close modal (ESC key)
document.addEventListener("keydown", function (event) {
  if (event.key === "Escape") {
    closeModal();
  }
});
