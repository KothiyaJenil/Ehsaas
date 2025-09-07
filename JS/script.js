

const menuBtn = document.querySelector('#menu-toggle');
const navLinks = document.querySelector('.nav-links');

menuBtn.addEventListener('click', () => {
  navLinks.classList.toggle('active');
})



window.addEventListener("scroll", function () {
  const header = document.querySelector("header");
  header.classList.toggle("sticky", window.scrollY);
  const navLink = document.querySelector(".nav-links");
  navLink.classList.toggle("sticky", window.scrollY);
});