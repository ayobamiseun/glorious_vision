/**
* Template Name: Delicious - v4.7.0
* Template URL: https://bootstrapmade.com/delicious-free-restaurant-bootstrap-theme/
* Author: BootstrapMade.com
* License: https://bootstrapmade.com/license/
*/



// nav js

const navSlide = () => {
  const burger = document.querySelector('.burger');
  const nav = document.querySelector('.nav-links');
  const navLinks = document.querySelectorAll('.nav-links li')

  burger.addEventListener('click', ()=>{
      //Toggle the nave
      nav.classList.toggle('nav-active')

      //Animate the nave
      navLinks.forEach((link,index) =>{
          if(link.style.animation){
              link.style.animation = ''
          }
          else{
              link.style.animation = `navLinkFade 0.5s ease forwards ${index /  7 + 0.5}s`
          }
      })

      //burger close animation
      burger.classList.toggle('toggle')

  })
}

navSlide();

// end of nav js