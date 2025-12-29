<?php include 'includes/header.php'; ?>

<!-- ============================================ -->
<!--               Products Section               -->
<!-- ============================================ -->
<section id="products" class="products-section">
  <div class="container">
    <h2 class="section-title text-center w-100 mb-5" data-aos="fade-up">Our Flavors</h2>
    <div class="row g-4">
      <!-- Red Product -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="product-card flavor-red h-100">
          <div class="product-blob-bg"></div>
          <div class="product-img-wrapper">
            <img src="assets/images/product-red.png" alt="Ehsaas Red" class="img-fluid">
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <h3 class="card-title">Berry Blast</h3>
            <button class="btn btn-outline-custom rounded-pill mt-3 px-4" data-bs-toggle="modal"
              data-bs-target="#productModal" data-title="Berry Blast" data-img="assets/images/product-red.png"
              data-desc="A bold fusion of ripe strawberries and cherries. Sweet, tangy, and absolutely electric."
              data-sizes="100ml, 250ml, 1.25 L" data-color="var(--primary-red)">
              See Details
            </button>
          </div>
        </div>
      </div>

      <!-- Green Product -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="product-card flavor-green h-100">
          <div class="product-blob-bg"></div>
          <div class="product-img-wrapper">
            <img src="assets/images/product-green.png" alt="Ehsaas Green" class="img-fluid">
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <h3 class="card-title">Neon Lime</h3>
          </div>
        </div>
      </div>

      <!-- Orange Product -->
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="product-card flavor-orange h-100">
          <div class="product-blob-bg"></div>
          <div class="product-img-wrapper">
            <img src="assets/images/product-orange.png" alt="Ehsaas Orange" class="img-fluid">
          </div>
          <div class="card-body d-flex flex-column align-items-center">
            <h3 class="card-title">Citrus Sun</h3>
            <button class="btn btn-outline-custom rounded-pill mt-3 px-4" data-bs-toggle="modal"
              data-bs-target="#productModal" data-title="Citrus Sun" data-img="assets/images/product-orange.png"
              data-desc="A sunny delight. Juicy oranges mixed with tropical mango notes for a vacay in a bottle."
              data-sizes="100ml, 250ml, 1.25 L" data-color="var(--primary-orange)">
              See Details
            </button>
          </div>
        </div>
      </div>
    </div>

  </div>
</section>

<?php include 'includes/footer.php'; ?>