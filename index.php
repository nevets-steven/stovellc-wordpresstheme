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
            <h2>About Me</h2>
            <p>Where do I begin? My journey in tech started at Michigan State, where I explored Computer Science before earning my degree in Media and Information.

Today, I work at Rocket as a Product Manager, giving me a front-row seat to the full product lifecycle — from early ideas to launch. That experience sharpened my understanding of how good design, clean code, and smart strategy come together.

Outside of work, I've put in the hours as a self-taught web developer. Through online certifications and hands-on projects, I've built a skillset grounded in real-world problem solving. Whether I'm designing a responsive layout or troubleshooting a tricky bug, I approach every build with a product-first mindset and a passion for getting it right.</p>
        </div>
        <div class="profile-container">
            <img src="https://picsum.photos/400" alt="Profile Pic">
            <p>My goal is to earn your trust and deliver real value through my freelance services — with clear communication, clean code, and solutions that actually work.</p>
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
    <div class="testimonial">
        <p>“Working with STOVE LLC was an excellent experience. Lorem ipsum dolor sit amet.”</p>
        <span>- Jane Doe, CEO of Oscorp</span>
    </div>
</section>

<section id="contact">
    <div class="contact-form-container">
        <form action="">
            <div>
                <label for="name">Name</label>
                <input type="text" placeholder="Enter Your Name" id="name" name="name" required>
            </div>
            <div>
                <label for="email">Email</label>
                <input type="email" placeholder="example@gmail.com" id="email" name="email" required>
            </div>
            <div>
                <label for="message">Enter Your Message</label>
                <textarea type="text" placeholder="Type Here" id="message" rows='4' name="message" required<?php echo htmlspecialchars($message ?? '', ENT_QUOTES, 'UTF-8'); ?>></textarea>
            </div>
            <button type="submit" class='form-submit-cta' id='form-submit-cta'>Send to STOVE LLC</button>
        </form>
    </div>
</section>

<?php get_footer(); ?>