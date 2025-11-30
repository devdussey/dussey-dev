const yearElement = document.getElementById("yr");
if (yearElement) {
  yearElement.textContent = new Date().getFullYear();
}

// Skill chip interactions
document.addEventListener('DOMContentLoaded', () => {
  const skillChips = document.querySelectorAll('.skill-chip');

  skillChips.forEach(chip => {
    // Ensure data-tooltip exists
    if (!chip.hasAttribute('data-tooltip')) {
      chip.setAttribute('data-tooltip', chip.textContent.trim());
    }

    // Add keyboard support
    chip.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ') {
        e.preventDefault();
        chip.focus();
      }
    });
  });
});