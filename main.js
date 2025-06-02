// Mobile Menu Toggle with Animation
document
  .querySelector(".mobile-menu-btn")
  .addEventListener("click", function () {
    this.classList.toggle("active");
    document.querySelector(".nav-links").classList.toggle("active");
  });

// Navbar Scroll Effect
window.addEventListener("scroll", function () {
  const nav = document.querySelector(".main-nav");
  if (window.scrollY > 50) {
    nav.classList.add("scrolled");
  } else {
    nav.classList.remove("scrolled");
  }
});

// Smooth Scrolling for Anchor Links
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
  anchor.addEventListener("click", function (e) {
    e.preventDefault();

    const targetId = this.getAttribute("href");
    if (targetId === "#") return;

    const targetElement = document.querySelector(targetId);
    if (targetElement) {
      window.scrollTo({
        top: targetElement.offsetTop - 80,
        behavior: "smooth",
      });

      // Close mobile menu if open
      document.querySelector(".mobile-menu-btn").classList.remove("active");
      document.querySelector(".nav-links").classList.remove("active");
    }
  });
});

// Hero Section Typing Animation (Optional)
function initTypingAnimation() {
  const heroTitle = document.querySelector(".hero h1");
  if (!heroTitle) return;

  const originalText = heroTitle.textContent;
  heroTitle.textContent = "";

  let i = 0;
  const typingEffect = setInterval(() => {
    if (i < originalText.length) {
      heroTitle.textContent += originalText.charAt(i);
      i++;
    } else {
      clearInterval(typingEffect);
    }
  }, 100);
}

// Initialize when DOM is loaded
document.addEventListener("DOMContentLoaded", function () {
  initTypingAnimation();

  // Add any other initialization code here
});
