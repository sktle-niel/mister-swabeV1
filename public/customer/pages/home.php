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
        <button class="slide-btn">Shop Now</button>
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
        <button class="slide-btn">Explore</button>
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
        <button class="slide-btn">Shop Sale</button>
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
<div class="category-banners">
  <div class="category-banner">
    <img
      src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=700&h=350&fit=crop&q=90"
      alt="Sneakers"
    />
    <div class="category-banner-overlay">
      <h3>SNEAKERS</h3>
    </div>
  </div>
  <div class="category-banner">
    <img
      src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=700&h=350&fit=crop&q=90"
      alt="Shirts"
    />
    <div class="category-banner-overlay">
      <h3>SHIRTS</h3>
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
    <div class="product-card" onclick="openModal(this)" data-name="Classic Running Shoes" data-price="₱1,299" data-image="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90" data-sizes="31,32,33,34,35,36,37,38,39,40,41,42">
      <img
        src="https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Sneakers</p>
        <h3 class="product-name">Classic Running Shoes</h3>
        <p class="product-price">₱1,299</p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Premium Cotton Tee" data-price="₱349 <span class='product-price-old'>₱599</span>" data-image="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90" data-sizes="Small,Medium,Large,X-Large">
      <img
        src="https://images.unsplash.com/photo-1521572163474-6864f9cf17ab?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">T-Shirts</p>
        <h3 class="product-name">Premium Cotton Tee</h3>
        <p class="product-price product-price-sale">
          ₱349 <span class="product-price-old">₱599</span>
        </p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Street Style Kicks" data-price="₱1,899" data-image="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90" data-sizes="33,36,39,42">
      <img
        src="https://images.unsplash.com/photo-1606107557195-0e29a4b5b4aa?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Sneakers</p>
        <h3 class="product-name">Street Style Kicks</h3>
        <p class="product-price">₱1,899</p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Casual Button Down" data-price="₱799" data-image="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=400&h=400&fit=crop&q=90" data-sizes="Small,Medium,Large,X-Large">
      <img
        src="https://images.unsplash.com/photo-1583743814966-8936f5b7be1a?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Shirts</p>
        <h3 class="product-name">Casual Button Down</h3>
        <p class="product-price">₱799</p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="High-Top Sneakers" data-price="₱1,599" data-image="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=400&h=400&fit=crop&q=90" data-sizes="31,32,33,34,35,36,37,38,39,40,41,42">
      <img
        src="https://images.unsplash.com/photo-1600185365483-26d7a4cc7519?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Sneakers</p>
        <h3 class="product-name">High-Top Sneakers</h3>
        <p class="product-price">₱1,599</p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Graphic Print Tee" data-price="₱449" data-image="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400&h=400&fit=crop&q=90" data-sizes="Small,Medium,Large,X-Large">
      <img
        src="https://images.unsplash.com/photo-1618354691373-d851c5c3a990?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">T-Shirts</p>
        <h3 class="product-name">Graphic Print Tee</h3>
        <p class="product-price">₱449</p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Retro Runners" data-price="₱999 <span class='product-price-old'>₱1,599</span>" data-image="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90" data-sizes="31,34,37,40,42">
      <img
        src="https://images.unsplash.com/photo-1595950653106-6c9ebd614d3a?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Sneakers</p>
        <h3 class="product-name">Retro Runners</h3>
        <p class="product-price product-price-sale">
          ₱999 <span class="product-price-old">₱1,599</span>
        </p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Polo Shirt Classic" data-price="₱649" data-image="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&h=400&fit=crop&q=90" data-sizes="Small,Medium,Large,X-Large">
      <img
        src="https://images.unsplash.com/photo-1576566588028-4147f3842f27?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Shirts</p>
        <h3 class="product-name">Polo Shirt Classic</h3>
        <p class="product-price">₱649</p>
      </div>
    </div>

    <div class="product-card" onclick="openModal(this)" data-name="Luxury Watch" data-price="₱2,499" data-image="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop&q=90" data-sizes="">
      <img
        src="https://images.unsplash.com/photo-1523275335684-37898b6baf30?w=400&h=400&fit=crop&q=90"
        class="product-image"
        alt="Product"
      />
      <div class="product-info">
        <p class="product-brand">Accessories</p>
        <h3 class="product-name">Luxury Watch</h3>
        <p class="product-price">₱2,499</p>
      </div>
    </div>
  </div>
</section>
