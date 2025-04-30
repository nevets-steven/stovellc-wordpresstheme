<?php 
/* 
Template Name: Portfolio 
*/ 
get_header(); 
?>

<section id="hero">
    <div class="hero-container">
        <h1>Welcome to my portfolio</h1>
        <!-- Welcome gif insert here -->
        <img src="https://picsum.photos/300" alt="Welcoming Gif">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque eligendi magni, hic sunt quisquam omnis iste animi tempora corporis.</p>
    </div>
    <button class="hero-cta" id="hero-cta">
        Click Me
    </button>
</section>

<section id="portfolio">
    <h2>Check this out!</h2>
    <p>This is the place where I want to showcase all that I can do, ranging from animations to cool CSS designs.</p>

    <div class="porfolio-item item-1"></div>
    <div class="porfolio-item item-2"></div>
    <div class="porfolio-item item-3"></div>
    <div class="porfolio-item item-4"></div>
</section>

<?php get_footer(); ?>