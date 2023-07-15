import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import './fonts.css';
import './reset.css';
import './app.scss';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

document.addEventListener('DOMContentLoaded', () => {
    const swiperOurProjects = new Swiper(".our-porject-swiper", {
        centeredSlides: true,
        loop: true,
        autoplay: {
        delay: 4000,
        
        disableOnInteraction: false,
      },
        parallax: true,
        speed: 1200,
      });

      const swiperRealized = new Swiper(".swiper-realized", {
        slidesPerView: 4,
        spaceBetween: 24,
        navigation: {
          nextEl: ".realized-button-next",
          prevEl: ".realized-button-prev",
        },

        breakpoints: {
          // mobile + tablet - 320-990
          320: {
            slidesPerView: 1.2
          },
          // desktop >= 991
          430: {
            slidesPerView: 1.3
          },
          991: {
            slidesPerView: 4
          }
        }
      });

      const swiperReviews = new Swiper(".swiper-reviews", {
        navigation: {
          nextEl: ".reviews-button-next",
          prevEl: ".reviews-button-prev",
        },
      });
})
