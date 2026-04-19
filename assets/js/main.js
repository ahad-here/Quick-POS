document.addEventListener('DOMContentLoaded', function() {
    // Mobile menu toggle
    const hamburger = document.getElementById('hamburger');
    const navMenu = document.querySelector('.nav-menu');
    const navLinks = document.querySelectorAll('.nav-link');
    const navbar = document.getElementById('navbar');

    // Toggle hamburger menu
    if (hamburger && navMenu) {
        hamburger.addEventListener('click', function() {
            hamburger.classList.toggle('active');
            navMenu.classList.toggle('active');
        });
    }

    // Close menu when a link is clicked
    if (navLinks.length > 0) {
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

    // Billing Toggle Functionality
    const billingToggle = document.getElementById('billing-toggle');
    const monthlyLabel = document.getElementById('monthly-label');
    const yearlyLabel = document.getElementById('yearly-label');
    const priceAmounts = document.querySelectorAll('.price-amount');
    const periods = document.querySelectorAll('.period');

    if (billingToggle) {
        billingToggle.addEventListener('change', function() {
            if (this.checked) {
                // Yearly billing
                monthlyLabel.classList.remove('active');
                yearlyLabel.classList.add('active');
                priceAmounts.forEach(price => {
                    price.textContent = price.getAttribute('data-yearly');
                });
                periods.forEach(period => {
                    period.textContent = '/yr';
                });
            } else {
                // Monthly billing
                yearlyLabel.classList.remove('active');
                monthlyLabel.classList.add('active');
                priceAmounts.forEach(price => {
                    price.textContent = price.getAttribute('data-monthly');
                });
                periods.forEach(period => {
                    period.textContent = '/mo';
                });
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
});
