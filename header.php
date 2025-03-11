<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?> | <?php wp_title('STOVE LLC Freelance for Hire'); ?></title>

    <!-- Link to main stylesheet -->
    <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

    <!-- WordPress Favicon (Set in Admin) -->
    <link rel="icon" href="<?php echo get_site_icon_url(); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100..900&display=swap" rel="stylesheet">

    <?php wp_head(); ?>
</head>
<body>

<!-- STOVELLC Header -->
<header id="header">
    <div class="header-container">
        <!-- Logo -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stovellc-logo-v5.png" alt="Stove LLC Logo" class="logo">

        <!-- Navigation Menu -->
        <nav>
            <div class="jump-links nav-flex">
                <a href="<?php echo home_url(); ?>">Home</a>
                <a href="<?php echo site_url('/#about'); ?>">About</a>
                <a href="<?php echo site_url('/#services'); ?>">Services</a>
                <a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
                <a href="<?php echo site_url('/#contact'); ?>">Contact</a>
            </div>
        </nav>
    </div>
</header>