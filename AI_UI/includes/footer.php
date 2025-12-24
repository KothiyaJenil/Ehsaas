<!-- ============================================ -->
<!--                    Footer                    -->
<!-- ============================================ -->
<footer class="footer-section">
  <div class="container">
    <div class="row">
      <!-- Column 1: Company Info -->
      <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
        <div class="footer-logo mb-3">EHSAAS</div>
        <p class="text-white-50 mb-4">EHSAAS is a complete beverages company, bringing the best of
          traditional and contemporary flavors. We offer a wide range of refreshing drinks to delight
          every palate.</p>
        <div class="contact-info text-white-50">
          <p class="mb-2"><i class="fas fa-map-marker-alt me-2 text-primary-orange"></i> SURVEY NO. 123,
            NEAR HIGHWAY, YOUR CITY, GUJARAT, INDIA</p>
          <p class="mb-2"><i class="fas fa-phone-alt me-2 text-primary-orange"></i> +91 98765 43210</p>
          <p class="mb-2"><i class="fas fa-envelope me-2 text-primary-orange"></i>
            info@ehsaasbeverages.com</p>
        </div>
      </div>

      <!-- Column 2: Quick Links -->
      <div class="col-lg-4 col-md-6 mb-4 mb-md-0">
        <h4 class="footer-title mb-3">Quick Links</h4>
        <ul class="list-unstyled footer-links">
          <li><a href="#home">Home</a></li>
          <li><a href="#about">About Us</a></li>
          <li><a href="#products">Our Products</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div>

      <!-- Column 3: Products -->
      <div class="col-lg-4 col-md-6">
        <h4 class="footer-title mb-3">Products</h4>
        <ul class="list-unstyled footer-links">
          <li><a href="#">Carbonated Beverages</a></li>
          <li><a href="#">Fruit Juices</a></li>
          <li><a href="#">Energy Drinks</a></li>
          <li><a href="#">Packaged Water</a></li>
        </ul>
      </div>
    </div>

    <hr class="mt-5 mb-4 border-secondary">

    <div class="row align-items-center">
      <div class="col-md-6 text-center text-md-start">
        <p class="mb-0 text-white-50">&copy; 2025 Ehsaas Cold Drinks. All Rights Reserved.</p>
      </div>
      <div class="col-md-6 text-center text-md-end">
        <div class="social-links">
          <a href="facebook.com"><i class="fab fa-facebook-f"></i></a>
          <a href="twitter.com"><i class="fab fa-twitter"></i></a>
          <a href="instagram.com"><i class="fab fa-instagram"></i></a>
          <a href="linkedin.com"><i class="fab fa-linkedin-in"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>

<!-- ============================================ -->
<!--             Product Detail Modal             -->
<!-- ============================================ -->
<div class="modal fade" id="productModal" tabindex="-1" aria-labelledby="productModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered">
    <div class="modal-content rounded-4 border-0 shadow-lg" style="overflow: hidden;">
      <div class="modal-header border-0 bg-light p-4">
        <h5 class="modal-title fs-2 fw-bold" id="productModalLabel" style="font-family: var(--font-heading);">Product
          Name</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body p-0">
        <div class="text-center p-4" id="modal-img-container" style="background-color: #f8f9fa;">
          <img src="" id="modal-product-img" class="img-fluid" style="height: 250px; object-fit: contain;">
        </div>
        <div class="p-4 text-center">
          <h5 class="mb-3 fw-bold">Available Sizes:</h5>
          <ul id="modal-product-sizes" class="list-inline mb-4">
            <!-- Sizes injected via JS -->
          </ul>
          <p id="modal-product-desc" class="lead text-muted"></p>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Bootstrap Bundle JS -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
<!-- AOS Animation JS -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<!-- Custom JS -->
<script src="assets/js/script.js"></script>
</body>

</html>