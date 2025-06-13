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
// Event Listener for Click me

const button = document.getElementById('hero-cta');
const popup = document.getElementById('popup');
const close = document.getElementById('close-popup');

console.log('Script Loaded');
//if button click, show popup with respective classes
button.addEventListener('click', function() {
    popup.classList.remove('hidden');
    popup.classList.add('visible');
});

//closing popup
close.addEventListener('click', function() {
    popup.classList.remove('visible');
    popup.classList.add('hidden');
});

//outside box click

window.addEventListener('click', function(e){
    if (e.target === popup){
        popup.classList.remove('visible');
        popup.classList.add('hidden');
    }
});


function handleContactFormSubmission(form) {
    const formData = new FormData(form);
  
    fetch("https://script.google.com/macros/s/AKfycbyLHSgjSBXKqeD1mKTQ9KKkUgntH7sRYpz3OdVhunvYm7JHkRlzO27O-kd2gyoBbsf1/exec", {
      method: "POST",
      body: formData
    })
      .then(response => response.text())
      .then(data => {
        alert("Message sent successfully!");
        form.reset();
      })
      .catch(error => {
        alert("There was an error sending your message. Please try again.");
        console.error("Submission error:", error);
      });
  
    return false; // Prevent default form submission
  }


  //mobile hamburger menu
  