
<?php 
/*Template Name: Word Scramble */
get_header();
?>

<section id='word-scramble'>
    <h1>Word Scramble Game</h1>
    <p id="hint"></p>
    <div class='scrambled-container'>
        <strong>Scrambled: </strong>
        <span id="scrambled-word"></span>
    </div>
    <input type="text" id='user-input' placeholder='Your Guess'>
    <button class='cta-button'>Submit</button>
    <p id="feedback"></p>
    <button class="cta-button new-game">New Word</button>
</section>


<?php get_footer(); ?>

