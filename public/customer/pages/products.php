<!-- Products Section -->
<section class="featured-products">
  <div class="section-header">
    <h2 class="section-title">
      <?php
      $category = isset($_GET['category']) ? $_GET['category'] : 'all';
      $search = isset($_GET['search']) ? $_GET['search'] : '';
      $title = $search ? 'Search Results for "' . htmlspecialchars($search) . '"' : ucfirst($category) . ' Products';
      echo $title;
      ?>
    </h2>
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
        'sizes' => '31,32,33,34,35,40,41,42',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Street Style Kicks',
        'price' => '₱1,899',
        'sizes' => '33,36,39,42',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'High-Top Sneakers',
        'price' => '₱1,599',
        'sizes' => '31,32,33,34,35,36,37',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Retro Runners',
        'price' => '₱999 <span class="product-price-old">₱1,599</span>',
        'sizes' => '31,34,37,40,42',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Comfort Walking Shoes',
        'price' => '₱1,499',
        'sizes' => '35,38,41,44',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Athletic Performance Shoes',
        'price' => '₱2,199',
        'sizes' => '36,39,42,45',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1546519638-68e109498ffc?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Basketball Shoes',
        'price' => '₱1,699',
        'sizes' => '35,38,41,44',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1525966222134-fcfa99b8ae77?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Casual Sneakers',
        'price' => '₱999',
        'sizes' => '36,39,42,45',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Urban Sneakers',
        'price' => '₱1,299',
        'sizes' => '34,37,40,43',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Vintage Runners',
        'price' => '₱1,099',
        'sizes' => '32,35,38,41',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Training Shoes',
        'price' => '₱1,399',
        'sizes' => '33,36,39,42',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Lifestyle Sneakers',
        'price' => '₱1,799',
        'sizes' => '34,37,40,43',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Mid-Top Sneakers',
        'price' => '₱1,499',
        'sizes' => '35,38,41,44',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Daily Wear Shoes',
        'price' => '₱899',
        'sizes' => '36,39,42,45',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Classic White Sneakers',
        'price' => '₱1,199',
        'sizes' => '31,32,33,34,35,36',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Running Essentials',
        'price' => '₱1,099',
        'sizes' => '37,38,39,40,41,42',
        'category' => 'shoes'
      ],

      // Shirts Category
      [
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
        'brand' => 'T-Shirts',
        'name' => 'Premium Cotton Tee',
        'price' => '₱349 <span class="product-price-old">₱599</span>',
        'sizes' => 'Small,Medium,Large',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Shirts',
        'name' => 'Casual Button Down',
        'price' => '₱799',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400&h=400&fit=crop&q=90',
        'brand' => 'T-Shirts',
        'name' => 'Graphic Print Tee',
        'price' => '₱449',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&h=400&fit=crop&q=90',
        'brand' => 'Shirts',
        'name' => 'Polo Shirt Classic',
        'price' => '₱649',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
        'brand' => 'T-Shirts',
        'name' => 'Vintage Graphic Tee',
        'price' => '₱399',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Shirts',
        'name' => 'Denim Button Up',
        'price' => '₱899',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'shirts'
      ],

      // Accessories Category
      [
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Classic Watch',
        'price' => '₱1,499',
        'category' => 'accessories'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1572635196237-14b3f281503f?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Designer Sunglasses',
        'price' => '₱899',
        'category' => 'accessories'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Leather Wallet',
        'price' => '₱349',
        'category' => 'accessories'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1588850561407-ed78c282e89b?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Baseball Cap',
        'price' => '₱199',
        'category' => 'accessories'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Leather Belt',
        'price' => '₱299',
        'category' => 'accessories'
      ],

      // Collections Category
      [
        'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop&q=90',
        'brand' => 'Collections',
        'name' => 'Summer Collection Tee',
        'price' => '₱399',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'collections'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop&q=90',
        'brand' => 'Collections',
        'name' => 'Urban Style Sneakers',
        'price' => '₱1,299',
        'sizes' => '33,36,39,42',
        'category' => 'collections'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
        'brand' => 'Collections',
        'name' => 'Streetwear Bundle',
        'price' => '₱1,499',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'collections'
      ],

      // Sale Category
      [
        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sale',
        'name' => 'Discounted Hoodie',
        'price' => '₱599 <span class="product-price-old">₱899</span>',
        'category' => 'sale'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sale',
        'name' => 'Clearance Sneakers',
        'price' => '₱799 <span class="product-price-old">₱1,299</span>',
        'sizes' => '35,38,41,44',
        'category' => 'sale'
      ],

      // New Arrivals Category
      [
        'image' => 'https://images.unsplash.com/photo-1515347619252-60a4bf4fff4f?w=400&h=400&fit=crop&q=90',
        'brand' => 'New Arrivals',
        'name' => 'Latest Sneakers Drop',
        'price' => '₱1,799',
        'sizes' => '32,35,38,41',
        'category' => 'new-arrivals'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
        'brand' => 'New Arrivals',
        'name' => 'Fresh Print Tee',
        'price' => '₱499',
        'sizes' => 'Small,Medium,Large,X-Large',
        'category' => 'new-arrivals'
      ]
    ];

    $productIndex = 0;
    $totalMatchingProducts = 0;

    // First pass: count total matching products
    foreach ($products as $product) {
      $matchesCategory = $category === 'all' || $product['category'] === $category;
      $matchesSearch = !$search || stripos($product['name'], $search) !== false || stripos($product['brand'], $search) !== false;
      if ($matchesCategory && $matchesSearch) {
        $totalMatchingProducts++;
      }
    }

    // Second pass: output products
    foreach ($products as $product) {
      $matchesCategory = $category === 'all' || $product['category'] === $category;
      $matchesSearch = !$search || stripos($product['name'], $search) !== false || stripos($product['brand'], $search) !== false;
      if ($matchesCategory && $matchesSearch) {
        $hiddenClass = $productIndex >= 12 ? ' hidden' : '';
        echo '<div class="product-card' . $hiddenClass . '" onclick="openModal(this)" data-name="' . htmlspecialchars($product['name']) . '" data-price="' . htmlspecialchars($product['price']) . '" data-image="' . htmlspecialchars($product['image']) . '" data-sizes="' . htmlspecialchars($product['sizes'] ?? '') . '">';
        echo '<img src="' . $product['image'] . '" class="product-image" alt="Product" />';
        echo '<div class="product-info">';
        echo '<p class="product-brand">' . $product['brand'] . '</p>';
        echo '<h3 class="product-name">' . $product['name'] . '</h3>';
        echo '<p class="product-price">' . $product['price'] . '</p>';
        echo '</div>';
        echo '</div>';
        $productIndex++;
      }
    }
    ?>
  </div>

    <!-- Load More Button -->
    <?php if ($totalMatchingProducts > 12): ?>
    <div class="load-more-container">
      <button id="loadMoreBtn" class="load-more-btn">Load More Products</button>
    </div>
    <?php endif; ?>
</section>

<script src="../../../src/js/productsLoadMore.js"></script>
