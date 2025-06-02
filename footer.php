<!-- Footer -->
<footer class="main-footer">
  <div class="container">
    <div class="footer-grid">
      <!-- About Column -->
      <div class="footer-column">
        <div class="footer-logo">
          <img src="assets/images/logo-white.png" alt="Rishikesh Adventures" class="logo-img">
          <span class="logo-text">Rishikesh Adventures</span>
        </div>
        <p class="footer-about">Providing unforgettable adventure experiences in the heart of the Himalayas since 2010.</p>
        <div class="social-links">
          <a href="#" class="social-icon" aria-label="Facebook"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="social-icon" aria-label="Instagram"><i class="fab fa-instagram"></i></a>
          <a href="#" class="social-icon" aria-label="Twitter"><i class="fab fa-twitter"></i></a>
          <a href="#" class="social-icon" aria-label="YouTube"><i class="fab fa-youtube"></i></a>
        </div>
      </div>

      <!-- Quick Links Column -->
      <div class="footer-column">
        <h3 class="footer-heading">Explore</h3>
        <ul class="footer-links">
          <li><a href="index.html" class="footer-link">Home</a></li>
          <li><a href="activities.html" class="footer-link">Adventure Activities</a></li>
          <li><a href="treks.html" class="footer-link">Himalayan Treks</a></li>
          <li><a href="yoga.html" class="footer-link">Yoga Retreats</a></li>
          <li><a href="gallery.html" class="footer-link">Gallery</a></li>
        </ul>
      </div>

      <!-- Information Column -->
      <div class="footer-column">
        <h3 class="footer-heading">Information</h3>
        <ul class="footer-links">
          <li><a href="about.html" class="footer-link">About Us</a></li>
          <li><a href="safety.html" class="footer-link">Safety Standards</a></li>
          <li><a href="faq.html" class="footer-link">FAQs</a></li>
          <li><a href="blog.html" class="footer-link">Adventure Blog</a></li>
          <li><a href="testimonials.html" class="footer-link">Testimonials</a></li>
        </ul>
      </div>

      <!-- Contact Column -->
      <div class="footer-column">
        <h3 class="footer-heading">Contact Us</h3>
        <div class="contact-info">
          <div class="contact-item">
            <i class="fas fa-map-marker-alt contact-icon"></i>
            <p>Tapovan, Rishikesh<br>Uttarakhand 249192, India</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-phone-alt contact-icon"></i>
            <p>+91 9876543210</p>
          </div>
          <div class="contact-item">
            <i class="fas fa-envelope contact-icon"></i>
            <p>info@rishikeshadventures.com</p>
          </div>
        </div>
        <a href="contact.html" class="btn btn-outline">Send Message</a>
      </div>
    </div>
  </div>

  <!-- Copyright Section -->
  <div class="copyright-section">
    <div class="container">
      <div class="copyright-content">
        <p>&copy; 2023 Rishikesh Adventures. All rights reserved.</p>
        <div class="legal-links">
          <a href="privacy.html">Privacy Policy</a>
          <a href="terms.html">Terms of Service</a>
          <a href="sitemap.html">Sitemap</a>
        </div>
      </div>
    </div>
  </div>

  <!-- Back to Top Button -->
  <a href="#" class="back-to-top" aria-label="Back to top">
    <i class="fas fa-arrow-up"></i>
  </a>
</footer>

<!-- Font Awesome for icons -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

