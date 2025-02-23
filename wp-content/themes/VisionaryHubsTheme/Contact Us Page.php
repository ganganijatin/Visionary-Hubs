<?php

// Template Name: Contact Us


get_header();


?>




<section class="contact-section">
    <div class="contact-container">
        <h1 class="contact-heading">Get in Touch with Us</h1>
        <p class="contact-intro">We’re here to answer any questions you have. Reach out to us, and let’s build something amazing together.</p>

        <div class="contact-content">
            <div class="contact-info">
                <h2>Our Office</h2>
                <p><strong>📍 Address:</strong> Your Office Address</p>
                <p><strong>📞 Phone:</strong> +1 234 567 890</p>
                <p><strong>✉ Email:</strong> info@yourdomain.com</p>
                <p><strong>🕒 Working Hours:</strong> Mon - Fri (9 AM - 6 PM)</p>
            </div>

            <div class="contact-form">
                <h2>Send Us a Message</h2>
                <?php echo do_shortcode('[wpforms id="272"]'); ?>
            </div>
        </div>
    </div>
</section>
















<?php get_footer(); ?>



