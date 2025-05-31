<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rishikesh Adventures</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600;700&family=Playfair+Display:wght@700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #1a7f72;
            /* Deep teal */
            --secondary: #ffd166;
            /* Vibrant gold */
            --dark: #1d3557;
            /* Navy blue */
            --accent: #f8961e;
            /* Warm orange */
            --danger: #ef476f;
            /* Energetic pink-red */
            --light: #f1faee;
            /* Soft off-white */
            --deep-green: #457b9d;
            /* Ocean blue-green */
            --earth-brown: #a68a64;
            /* Natural brown */
        }

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }

        .navbar {
            background: linear-gradient(135deg, var(--dark) 0%, var(--deep-green) 100%);
            color: var(--light);
            padding: 1.2rem 5%;
            position: fixed;
            width: 100%;
            top: 0;
            z-index: 1000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 30px rgba(0, 0, 0, 0.2);
            transition: all 0.4s cubic-bezier(0.65, 0, 0.35, 1);
            border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        }

        .navbar.scrolled {
            padding: 0.8rem 5%;
            background: rgba(29, 53, 87, 0.96);
            backdrop-filter: blur(12px);
        }

        .logo {
            font-size: 1.9rem;
            font-weight: 700;
            color: var(--light);
            letter-spacing: 1.2px;
            display: flex;
            align-items: center;
            gap: 12px;
            font-family: 'Playfair Display', serif;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.2);
        }

        .logo::before {
            content: "🏔️";
            font-size: 1.6rem;
            filter: drop-shadow(1px 1px 2px rgba(0, 0, 0, 0.3));
        }

        nav ul {
            display: flex;
            list-style: none;
            gap: 1.8rem;
        }

        nav ul li a {
            color: var(--light);
            text-decoration: none;
            font-weight: 600;
            font-size: 1.05rem;
            padding: 0.6rem 1.2rem;
            border-radius: 6px;
            transition: all 0.4s cubic-bezier(0.65, 0, 0.35, 1);
            position: relative;
            text-transform: uppercase;
            letter-spacing: 0.5px;
            font-size: 0.95rem;
        }

        nav ul li a:hover {
            color: var(--secondary);
            background: rgba(255, 255, 255, 0.08);
            transform: translateY(-2px);
        }

        nav ul li a::after {
            content: '';
            position: absolute;
            width: 0;
            height: 3px;
            background: var(--secondary);
            bottom: -5px;
            left: 50%;
            transform: translateX(-50%);
            transition: width 0.4s cubic-bezier(0.65, 0, 0.35, 1);
            border-radius: 3px;
        }

        nav ul li a:hover::after {
            width: 60%;
        }

        .cta-button {
            background: var(--danger);
            color: var(--light);
            padding: 0.7rem 1.8rem;
            border-radius: 50px;
            font-weight: 700;
            transition: all 0.4s cubic-bezier(0.65, 0, 0.35, 1);
            margin-left: 1.5rem;
            border: 2px solid var(--danger);
            letter-spacing: 0.8px;
            box-shadow: 0 4px 15px rgba(239, 71, 111, 0.3);
        }

        .cta-button:hover {
            background: transparent;
            color: var(--danger);
            transform: translateY(-3px) scale(1.03);
            box-shadow: 0 6px 20px rgba(239, 71, 111, 0.4);
        }

        .mobile-menu-btn {
            display: none;
            background: none;
            border: none;
            color: var(--light);
            font-size: 1.7rem;
            cursor: pointer;
            transition: transform 0.3s ease;
            padding: 0.5rem;
        }

        .mobile-menu-btn:hover {
            transform: scale(1.1);
        }

        @media (max-width: 992px) {
            nav ul {
                gap: 1.2rem;
            }

            .logo {
                font-size: 1.7rem;
            }
        }

        @media (max-width: 768px) {
            .mobile-menu-btn {
                display: block;
            }

            nav {
                position: fixed;
                top: 80px;
                left: 0;
                width: 100%;
                background: rgba(29, 53, 87, 0.98);
                padding: 2rem;
                clip-path: circle(0% at 90% -10%);
                transition: all 0.8s cubic-bezier(0.65, 0, 0.35, 1);
                backdrop-filter: blur(12px);
                border-bottom: 1px solid rgba(255, 255, 255, 0.1);
            }

            nav.active {
                clip-path: circle(150% at 90% -10%);
            }

            nav ul {
                flex-direction: column;
                gap: 1.5rem;
                align-items: flex-end;
            }

            nav ul li a {
                padding: 0.9rem 1.5rem;
                font-size: 1.1rem;
                text-align: right;
            }

            nav ul li a::after {
                bottom: 0;
                left: auto;
                right: 0;
                transform: none;
            }

            nav ul li a:hover::after {
                width: 40%;
            }

            .cta-button {
                margin-left: 0;
                margin-top: 1.5rem;
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>

<body>
    <header class="navbar">
        <div class="logo">Rishikesh Adventures</div>
        <button class="mobile-menu-btn" id="mobileMenuBtn">
            <i class="fas fa-bars"></i>
        </button>
        <nav id="mainNav">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="about.php">About</a></li>
                <li><a href="adventures.php">Adventures</a></li>
                <li><a href="packages.php">Packages</a></li>
                <li><a href="gallery.php">Gallery</a></li>
                <li><a href="contact.php">Contact</a></li>
                <li><a href="book-now.php" class="cta-button">Book Adventure</a></li>
            </ul>
        </nav>
    </header>

    <script>
        // Header scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 30) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });

        // Mobile menu toggle with animation
        const mobileMenuBtn = document.getElementById('mobileMenuBtn');
        const mainNav = document.getElementById('mainNav');

        mobileMenuBtn.addEventListener('click', function() {
            mainNav.classList.toggle('active');
            const icon = mobileMenuBtn.querySelector('i');
            if (mainNav.classList.contains('active')) {
                icon.classList.remove('fa-bars');
                icon.classList.add('fa-times');
                mobileMenuBtn.style.transform = 'rotate(90deg)';
            } else {
                icon.classList.remove('fa-times');
                icon.classList.add('fa-bars');
                mobileMenuBtn.style.transform = 'rotate(0deg)';
            }
        });

        // Smooth scroll and menu close for mobile
        document.querySelectorAll('nav ul li a').forEach(link => {
            link.addEventListener('click', function(e) {
                if (window.innerWidth <= 768) {
                    mainNav.classList.remove('active');
                    const icon = mobileMenuBtn.querySelector('i');
                    icon.classList.remove('fa-times');
                    icon.classList.add('fa-bars');
                    mobileMenuBtn.style.transform = 'rotate(0deg)';
                }

                // Smooth scroll to section if hash exists
                if (this.getAttribute('href').startsWith('#')) {
                    e.preventDefault();
                    const target = document.querySelector(this.getAttribute('href'));
                    if (target) {
                        window.scrollTo({
                            top: target.offsetTop - 80,
                            behavior: 'smooth'
                        });
                    }
                }
            });
        });
    </script>
</body>

</html>