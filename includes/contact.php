<!-- CONTACT SECTION -->
<section class="contact" id="contact">
    <div class="contact-container">
        <!-- POS-31: Contact section container with title -->
        <div class="contact-header">
            <h2>Get In Touch</h2>
            <p>Have questions or want a custom demo? Our team is here to help you scaling your business.</p>
        </div>

        <!-- POS-32: HTML form with fields: Name, Email, Message -->
        <div class="contact-content">
            <div class="contact-info">
                <div class="info-item">
                    <div class="info-icon">📍</div>
                    <div class="info-text">
                        <h4>Our Office</h4>
                        <p>123 Business Ave, Suite 100, Tech City, TC 54321</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">📞</div>
                    <div class="info-text">
                        <h4>Call Us</h4>
                        <p>+1 (555) 000-0000</p>
                    </div>
                </div>
                <div class="info-item">
                    <div class="info-icon">✉️</div>
                    <div class="info-text">
                        <h4>Email Us</h4>
                        <p>hello@quickpos.com</p>
                    </div>
                </div>
            </div>

            <form action="submit-contact.php" method="POST" class="contact-form">
                <div class="form-group">
                    <label for="name">Full Name</label>
                    <input type="text" id="name" name="name" placeholder="John Doe" required>
                </div>
                <div class="form-group">
                    <label for="email">Email Address</label>
                    <input type="email" id="email" name="email" placeholder="john@example.com" required>
                </div>
                <div class="form-group">
                    <label for="message">Your Message</label>
                    <textarea id="message" name="message" rows="5" placeholder="Tell us about your business needs..." required></textarea>
                </div>
                <!-- POS-34: Style submit button -->
                <button type="submit" class="submit-btn" id="submit-btn">Send Message</button>
            </form>
        </div>
    </div>
</section>