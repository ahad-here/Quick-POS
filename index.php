<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>QuickPOS - Modern Point of Sale System</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        :root {
            --primary-color: #1e3a8a;
            --secondary-color: #0ea5e9;
            --accent-color: #f97316;
            --text-dark: #1f2937;
            --text-light: #6b7280;
            --bg-light: #f9fafb;
            --white: #ffffff;
            --border-color: #e5e7eb;
        }

        html {
            scroll-behavior: smooth;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            color: var(--text-dark);
            background-color: var(--white);
            line-height: 1.6;
        }

        /* ===== NAVIGATION BAR ===== */
        nav {
            position: sticky;
            top: 0;
            background-color: var(--white);
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.08);
            z-index: 1000;
            transition: all 0.3s ease;
        }

        nav.scrolled {
            box-shadow: 0 4px 16px rgba(0, 0, 0, 0.12);
        }

        .navbar {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 1400px;
            margin: 0 auto;
            padding: 1rem 2rem;
        }

        /* Logo Section */
        .logo {
            text-decoration: none;
            font-size: 1.3rem;
            font-weight: 700;
            letter-spacing: -0.5px;
            color: var(--primary-color);
            transition: color 0.2s ease;
        }

        .logo:hover {
            color: var(--secondary-color);
        }

        /* Nav Menu */
        .nav-menu {
            display: flex;
            list-style: none;
            gap: 2.5rem;
            align-items: center;
        }

        .nav-link {
            text-decoration: none;
            color: var(--text-dark);
            font-weight: 500;
            font-size: 0.9rem;
            position: relative;
            transition: color 0.2s ease;
            letter-spacing: 0.3px;
        }

        .nav-link::after {
            content: '';
            position: absolute;
            bottom: -4px;
            left: 0;
            width: 0;
            height: 2px;
            background: var(--secondary-color);
            transition: width 0.2s ease;
        }

        .nav-link:hover {
            color: var(--secondary-color);
        }

        .nav-link:hover::after {
            width: 100%;
        }

        .nav-link.active {
            color: var(--secondary-color);
        }

        .nav-link.active::after {
            width: 100%;
        }

        /* Sign Up Button */
        .signup-btn {
            background-color: var(--secondary-color);
            color: var(--white);
            border: none;
            padding: 0.65rem 1.4rem;
            border-radius: 6px;
            font-size: 0.9rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 2px 8px rgba(14, 165, 233, 0.2);
            display: inline-block;
            letter-spacing: 0.3px;
        }

        .signup-btn:hover {
            background-color: #0284c7;
            box-shadow: 0 4px 12px rgba(14, 165, 233, 0.3);
        }

        .signup-btn:active {
            transform: scale(0.98);
        }

        /* Hamburger Menu */
        .hamburger {
            display: none;
            flex-direction: column;
            cursor: pointer;
            gap: 6px;
        }

        .hamburger span {
            width: 25px;
            height: 3px;
            background-color: var(--primary-color);
            border-radius: 2px;
            transition: all 0.3s ease;
        }

        .hamburger.active span:nth-child(1) {
            transform: rotate(45deg) translate(10px, 10px);
        }

        .hamburger.active span:nth-child(2) {
            opacity: 0;
        }

        .hamburger.active span:nth-child(3) {
            transform: rotate(-45deg) translate(7px, -7px);
        }

        /* Mobile Responsiveness */
        @media (max-width: 768px) {
            .navbar {
                padding: 1rem 1.5rem;
            }

            .hamburger {
                display: flex;
            }

            .nav-menu {
                position: fixed;
                left: -100%;
                top: 70px;
                flex-direction: column;
                background-color: var(--white);
                width: 100%;
                text-align: center;
                transition: 0.3s;
                gap: 0;
                padding: 2rem 0;
                box-shadow: 0 10px 27px rgba(0, 0, 0, 0.08);
            }

            .nav-menu.active {
                left: 0;
            }

            .nav-menu li {
                padding: 1rem 0;
                border-bottom: 1px solid var(--border-color);
            }

            .nav-menu li:last-child {
                border-bottom: none;
            }

            .nav-link::after {
                display: none;
            }

            .nav-link.active {
                background-color: var(--bg-light);
                width: 100%;
            }

            .logo {
                font-size: 1.15rem;
            }
        }

        @media (max-width: 480px) {
            .navbar {
                padding: 0.75rem 1rem;
            }

            .logo {
                font-size: 1rem;
            }

            .nav-menu {
                top: 60px;
            }

            .signup-btn {
                padding: 0.6rem 1.2rem;
                font-size: 0.85rem;
            }
        }
        /* ===== HERO SECTION ===== */
        .hero-section {
            background-color: var(--bg-light);
            padding: 5rem 2rem;
            min-height: 80vh;
            display: flex;
            align-items: center;
        }

        .hero-container {
            max-width: 1400px;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 4rem;
            width: 100%;
        }

        .hero-content {
            flex: 1;
            max-width: 600px;
        }

        .hero-headline {
            font-size: 3.5rem;
            color: var(--primary-color);
            line-height: 1.1;
            margin-bottom: 1.5rem;
            font-weight: 800;
        }

        .hero-subheadline {
            font-size: 1.1rem;
            color: var(--text-light);
            margin-bottom: 2rem;
            line-height: 1.6;
        }

        .hero-btn {
            background-color: var(--accent-color);
            color: var(--white);
            border: none;
            padding: 0.8rem 1.8rem;
            border-radius: 6px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            text-decoration: none;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(249, 115, 22, 0.3);
            display: inline-block;
        }

        .hero-btn:hover {
            background-color: #ea580c;
            box-shadow: 0 6px 16px rgba(249, 115, 22, 0.4);
            transform: translateY(-2px);
        }

        .hero-image-container {
            flex: 1;
            display: flex;
            justify-content: flex-end;
        }

        @media (max-width: 992px) {
            .hero-container {
                flex-direction: column;
                text-align: center;
                gap: 3rem;
                padding-top: 2rem;
            }

            .hero-content {
                max-width: 100%;
            }

            .hero-image-container {
                justify-content: center;
            }
        }
    </style>
