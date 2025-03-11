// footer back to top scroll

document.querySelector('#footer a').addEventListener('click', function(){
    document.querySelector('#header').scrollIntoView();
});

// navigation scroll function

// function nav_scroll(){
//     const jumpLinksContainer = document.querySelector('.jump-links');

//     jumpLinksContainer.addEventListener('click', function(event){
//         event.preventDefault();

//         const target = event.target;

//         console.log(target);
//     })
//     nav_scroll();
// }
