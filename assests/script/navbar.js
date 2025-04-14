document.addEventListener('DOMContentLoaded', () => {
    const burger = document.querySelector('.navbar-burger');
    const menu = document.querySelector('.navbar-menu');
  
    burger.addEventListener('click', () => {
      burger.classList.toggle('is-active');
      menu.classList.toggle('is-active');
    });
  });


  document.addEventListener("DOMContentLoaded", () => {
    const cards = document.querySelectorAll('#carousel .card'); 
    let currentIndex = 0; 
    const intervalTime = 3000; 

    const updateSlider = () => {
      cards.forEach((card, index) => {
        card.style.display = index === currentIndex ? "block" : "none";
      });
    };
  

    updateSlider();
 
    setInterval(() => {
      currentIndex = (currentIndex + 1) % cards.length; 
      updateSlider();
    }, intervalTime);
  });