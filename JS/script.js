/* ----------------------------- navbar section ----------------------------- */
window.addEventListener('scroll', () => {
  const navbar = document.getElementById('navbar');
  const navLinks = document.getElementById('nav-links');
  if (window.scrollY > 150) {
    navbar.classList.add('scrolled');
  } else {
    navbar.classList.remove('scrolled');
  }
});


const menuBtn = document.querySelector('#menu-toggle');
const navLinks = document.querySelector('.nav-links');

menuBtn.addEventListener('click', () => {
  navLinks.classList.toggle('active');
})


/* ------------------------------ hero section ------------------------------ */
const bubbleContainer = document.querySelector(".bubbles");

function createBubble() {
    const bubble = document.createElement("span");
    bubble.classList.add("bubble");

    // Color options in RGBA
    const colors = [
        "rgba(229, 37, 37, 0.8)",   // #E52525 red
        "rgba(31, 162, 62, 0.8)",   // #1FA23E green
        "rgba(246, 139, 31, 0.8)"   // #F68B1F orange
    ];

    // Pick random color
    const color = colors[Math.floor(Math.random() * colors.length)];
    bubble.style.background = color;

    // Glow (stronger + visible)
    bubble.style.boxShadow = `0 0 30px ${color}`;

    const size = Math.random() * 17 + 5; 
    bubble.style.width = size + "px";
    bubble.style.height = size + "px";

    // Random horizontal position
    bubble.style.left = Math.random() * 100 + "%";

    // Random rising speed
    bubble.style.setProperty("--speed", (6 + Math.random() * 6) + "s");

    bubbleContainer.appendChild(bubble);

    // Remove bubble after animation
    setTimeout(() => bubble.remove(), 12000);
}

setInterval(createBubble, 1000);
