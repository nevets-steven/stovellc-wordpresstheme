<?php get_header(); ?>

<section id="hero">
    <div class="hero-container">
        <h1>Welcome to my website for STOVE LLC</h1>
        <!-- Welcome gif insert here -->
        <img src="https://picsum.photos/300" alt="Welcoming Gif">
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Eveniet itaque eligendi magni, hic sunt quisquam omnis iste animi tempora corporis.</p>
    </div>
    <button class="hero-cta" id="hero-cta">
        Click Me
    </button>
</section>

<section id="about">
    <div class="about-container">
        <div class="about-container-heading">
            <h2>TEST TEST TETING</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Non totam, rem dignissimos iusto perferendis corrupti recusandae aut repellat asperiores velit, quia dolorem omnis corporis pariatur ratione earum autem commodi aspernatur.</p>
        </div>
        <div class="profile-container">
            <img src="https://picsum.photos/400" alt="Profile Pic">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptatem consequatur unde illum fuga a, quibusdam impedit magnam debitis. Consequatur, in?</p>
        </div>
    </div>
</section>

<section id="services">
    <div class="services-container">
        <div class="card web-dev">
            <h3>Web Development</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. A, possimus?</p>
        </div>
        <div class="card css-updates">
            <h3>CSS Updates</h3>
            <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Amet, similique.</p>
        </div>
        <div class="card javascript">
            <h3>JavaScript</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus, reprehenderit.</p>
        </div>
        <div class="card consultation">
            <h3>Consultation</h3>
            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Laudantium, rem?</p>
        </div>
        <!-- Add Portfolio link -->
        <a class="portfolio-cta" id="portfolio-cta" href="<?php echo site_url('/portfolio'); ?>">
            Click to Visit Portfolio
        </a>
    </div>
</section>

<section class="testimonials">
    <h2>What Our Clients Say</h2>
    <div class="testimonial">
        <p>“Working with STOVE LLC was a game-changer. Lorem ipsum dolor sit amet consectetur adipisicing elit. Dicta, dignissimos.”</p>
        <span>- Jane Doe, CEO of TechCorp</span>
    </div>
</section>

<section id="contact">
    <p>[Insert Contact Form Here]</p>
</section>

<?php get_footer(); ?>