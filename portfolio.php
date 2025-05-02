<?php 
/* 
Template Name: Portfolio 
*/ 
get_header(); 
?>

<?php get_template_part('partials/hero'); ?>

<section id="portfolio">
    <h2>Check this out!</h2>
    <p>This is the place where I want to showcase all that I can do, ranging from animations to cool CSS designs.</p>

    <div class="porfolio-item item-1">
        <div class="threed-cube-container">
            <div class="cube">
                <div class="face front">Front</div>
                <div class="face back">Back</div>
                <div class="face right">Right</div>
                <div class="face left">Left</div>
                <div class="face top">Top</div>
                <div class="face bottom">Bottom</div>
            </div>
        </div>
    </div>
    <div class="porfolio-item item-2"></div>
    <div class="porfolio-item item-3"></div>
    <div class="porfolio-item item-4"></div>
</section>

<?php get_footer(); ?>