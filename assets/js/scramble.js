// this is the file for the word scramble game

const words = [
    {word: 'developer', hint:'A person who writes code'},
    {word: 'sneaker', hint: 'Another word for a shoe, like Jordan Brand'},
    {word: 'function', hint: 'A resuable block of code'},
    {word: 'tangerine', hint: 'A citrus fruit is similar to Mandarins'}

];

let currentWord = "";
let shuffled = "";

//field yates shuffle

function shuffleWord(word){
    const arr = word.split("");
    for (let i = arr.length - 1; i > 0; i--){
        const j = Math.floor(Math.random() * (i+1));
        [arr[i], arr[j]] = [arr[j], arr[i]];
    }
    return arr.join("");
}

function newGame() {
    const random = words[Math.floor(Math.random() * words.length)];
    currentWord = random.word;
    shuffled = shuffleWord(currentWord);

    document.getElementById('scrambled-word').textContent = shuffled;
    document.getElementById('hint').textContent = `Hint: ${random.hint}`;
    document.getElementById('feedback').textContent = "";
    document.getElementById('user-input').value = "";
}

function checkGuess() {
    const input = document.getElementById("user-input").value.toLowerCase();
    const feedback = document.getElementById("feedback");

    if (input === currentWord){
        feedback.textContent = 'Correct!';
    }
    else{
        feedback.textContent = 'Try Again.';
    }
}

document.addEventListener('DOMContentLoaded', newGame);