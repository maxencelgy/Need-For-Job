const wrap = document.querySelector('.wrap_card')
const cardImg = document.querySelectorAll('.card')
const plus = document.querySelector('.card_plus')


cardImg.forEach((elements) => {
    elements.addEventListener("mouseenter", function (e) {
        const span = document.querySelector('.card_plus')
        span.style.display='block'
    });

    elements.addEventListener("mouseleave", function (e) {
        const span = document.querySelector('.card_plus')
        span.style.display='none'
    });
  
  });
console.log("salut main");
