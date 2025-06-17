
<?php 
/*Template Name: Word Scramble */
get_header();
?>

<section id='word-scramble' class='word-scramble'>
    <h1>Word Scramble Game</h1>
    <p id="hint"></p>
    <div class='scrambled-container'>
        <strong>Scrambled: </strong>
        <span id="scrambled-word"></span>
    </div>
    <input type="text" id='user-input' placeholder='Your Guess'>
    <p id="feedback"></p>
    <div class="btn-container">
        <button id='check-guess' class='cta-button'>Submit</button>
        <button class="cta-button new-game">New Word</button>
    </div>

</section>


<?php get_footer(); ?>

