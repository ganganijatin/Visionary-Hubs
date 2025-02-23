<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">



  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Visionary Hubs</title>
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?> ../style.css">
</head>
<body>
    <div class="navbar">
      <?php  
        $logoimg = get_header_image();
      ?>
      <!-- Logo -->
      <div><img src="<?php echo $logoimg; ?>" class="logo" alt="Visionary Hubs Logo"></div>

      <!-- Menu Toggle for Hamburger -->
      <input type="checkbox" id="menu-toggle" class="menu-toggle">
      <label for="menu-toggle" class="hamburger-icon">
        <span></span>
        <span></span>
        <span></span>
      </label>

      <!-- WordPress Dynamic Menu -->
      <?php
        wp_nav_menu(array(
          'theme_location' => 'primary-menu',
          'menu_class'     => 'nav',
          'container'      => false,
        ));
      ?>

      <!-- Quote Button -->
      <a href="<?php echo get_permalink(get_page_by_path('request-a-quote-page')); ?>" class="quote-btn">Request A Quote</a>

    </div>
    
    
  </body>
</html>
