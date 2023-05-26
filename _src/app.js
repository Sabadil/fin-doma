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
        autoplay: {
        delay: 4000,
        loop: true,
        disableOnInteraction: false,
      },
        parallax: true,
        speed: 1200,
      });
})
