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
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90',
        'brand' => 'T-Shirts',
        'name' => 'Premium Cotton Tee',
        'price' => '₱349 <span class="product-price-old">₱599</span>',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Street Style Kicks',
        'price' => '₱1,899',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Shirts',
        'name' => 'Casual Button Down',
        'price' => '₱799',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'High-Top Sneakers',
        'price' => '₱1,599',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400&h=400&fit=crop&q=90',
        'brand' => 'T-Shirts',
        'name' => 'Graphic Print Tee',
        'price' => '₱449',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sneakers',
        'name' => 'Retro Runners',
        'price' => '₱999 <span class="product-price-old">₱1,599</span>',
        'category' => 'shoes'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&h=400&fit=crop&q=90',
        'brand' => 'Shirts',
        'name' => 'Polo Shirt Classic',
        'price' => '₱649',
        'category' => 'shirts'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1506629905607-0b5b8b5e4b8f?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Leather Belt',
        'price' => '₱299',
        'category' => 'accessories'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop&q=90',
        'brand' => 'Accessories',
        'name' => 'Classic Watch',
        'price' => '₱1,499',
        'category' => 'accessories'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=400&h=400&fit=crop&q=90',
        'brand' => 'Collections',
        'name' => 'Summer Collection Tee',
        'price' => '₱399',
        'category' => 'collections'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1549298916-b41d501d3772?w=400&h=400&fit=crop&q=90',
        'brand' => 'Collections',
        'name' => 'Urban Style Sneakers',
        'price' => '₱1,299',
        'category' => 'collections'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1441986300917-64674bd600d8?w=400&h=400&fit=crop&q=90',
        'brand' => 'Sale',
        'name' => 'Discounted Hoodie',
        'price' => '₱599 <span class="product-price-old">₱899</span>',
        'category' => 'sale'
      ],
      [
        'image' => 'https://images.unsplash.com/photo-1515347619252-60a4bf4fff4f?w=400&h=400&fit=crop&q=90',
        'brand' => 'New Arrivals',
        'name' => 'Latest Sneaker Drop',
        'price' => '₱1,799',
        'category' => 'new-arrivals'
      ]
    ];

    foreach ($products as $product) {
      $matchesCategory = $category === 'all' || $product['category'] === $category;
      $matchesSearch = !$search || stripos($product['name'], $search) !== false || stripos($product['brand'], $search) !== false;
      if ($matchesCategory && $matchesSearch) {
        echo '<a href="#" class="product-card">';
        echo '<img src="' . $product['image'] . '" class="product-image" alt="Product" />';
        echo '<div class="product-info">';
        echo '<p class="product-brand">' . $product['brand'] . '</p>';
        echo '<h3 class="product-name">' . $product['name'] . '</h3>';
        echo '<p class="product-price">' . $product['price'] . '</p>';
        echo '</div>';
        echo '</a>';
      }
    }
    ?>
  </div>
</section>
