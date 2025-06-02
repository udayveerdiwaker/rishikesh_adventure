<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="Professional portfolio website">
    <meta name="keywords" content="portfolio, web design, development">
    <meta name="robots" content="noindex, nofollow">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Roboto:wght@400;500;700&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <title>Rishikesh Adventures</title>
    <style>

    </style>
</head>

<body>
    <!-- Adventure Navigation Bar -->
    <nav class="adventure-navbar">
        <div class="nav-container">
            <!-- Logo -->
            <a href="index.html" class="nav-logo">
                <img src="I.JPG" alt="Rishikesh Adventures Logo">
                <span class="nav-logo-text">Rishikesh Adventures</span>
            </a>

            <!-- Mobile Menu Button -->
            <button class="mobile-menu-btn">☰</button>

            <!-- Navigation Links -->
            <div class="nav-links">
                <a href="index.html" class="active">Home</a>
                <a href="activities.html">Activities</a>
                <a href="treks.html">Treks</a>
                <a href="about.html">About Us</a>
                <a href="contact.html">Contact</a>
                <a href="booking.html" class="nav-btn">Book Now</a>
            </div>
        </div>
    </nav>



    <script>
        // Mobile Menu Toggle
        document.querySelector('.mobile-menu-btn').addEventListener('click', function() {
            this.classList.toggle('active');
            document.querySelector('.nav-links').classList.toggle('active');
        });

        // Navbar Scroll Effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.adventure-navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Close mobile menu when clicking a link
        document.querySelectorAll('.nav-links a').forEach(link => {
            link.addEventListener('click', function() {
                document.querySelector('.mobile-menu-btn').classList.remove('active');
                document.querySelector('.nav-links').classList.remove('active');
            });
        });
    </script>
</body>

</html>