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
      $products = [
        [
          'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'Classic Running Shoes',
          'price' => '₱1,299',
          'sizes' => '31,32,33,34,35,36,37,38,39,40,41,42'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
          'brand' => 'T-Shirts',
          'name' => 'Premium Cotton Tee',
          'price' => '₱349 <span class="product-price-old">₱599</span>',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'Street Style Kicks',
          'price' => '₱1,899',
          'sizes' => '33,36,39,42'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=400&h=400&fit=crop&q=90',
          'brand' => 'Shirts',
          'name' => 'Casual Button Down',
          'price' => '₱799',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'High-Top Sneakers',
          'price' => '₱1,599',
          'sizes' => '31,32,33,34,35,36,37,38,39,40,41,42'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400&h=400&fit=crop&q=90',
          'brand' => 'T-Shirts',
          'name' => 'Graphic Print Tee',
          'price' => '₱449',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'Retro Runners',
          'price' => '₱999 <span class="product-price-old">₱1,599</span>',
          'sizes' => '31,34,37,40,42'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&h=400&fit=crop&q=90',
          'brand' => 'Shirts',
          'name' => 'Polo Shirt Classic',
          'price' => '₱649',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop&q=90',
          'brand' => 'Accessories',
          'name' => 'Luxury Watch',
          'price' => '₱2,499',
          'sizes' => ''
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&h=400&fit=crop&q=90',
          'brand' => 'Accessories',
          'name' => 'Designer Sunglasses',
          'price' => '₱899',
          'sizes' => ''
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop&q=90',
          'brand' => 'Accessories',
          'name' => 'Leather Wallet',
          'price' => '₱349',
          'sizes' => ''
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'Urban Sneakers',
          'price' => '₱1,299',
          'sizes' => '34,37,40,43'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1551537482-f2075a1d41f2?w=400&h=400&fit=crop&q=90',
          'brand' => 'Jackets',
          'name' => 'Vintage Denim Jacket',
          'price' => '₱1,499',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1556821840-3a63f95609a7?w=400&h=400&fit=crop&q=90',
          'brand' => 'Hoodies',
          'name' => 'Casual Hoodie',
          'price' => '₱799',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1506629905607-0b5b8b5e4b8f?w=400&h=400&fit=crop&q=90',
          'brand' => 'Athletic Wear',
          'name' => 'Running Shorts',
          'price' => '₱299',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1546519638-68e109498ffc?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'Basketball Shoes',
          'price' => '₱1,699',
          'sizes' => '35,38,41,44'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=400&h=400&fit=crop&q=90',
          'brand' => 'Accessories',
          'name' => 'Baseball Cap',
          'price' => '₱199',
          'sizes' => ''
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1591047139829-d91aecb6caea?w=400&h=400&fit=crop&q=90',
          'brand' => 'Jackets',
          'name' => 'Sport Jacket',
          'price' => '₱1,299',
          'sizes' => 'Small,Medium,Large,X-Large'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=400&h=400&fit=crop&q=90',
          'brand' => 'Sneakers',
          'name' => 'Casual Sneakers',
          'price' => '₱999',
          'sizes' => '36,39,42,45'
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop&q=90',
          'brand' => 'Accessories',
          'name' => 'Leather Belt',
          'price' => '₱299',
          'sizes' => ''
        ],
        [
          'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
          'brand' => 'T-Shirts',
          'name' => 'Graphic Tee',
          'price' => '₱449',
          'sizes' => 'Small,Medium,Large,X-Large'
        ]
      ];

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
