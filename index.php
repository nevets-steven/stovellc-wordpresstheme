<?php get_header(); ?>

<section id="hero">
    <div class="hero-container">
        <h1>Welcome to my website for STOVE LLC</h1>
        <!-- Welcome gif insert here -->
        <img src="./assets/images/stovellc-welcome.png" alt="Welcoming Image">
        
        <p>I design and build websites with clean code, thoughtful design, and a focus on usability. Whether you're here to explore my work, learn more about my background, or start a project — you're in the right place.</p>
    </div>
    <button class="hero-cta" id="hero-cta">
        Click Me
    </button>
</section>

<section id="about">
    <div class="about-container">
        <div class="about-container-heading">
            <h2>About Me</h2>
            <p>Where do I begin? My journey in tech started at Michigan State, 
                where I explored Computer Science before earning my degree in Media and Information.</p>
            <p>Today, I work at Rocket as a Product Manager, giving me a front-row seat to the 
                full product lifecycle — from early ideas to launch. That experience sharpened 
                my understanding of how good design, clean code, and smart strategy come together.</p>
            <p>Outside of work, I've put in the hours as a self-taught web developer. 
                Through online certifications and hands-on projects, I've built a skillset 
                grounded in real-world problem solving. Whether I'm designing a responsive 
                layout or troubleshooting a tricky bug, I approach every build with a 
                product-first mindset and a passion for getting it right.</p>
        </div>

        <div class="profile-container">
            <img src="./assets/images/headshot-updated.jpg" alt="Profile Pic" class='profilpic'>
            <p>My goal is to earn your trust and deliver real value through my 
                freelance services — with clear communication, clean code, and solutions that actually work.</p>
        </div>
    </div>
</section>

<section id="services">
    <div class="services-container">
        <div class="card web-dev">
            <h3>Web Development</h3>
            <p>From wireframes to launch, I build sites that are responsive, accessible, 
                and easy to maintain. Every line of code supports a clear user experience and a clean design.</p>
        </div>
        <div class="card css-updates">
            <h3>CSS Updates</h3>
            <p>Sometimes the small details make the biggest impact. 
                I fine-tune styles to align with brand standards, improve readability, and enhance overall usability.</p>
        </div>
        <div class="card javascript">
            <h3>JavaScript</h3>
            <p>Whether it's interactive elements or behind-the-scenes logic, 
                I use JavaScript to bring websites to life. My focus is on writing efficient, reliable code that supports user goals.</p>
        </div>
        <div class="card consultation">
            <h3>Consultation</h3>
            <p>Not sure where to start? I offer hands-on guidance to help businesses think through design, development, and strategy — always with an eye on what's practical and what's next.</p>
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
        <p>“Steven and I worked together on running many successful A/B tests on a national fintech website. 
            Steven helped implement the different experiences and troubleshoot issues that were caused by the base code of the website. 
            He is a great collaborator and is flexible in implementing front-end solutions to last-minute design changes.”</p>
        <span>- Oswaldo M, Terakeet</span>
    </div>
    <!-- <div class="testimonial">
        <p>“Working with STOVE LLC was an excellent experience. Lorem ipsum dolor sit amet.”</p>
        <span>- Jane Doe, CEO of Oscorp</span>
    </div> -->
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