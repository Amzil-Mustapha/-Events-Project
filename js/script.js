let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () =>{
  menu.classList.toggle('fa-times');
  navbar.classList.toggle('active');
};

window.onscroll = () =>{
  menu.classList.remove('fa-times');
  navbar.classList.remove('active');
};

var swiper = new Swiper(".home-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
});

var swiper = new Swiper(".service-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".mariage-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
    renderBullet: function(index,className){
      return '<span class="' +className+ '">' + (index +1) + '</span>';
    }
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});

var swiper = new Swiper(".local-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
    renderBullet: function(index,className){
      return '<span class="' +className+ '">' + (index +1) + '</span>';
    }
  },
  breakpoints: {
    380: {
      slidesPerView: 1,
    },
    638: {
      slidesPerView: 2,
    },
    920: {
      slidesPerView: 3,
    },
    1190: {
      slidesPerView: 4,
    }
  },
});

var swiper = new Swiper(".reviews-slider", {
  loop:true,
  spaceBetween:20,
  grabCursor:true,
  pagination: {
    el: ".swiper-pagination",
    clickable:true,
  },
  breakpoints: {
    450: {
      slidesPerView: 1,
    },
    768: {
      slidesPerView: 2,
    },
    1000: {
      slidesPerView: 3,
    },
  },
});


