<?php 

// Template Name: Request A Quote Page

get_header();

?>




<section class="quote-section">
    <div class="quote-container">
        <h1 class="quote-heading">Get a Free Quote for Your Project</h1>
        <p class="quote-intro">Fill out the form below and our team will get back to you with a customized quote.</p>

        <div class="quote-form">
            <!-- WPForms Shortcode -->
            <?php echo do_shortcode('[wpforms id="262"]	'); ?>
        </div>
    </div>
</section>










<?php get_footer() ?>





