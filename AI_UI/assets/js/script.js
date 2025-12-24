document.addEventListener('DOMContentLoaded', () => {
  /* ============================================ */
  /*               Scroll Animation               */
  /* ============================================ */
  // Initialize AOS
  AOS.init({
    duration: 800,
    once: true,
  });

  /* ============================================ */
  /*             Navbar Scroll Effect             */
  /* ============================================ */
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.classList.add('scrolled');
    } else {
      navbar.classList.remove('scrolled');
    }
  });
  /* ============================================ */
  /*             Product Modal Logic              */
  /* ============================================ */
  const productModal = document.getElementById('productModal');
  if (productModal) {
    productModal.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      const button = event.relatedTarget;

      // Extract info from data-bs-* attributes
      const title = button.getAttribute('data-title');
      const img = button.getAttribute('data-img');
      const desc = button.getAttribute('data-desc');
      const sizes = button.getAttribute('data-sizes').split(',');
      const color = button.getAttribute('data-color');

      // Update the modal's content.
      const modalTitle = productModal.querySelector('.modal-title');
      const modalImg = productModal.querySelector('#modal-product-img');
      const modalImgContainer = productModal.querySelector('#modal-img-container');
      const modalDesc = productModal.querySelector('#modal-product-desc');
      const modalSizes = productModal.querySelector('#modal-product-sizes');

      modalTitle.textContent = title;
      modalTitle.style.color = color;

      modalImg.src = img;
      modalImgContainer.style.backgroundColor = '#f8f9fa'; // Keep simple light bg

      modalDesc.textContent = desc;

      // Clear previous sizes
      modalSizes.innerHTML = '';
      sizes.forEach(size => {
        const li = document.createElement('li');
        li.textContent = size.trim();
        li.className = 'list-inline-item px-3 py-2 border rounded-pill fw-bold text-secondary mb-2';
        li.style.backgroundColor = 'white';
        modalSizes.appendChild(li);
      });
    });
  }
  /* ============================================ */
  /*             Active Link Highlighting         */
  /* ============================================ */
  const sections = document.querySelectorAll('section');
  const navLinks = document.querySelectorAll('.nav-link');

  function setActiveLink() {
    let current = '';

    sections.forEach(section => {
      const sectionTop = section.offsetTop;
      const sectionHeight = section.clientHeight;
      // Offset for sticky navbar (approx 100px)
      if (window.scrollY >= (sectionTop - 150)) {
        current = section.getAttribute('id');
      }
    });

    navLinks.forEach(link => {
      link.classList.remove('active');
      if (link.getAttribute('href').includes(current)) {
        link.classList.add('active');
      }
    });
  }

  window.addEventListener('scroll', setActiveLink);

  // Set initial active state
  setActiveLink();

});
