// JAVASCRIPT FOR INDEX.HTML

const doors = document.querySelectorAll('.door-container');
const fadeOverlay = document.getElementById('fadeOverlay');

doors.forEach(door => {
  door.addEventListener('click', () => {
    // Wait a moment, then fade out the overlay
    setTimeout(() => {
      fadeOverlay.classList.add('active'); // Fade the overlay to black

      // Simulate redirecting to a new page
      setTimeout(() => {
        const page = door.getAttribute('data-page');
        window.location.href = page;
      }, 1000);
    }, 500);
  });
});