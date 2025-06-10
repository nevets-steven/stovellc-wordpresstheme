<!-- partials/hero.php -->

<section id="hero">
    <div class="hero-container">
        <h1>
            <?php
            if (is_front_page()){
                echo 'Welcome to STOVE LLC';
            }
            elseif (is_page_template('portfolio.php')){
                echo 'Welcome to My Portfolio';
            }
            else{
                echo 'Explore My Work';
            }
            ?>
        </h1>
        <!-- Welcome gif insert here -->
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/stovellc-welcome.png" alt="Welcoming Image" class='welcomepic'>
        <p>I design and build websites with clean code, thoughtful design, and a focus on usability. Whether you're here to explore my work, learn more about my background, or start a project — you're in the right place.</p>
    </div>
    <button class="hero-cta" id="hero-cta">
        Click Me
    </button>
    <div id='popup' class='popup hidden'>
    <span id="close-popup" class="close">&times;</span>
        <p class="popup-content">Hey! You clicked my button! Feel free to take a look around the site, 
            if you have any questions fill out the <a href="<?php echo site_url('/#contact'); ?>">contact box</a> to get in touch!</p>
    </div>
</section>