</head>
<body>
    <!-- NAVIGATION BAR -->
    <?php include 'includes/header.php'; ?>

    <!-- HERO SECTION -->
    <?php include 'includes/hero.php'; ?>

    <script>
        // Mobile menu toggle
        const hamburger = document.getElementById('hamburger');
        const navMenu = document.querySelector('.nav-menu');
        const navLinks = document.querySelectorAll('.nav-link');
        const navbar = document.getElementById('navbar');

        // Toggle hamburger menu
        if (hamburger) {
            hamburger.addEventListener('click', function() {
                hamburger.classList.toggle('active');
                if (navMenu) navMenu.classList.toggle('active');
            });
        }

        // Close menu when a link is clicked
        if (navLinks) {
            navLinks.forEach(link => {
                link.addEventListener('click', function() {
                    if (hamburger) hamburger.classList.remove('active');
                    if (navMenu) navMenu.classList.remove('active');
                    
                    // Remove active class from all links
                    navLinks.forEach(l => l.classList.remove('active'));
                    // Add active class to clicked link
                    this.classList.add('active');
                });
            });
        }

        // Add shadow on scroll
        if (navbar) {
            window.addEventListener('scroll', function() {
                if (window.scrollY > 0) {
                    navbar.classList.add('scrolled');
                } else {
                    navbar.classList.remove('scrolled');
                }
            });
        }

        // Sign Up button functionality
        const signupBtn = document.querySelector('.signup-btn');
        if (signupBtn) {
            signupBtn.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Sign Up feature coming soon!');
            });
        }
    </script>
</body>
</html>
