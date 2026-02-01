  <!-- Hero Slider -->
  <div class="hero-slider">
    <div class="slide active">
      <img
        src="https://images.unsplash.com/photo-1556906781-9a412961c28c?w=1600&h=600&fit=crop&q=90"
        alt="Featured Collection"
      />
      <div class="slide-overlay">
        <div class="slide-content">
          <h1>New Sneaker Collection</h1>
          <p>Step up your style game with our latest arrivals</p>
        </div>
      </div>
    </div>
    <div class="slide">
      <img
        src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=1600&h=600&fit=crop&q=90"
        alt="Shirt Collection"
      />
      <div class="slide-overlay">
        <div class="slide-content">
          <h1>Premium T-Shirts</h1>
          <p>Comfort meets style in every piece</p>
        </div>
      </div>
    </div>
    <div class="slide">
      <img
        src="https://images.unsplash.com/photo-1603252109303-2751441dd157?w=1600&h=600&fit=crop&q=90"
        alt="Sale Banner"
      />
      <div class="slide-overlay">
        <div class="slide-content">
          <h1>Flash Sale - Up to 50% OFF</h1>
          <p>Limited time offer on selected items</p>
        </div>
      </div>
    </div>
    <div class="slider-nav">
      <div class="slider-dot active"></div>
      <div class="slider-dot"></div>
      <div class="slider-dot"></div>
    </div>
  </div>

  <!-- Category Banners -->
  <div class="section-header">
    <h2 class="section-title">Shop by Category</h2>
    <p class="section-subtitle">Explore our diverse collection of fashion items</p>
  </div>
  <div class="category-banners">
    <div class="category-banner" onclick="window.location.href='main.php?page=products&category=shoes'">
      <img
        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=700&h=350&fit=crop&q=90"
        alt="Shoes"
      />
      <div class="category-banner-overlay">
        <h3>SHOES</h3>
      </div>
    </div>
    <div class="category-banner" onclick="window.location.href='main.php?page=products&category=shirts'">
      <img
        src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=700&h=350&fit=crop&q=90"
        alt="Shirts"
      />
      <div class="category-banner-overlay">
        <h3>SHIRTS</h3>
      </div>
    </div>
    <div class="category-banner" onclick="window.location.href='main.php?page=products&category=accessories'">
      <img
        src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=700&h=350&fit=crop&q=90"
        alt="Accessories"
      />
      <div class="category-banner-overlay">
        <h3>ACCESSORIES</h3>
      </div>
    </div>
    <div class="category-banner" onclick="window.location.href='main.php?page=products&category=collections'">
      <img
        src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=700&h=350&fit=crop&q=90"
        alt="Collections"
      />
      <div class="category-banner-overlay">
        <h3>COLLECTIONS</h3>
      </div>
    </div>
    <div class="category-banner" onclick="window.location.href='main.php?page=products&category=sale'">
      <img
        src="https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=700&h=350&fit=crop&q=90"
        alt="Sale"
      />
      <div class="category-banner-overlay">
        <h3>SALE</h3>
      </div>
    </div>
    <div class="category-banner" onclick="window.location.href='main.php?page=products&category=new-arrivals'">
      <img
        src="https://images.unsplash.com/photo-1515347619252-60a4bf4fff4f?w=700&h=350&fit=crop&q=90"
        alt="New Arrivals"
      />
      <div class="category-banner-overlay">
        <h3>NEW ARRIVALS</h3>
      </div>
    </div>
  </div>

  <!-- Featured Products -->
  <section class="featured-products">
    <div class="section-header">
      <h2 class="section-title">Featured Products</h2>
      <p class="section-subtitle">Handpicked items just for you</p>
    </div>

    <div class="products-grid">
      <?php
      include '../../back-end/read/homeFetchProduct.php';
      $products = fetchHomeProducts();

      $productIndex = 0;
      foreach ($products as $product) {
        $hiddenClass = $productIndex >= 12 ? ' hidden' : '';
        echo '<div class="product-card' . $hiddenClass . '" onclick="openModal(this)" data-name="' . htmlspecialchars($product['name']) . '" data-price="' . htmlspecialchars($product['price']) . '" data-image="' . htmlspecialchars($product['image']) . '" data-sizes="' . htmlspecialchars($product['sizes']) . '">';
        echo '<img src="' . $product['image'] . '" class="product-image" alt="Product" />';
        echo '<div class="product-info">';
        echo '<p class="product-brand">' . $product['brand'] . '</p>';
        echo '<h3 class="product-name">' . $product['name'] . '</h3>';
        echo '<p class="product-price">' . $product['price'] . '</p>';
        echo '</div>';
        echo '</div>';
        $productIndex++;
      }
      ?>
    </div>

    <!-- Load More Button -->
    <div class="load-more-container">
      <button id="loadMoreBtn" class="load-more-btn">Load More Products</button>
    </div>
  </section>

  <script src="../../../src/js/homeLoadMore.js"></script>
