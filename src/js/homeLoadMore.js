// Product Pagination with Load More Functionality
document.addEventListener("DOMContentLoaded", function () {
  const productsPerPage = 12;
  let currentlyShown = 0;

  const productCards = document.querySelectorAll(".product-card");
  const loadMoreBtn = document.getElementById("loadMoreBtn");
  const totalProducts = productCards.length;

  // Initially hide all products
  productCards.forEach((card) => {
    card.classList.add("hidden");
  });

  // Function to show products
  function showProducts(count) {
    const endIndex = Math.min(currentlyShown + count, totalProducts);

    for (let i = currentlyShown; i < endIndex; i++) {
      productCards[i].classList.remove("hidden");
    }

    currentlyShown = endIndex;

    // Hide load more button if all products are shown
    if (currentlyShown >= totalProducts) {
      loadMoreBtn.style.display = "none";
    }

    // Update button text to show remaining products
    updateButtonText();
  }

  // Function to update button text
  function updateButtonText() {
    const remaining = totalProducts - currentlyShown;
    if (remaining > 0) {
      loadMoreBtn.textContent = `Load More Products (${remaining} remaining)`;
    }
  }

  // Show initial 12 products
  showProducts(productsPerPage);

  // Load more button click event
  loadMoreBtn.addEventListener("click", function () {
    showProducts(productsPerPage);

    // Smooth scroll to first newly loaded product
    const firstNewProduct =
      productCards[
        currentlyShown -
          Math.min(
            productsPerPage,
            totalProducts - (currentlyShown - productsPerPage),
          )
      ];
    if (firstNewProduct) {
      setTimeout(() => {
        firstNewProduct.scrollIntoView({
          behavior: "smooth",
          block: "nearest",
        });
      }, 100);
    }
  });
});

// Hero Slider Functionality
let currentSlide = 0;
const slides = document.querySelectorAll(".slide");
const dots = document.querySelectorAll(".slider-dot");

function showSlide(n) {
  slides.forEach((slide) => slide.classList.remove("active"));
  dots.forEach((dot) => dot.classList.remove("active"));

  currentSlide = (n + slides.length) % slides.length;
  slides[currentSlide].classList.add("active");
  dots[currentSlide].classList.add("active");
}

// Auto slide every 5 seconds
setInterval(() => {
  showSlide(currentSlide + 1);
}, 5000);

// Dot navigation
dots.forEach((dot, index) => {
  dot.addEventListener("click", () => {
    showSlide(index);
  });
});
