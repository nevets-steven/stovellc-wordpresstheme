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
