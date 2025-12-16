document.addEventListener('DOMContentLoaded', () => {
  // Scroll Animation Observer
  const revealElements = document.querySelectorAll('.reveal');

  const revealObserver = new IntersectionObserver((entries, observer) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('active');
        // Optional: Stop observing once revealed
        // observer.unobserve(entry.target);
      }
    });
  }, {
    root: null,
    threshold: 0.15, // Trigger when 15% of the element is visible
    rootMargin: "0px"
  });

  revealElements.forEach(el => {
    revealObserver.observe(el);
  });

  // Navbar Scroll Effect (Optional enhancement)
  const navbar = document.querySelector('.navbar');
  window.addEventListener('scroll', () => {
    if (window.scrollY > 50) {
      navbar.style.padding = '0.5rem 0';
      navbar.style.backgroundColor = 'rgba(26, 26, 26, 0.98) !important';
    } else {
      navbar.style.padding = '1rem 0';
      navbar.style.backgroundColor = 'rgba(26, 26, 26, 0.95) !important';
    }
  });
  // Product Modal Logic
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
      modalImgContainer.style.backgroundColor = color.replace(')', ', 0.1)').replace('rgb', 'rgba').replace('hex', 'rgba'); // Simple tint or keep white
      // Actually let's just keep the white/gray bg for cleanliness, or use the color:
      // A better way for dynamic bg opacity might be tricky without full parsing, so let's stick to a clean look or simple tint if possible. 
      // For now, let's just create a soft-colored background.
      modalImgContainer.style.background = `linear-gradient(135deg, white 0%, ${color}20 100%)`; // Hex + alpha hex if color is hex, might fail if var(). 
      // Safest is white or simple grey for now to avoid CSS parsing issues.
      modalImgContainer.style.background = '#f8f9fa';

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
});
