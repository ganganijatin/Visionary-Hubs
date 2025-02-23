<?php

//Template Name:Services


get_header();



?>




<div class="heading-container">
  <div class="deco-line"></div>
  <h2 class="main-heading">OUR SERVICES</h2>
</div>

<div class="card-container">
  <div class="card">
    <?php $image = get_field('service_image')  ?>
    <div class=""><img src="<?php echo $image ?>" alt="Profile Image" class="profile-image" /></div>
    <div class="card-content">
      <h3 class="card-title"><?php the_field('services_name', 109); ?></h3>
      <p class="card-description"><?php the_field('services_descriptions', 109) ?></p>
    </div>
  </div>
  <div class="card">
    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/1 (2).png" alt="Profile Image" class="profile-image" /></div>
    <div class="card-content">
      <h3 class="card-title">Developing Shared Understanding</h3>
      <p class="card-description">Our team fosters collaboration between designers and developers to ensure a unified understanding across all phases.</p>
    </div>
  </div>
  <div class="card">
    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/1 (2).png" alt="Profile Image" class="profile-image" /></div>
    <div class="card-content">
      <h3 class="card-title">Security & Intellectual Property</h3>
      <p class="card-description">We prioritize security and safeguard intellectual property through best practices and compliance with industry standards.</p>
    </div>
  </div>
  <div class="card">
    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/1 (5).png" alt="Profile Image" class="profile-image" /></div>
    <div class="card-content">
      <h3 class="card-title">Quality Assurance & Testing</h3>
      <p class="card-description">Our rigorous testing procedures ensure that the final product is reliable, secure, and bug-free.</p>
    </div>
  </div>
  <div class="card">
    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/1 (6).png" alt="Profile Image" class="profile-image" /></div>
    <div class="card-content">
      <h3 class="card-title">Code Reviews</h3>
      <p class="card-description">We conduct thorough code reviews to maintain high-quality code, enhance collaboration, and reduce errors.</p>
    </div>
  </div>
  <div class="card">
    <div class=""><img src="<?php echo get_template_directory_uri(); ?>/1 (7).png" alt="Profile Image" class="profile-image" /></div>
    <div class="card-content">
      <h3 class="card-title">Proven Experience and Expertise</h3>
      <p class="card-description">With years of experience, our team brings expertise across various domains, ensuring the success of your project.</p>
    </div>
  </div>
</div><br>

<div class="rectangle"></div>








<?php get_footer(); ?>