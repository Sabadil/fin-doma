import Alpine from 'alpinejs';
window.Alpine = Alpine;
Alpine.start();

import './fonts.css';
import './reset.css';
import './app.scss';
import Swiper from 'swiper/bundle';
import 'swiper/css/bundle';

import MicroModal from 'micromodal';


document.addEventListener('DOMContentLoaded', () => {

      //micromodal_init
      MicroModal.init({
        openTrigger: 'data-custom-open',
        closeTrigger: 'data-custom-close',
        disableScroll: false,
        disableFocus: false,
        awaitCloseAnimation: true,
        debugMode: false,
      });

      let button1 = document.querySelector('.form-modal-1');
      button1.addEventListener('click', function(){
        MicroModal.show('modal-1');
      });
      let button2 = document.querySelector('.form-modal-2');
      button2.addEventListener('click', function(){
        MicroModal.show('modal-1');
      });



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
