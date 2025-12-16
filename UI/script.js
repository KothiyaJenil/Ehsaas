document.addEventListener('DOMContentLoaded', function() {
    // Initialize AOS (Animate On Scroll)
    AOS.init({
        // Global settings
        duration: 1000,     // animation duration in ms
        once: true,         // whether animation should happen only once - on load
        mirror: false       // whether elements should animate out while scrolling past them
    });

    // Simple script to generate the bubble elements for the hero section
    const bubbleContainer = document.querySelector('.ehsaas-bubbles');
    if (bubbleContainer) {
        for (let i = 0; i < 8; i++) {
            const div = document.createElement('div');
            bubbleContainer.appendChild(div);
        }
    }
});