<!-- Footer CSS -->
<style>
  /* ===== Footer Styles ===== */
  .main-footer {
    background: linear-gradient(135deg, #1A5F7A, #3A5A40);
    color: #fff;
    padding: 60px 0 0;
    position: relative;
    font-family: 'Open Sans', sans-serif;
  }

  .footer-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
    gap: 40px;
    margin-bottom: 40px;
  }

  .footer-column {
    margin-bottom: 30px;
  }

  .footer-logo {
    display: flex;
    align-items: center;
    margin-bottom: 20px;
  }

  .logo-img {
    height: 40px;
    margin-right: 10px;
  }

  .logo-text {
    font-family: 'Montserrat', sans-serif;
    font-weight: 700;
    font-size: 1.2rem;
  }

  .footer-about {
    margin-bottom: 20px;
    line-height: 1.6;
    opacity: 0.9;
  }

  .footer-heading {
    font-family: 'Montserrat', sans-serif;
    font-size: 1.2rem;
    margin-bottom: 20px;
    position: relative;
    padding-bottom: 10px;
  }

  .footer-heading::after {
    content: '';
    position: absolute;
    left: 0;
    bottom: 0;
    width: 50px;
    height: 2px;
    background-color: #FF7B54;
  }

  .footer-links {
    list-style: none;
  }

  .footer-links li {
    margin-bottom: 12px;
  }

  .footer-link {
    color: rgba(255, 255, 255, 0.8);
    text-decoration: none;
    transition: all 0.3s ease;
    display: inline-block;
    position: relative;
  }

  .footer-link:hover {
    color: #fff;
    transform: translateX(5px);
  }

  .footer-link::before {
    content: '→';
    position: absolute;
    left: -15px;
    opacity: 0;
    transition: all 0.3s ease;
  }

  .footer-link:hover::before {
    opacity: 1;
    left: -10px;
  }

  .contact-info {
    margin-bottom: 20px;
  }

  .contact-item {
    display: flex;
    align-items: flex-start;
    margin-bottom: 15px;
  }

  .contact-icon {
    margin-right: 10px;
    color: #FF7B54;
    margin-top: 3px;
  }

  .social-links {
    display: flex;
    gap: 15px;
    margin-top: 20px;
  }

  .social-icon {
    display: flex;
    align-items: center;
    justify-content: center;
    width: 36px;
    height: 36px;
    border-radius: 50%;
    background-color: rgba(255, 255, 255, 0.1);
    color: #fff;
    transition: all 0.3s ease;
  }

  .social-icon:hover {
    background-color: #FF7B54;
    transform: translateY(-3px);
  }

  .btn-outline {
    display: inline-block;
    padding: 10px 20px;
    border: 2px solid #FF7B54;
    color: #FF7B54;
    border-radius: 50px;
    text-decoration: none;
    font-weight: 600;
    transition: all 0.3s ease;
  }

  .btn-outline:hover {
    background-color: #FF7B54;
    color: #fff;
  }

  .copyright-section {
    background-color: rgba(0, 0, 0, 0.2);
    padding: 20px 0;
    text-align: center;
  }

  .copyright-content {
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-between;
  }

  .legal-links {
    margin-top: 10px;
  }

  .legal-links a {
    color: rgba(255, 255, 255, 0.7);
    margin: 0 10px;
    text-decoration: none;
    transition: color 0.3s ease;
  }

  .legal-links a:hover {
    color: #fff;
  }

  .back-to-top {
    position: fixed;
    bottom: 30px;
    right: 30px;
    width: 50px;
    height: 50px;
    background-color: #FF7B54;
    color: #fff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    text-decoration: none;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
    opacity: 0;
    visibility: hidden;
    transition: all 0.3s ease;
    z-index: 999;
  }

  .back-to-top.active {
    opacity: 1;
    visibility: visible;
  }

  .back-to-top:hover {
    background-color: #e06a3f;
    transform: translateY(-3px);
  }

  /* ===== Responsive Styles ===== */
  @media (min-width: 768px) {
    .copyright-content {
      flex-direction: row;
    }

    .legal-links {
      margin-top: 0;
    }

    .footer-grid {
      grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    }
  }

  @media (max-width: 576px) {
    .footer-column {
      text-align: center;
    }

    .footer-heading::after {
      left: 50%;
      transform: translateX(-50%);
    }

    .social-links {
      justify-content: center;
    }

    .contact-item {
      justify-content: center;
    }
  }
</style>

<!-- Back to Top JavaScript -->
<script>
  // Back to Top Button
  window.addEventListener('scroll', function() {
    var backToTop = document.querySelector('.back-to-top');
    if (window.pageYOffset > 300) {
      backToTop.classList.add('active');
    } else {
      backToTop.classList.remove('active');
    }
  });

  // Smooth scrolling for footer links
  document.querySelectorAll('.footer-link').forEach(link => {
    link.addEventListener('click', function(e) {
      e.preventDefault();
      const targetId = this.getAttribute('href');
      if (targetId === '#') return;

      const targetElement = document.querySelector(targetId);
      if (targetElement) {
        window.scrollTo({
          top: targetElement.offsetTop - 80,
          behavior: 'smooth'
        });
      }
    });
  });
</script>