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
});
