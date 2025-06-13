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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php wp_head(); ?>
</head>
<body>

<!-- STOVELLC Header -->
<header id="header">
    <div class="header-container">
        <!-- Logo -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stovellc-logo-v5.png" alt="Stove LLC Logo" class="logo">

        <button id="hamburger" class="hamburger" aria-label="Toggle navigation">
            <i class="fa-solid fa-bars"></i>
        </button>
        <!-- Navigation Menu -->
        <nav>
            <div class="jump-links nav-flex visible-flex">
                <a href="<?php echo home_url(); ?>">Home</a>
                <a href="<?php echo site_url('/#about'); ?>">About</a>
                <a href="<?php echo site_url('/#services'); ?>">Services</a>
                <a href="<?php echo site_url('/portfolio'); ?>">Portfolio</a>
                <a href="<?php echo site_url('/#contact'); ?>">Contact</a>
                <a href="https://nevets-steven.github.io/simon-says-capstone/" target="_blank" rel="noopener noreferrer">Simon Says</a>
            </div>
        </nav>
    </div>
</header>