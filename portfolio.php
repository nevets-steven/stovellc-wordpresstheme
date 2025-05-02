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
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stovellc-welcome.png" alt="Welcoming Image" class='welcomepic'>
        <p>I design and build websites with clean code, thoughtful design, and a focus on usability. Whether you're here to explore my work, learn more about my background, or start a project — you're in the right place.</p>
    </div>
    <button class="hero-cta" id="hero-cta">
        Click Me
    </button>
</section>

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