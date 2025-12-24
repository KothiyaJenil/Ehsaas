<?php include 'includes/header.php'; ?>

<!-- ============================================ -->
<!--                 Hero Section                 -->
<!-- ============================================ -->
<section id="home" class="hero-section">
  <img src="assets/images/hero-banner.jpg" class="hero-img" alt="Hero Banner">
  <!-- Floating Bubbles Background -->
  <div class="bubbles-container">
    <span class="bubble"
      style="width: 20px; height: 20px; left: 10%; animation-duration: 8s; animation-delay: 2s;"></span>
    <span class="bubble"
      style="width: 30px; height: 30px; left: 20%; animation-duration: 10s; animation-delay: 1s;"></span>
    <span class="bubble"
      style="width: 15px; height: 15px; left: 35%; animation-duration: 7s; animation-delay: 4s;"></span>
    <span class="bubble"
      style="width: 40px; height: 40px; left: 50%; animation-duration: 12s; animation-delay: 0s;"></span>
    <span class="bubble"
      style="width: 25px; height: 25px; left: 65%; animation-duration: 9s; animation-delay: 3s;"></span>
    <span class="bubble"
      style="width: 35px; height: 35px; left: 80%; animation-duration: 11s; animation-delay: 2s;"></span>
    <span class="bubble"
      style="width: 10px; height: 10px; left: 90%; animation-duration: 6s; animation-delay: 5s;"></span>
  </div>



  <!-- Wave Separator -->
  <div class="wave-divider">
    <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120" preserveAspectRatio="none">
      <path
        d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
        class="shape-fill"></path>
    </svg>
  </div>
</section>

<!-- ============================================ -->
<!--                 About Section                -->
<!-- ============================================ -->
<section id="about" class="about-section">
  <div class="container">
    <div class="row justify-content-center mb-5">
      <div class="col-lg-10 text-center" data-aos="fade-up">
        <h2 class="section-title">About Us</h2>
        <p class="lead">At EHSAAS, we bring you the perfect blend of tradition and innovation in refreshing
          beverages. With a commitment to quality and taste, our wide range of products are crafted to
          delight consumers across India. Every sip carries the promise of freshness, natural flavors, and
          the highest standards of production.</p>
      </div>
    </div>


    <div class="row g-4">
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="100">
        <div class="p-4 h-100 bg-white rounded-3 shadow-sm text-center">
          <div class="mb-3">
            <img src="assets/images/Quality.jpg" alt="Quality" class="about-card-img">
          </div>
          <h4 class="mb-3">Quality</h4>
          <p>We believe quality is the foundation of trust. Our beverages are made with carefully selected
            ingredients, processed under strict hygiene standards, and tested to ensure purity and
            consistency. By combining advanced technology with world-class quality assurance, we deliver
            products that customers can rely on every day.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="200">
        <div class="p-4 h-100 bg-white rounded-3 shadow-sm text-center">
          <div class="mb-3">
            <img src="assets/images/INNOVATION & RESEARCH.jpg" alt="Innovation" class="about-card-img">
          </div>
          <h4 class="mb-3">INNOVATION & RESEARCH</h4>
          <p>Innovation drives us forward. Our dedicated R&D team continuously works to create new
            flavors, improve existing products, and study consumer preferences. This helps us stay ahead
            of trends and bring exciting beverages that match today’s lifestyle while keeping health and
            taste in balance.</p>
        </div>
      </div>
      <div class="col-md-4" data-aos="fade-up" data-aos-delay="300">
        <div class="p-4 h-100 bg-white rounded-3 shadow-sm text-center">
          <div class="mb-3">
            <img src="assets/images/MODERN FACILITIES.jpg" alt="Facilities" class="about-card-img">
          </div>
          <h4 class="mb-3">MODERN FACILITIES</h4>
          <p>Our state-of-the-art production facility is equipped with advanced machinery, automation, and
            infrastructure to ensure efficiency and scalability. Located in [Your City], our plant
            operates with eco-friendly practices and the highest safety standards. Our skilled workforce
            ensures every bottle meets perfection before reaching you.</p>
        </div>
      </div>
    </div>
  </div>
</section>

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
            <button class="btn btn-outline-custom rounded-pill mt-3 px-4" data-bs-toggle="modal"
              data-bs-target="#productModal" data-title="Neon Lime" data-img="assets/images/product-green.png"
              data-desc="The ultimate zest. Crisp lime with a hint of cooling mint that hits you with a wave of freshness."
              data-sizes="100ml, 250ml, 1.25 L" data-color="var(--primary-green)">
              See Details
            </button>
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

<!-- ============================================ -->
<!--               Contact Section                -->
<!-- ============================================ -->
<section id="contact" class="contact-section">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8" data-aos="fade-up">
        <div class="text-center mb-5">
          <h2 class="section-title">Get In Touch</h2>
          <p>Have a question or want to partner with us? Drop us a line.</p>
        </div>
        <form>
          <div class="row">
            <div class="col-md-6">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="col-md-6">
              <input type="email" class="form-control" placeholder="Your Email">
            </div>
          </div>
          <input type="text" class="form-control" placeholder="Subject">
          <textarea class="form-control" rows="5" placeholder="Message"></textarea>
          <div class="text-center">
            <button type="submit" class="btn btn-custom px-5">Send Message</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>