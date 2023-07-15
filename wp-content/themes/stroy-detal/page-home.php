<?php
/**
 * Template name: Главная
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package main-theme
 */

get_header();
?>

    <main>
        <section>
            <div class="main-page">
                <div class="main-page-left">
                    <nav>
                        <ul class="main-page-list">
                            <li class="page-list_item">
                                <a href="#about">О нас</a>
                            </li>
                            <li class="page-list_item">
                                <a href="#our-projects">Проекты</a>
                            </li>
                            <li class="page-list_item">
                                <a href="#advantages">Преимущества</a>
                            </li>
                            <li class="page-list_item">
                                <a href="#realized">Технологии</a>
                            </li>
                            <li class="page-list_item">
                                <a href="#prod">Производство</a>
                            </li>
                            <li class="page-list_item">
                                <a href="#reviews">Отзывы</a>
                            </li>
                            <li class="page-list_item">
                                <a href="#contacts">Контакты</a>
                            </li>
                        </ul>
                    </nav>
                    <div class="page-left-title">
                        <h1>Строительство домов из трехслойных бетонных панелей</h1>
                        <p>Строим надежные дома с финским качеством и сроком эксплуатации от 50 лет. По индивидуальному или готовому проекту</p>
                        <a class="left-btn" href="#">
                            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.5 5.4375H7.5C7.35082 5.4375 7.20774 5.49676 7.10225 5.60225C6.99676 5.70774 6.9375 5.85082 6.9375 6V10.5C6.9375 10.6492 6.99676 10.7923 7.10225 10.8977C7.20774 11.0032 7.35082 11.0625 7.5 11.0625H16.5C16.6492 11.0625 16.7923 11.0032 16.8977 10.8977C17.0032 10.7923 17.0625 10.6492 17.0625 10.5V6C17.0625 5.85082 17.0032 5.70774 16.8977 5.60225C16.7923 5.49676 16.6492 5.4375 16.5 5.4375ZM15.9375 9.9375H8.0625V6.5625H15.9375V9.9375ZM18.75 2.4375H5.25C4.9019 2.4375 4.56806 2.57578 4.32192 2.82192C4.07578 3.06806 3.9375 3.4019 3.9375 3.75V20.25C3.9375 20.5981 4.07578 20.9319 4.32192 21.1781C4.56806 21.4242 4.9019 21.5625 5.25 21.5625H18.75C19.0981 21.5625 19.4319 21.4242 19.6781 21.1781C19.9242 20.9319 20.0625 20.5981 20.0625 20.25V3.75C20.0625 3.4019 19.9242 3.06806 19.6781 2.82192C19.4319 2.57578 19.0981 2.4375 18.75 2.4375ZM18.9375 20.25C18.9375 20.2997 18.9177 20.3474 18.8826 20.3826C18.8474 20.4177 18.7997 20.4375 18.75 20.4375H5.25C5.20027 20.4375 5.15258 20.4177 5.11742 20.3826C5.08225 20.3474 5.0625 20.2997 5.0625 20.25V3.75C5.0625 3.70027 5.08225 3.65258 5.11742 3.61742C5.15258 3.58225 5.20027 3.5625 5.25 3.5625H18.75C18.7997 3.5625 18.8474 3.58225 18.8826 3.61742C18.9177 3.65258 18.9375 3.70027 18.9375 3.75V20.25ZM9.1875 13.875C9.1875 14.0604 9.13252 14.2417 9.0295 14.3958C8.92649 14.55 8.78007 14.6702 8.60877 14.7411C8.43746 14.8121 8.24896 14.8307 8.0671 14.7945C7.88525 14.7583 7.7182 14.669 7.58709 14.5379C7.45598 14.4068 7.36669 14.2398 7.33051 14.0579C7.29434 13.876 7.31291 13.6875 7.38386 13.5162C7.45482 13.3449 7.57498 13.1985 7.72915 13.0955C7.88332 12.9925 8.06458 12.9375 8.25 12.9375C8.49864 12.9375 8.7371 13.0363 8.91291 13.2121C9.08873 13.3879 9.1875 13.6264 9.1875 13.875ZM12.9375 13.875C12.9375 14.0604 12.8825 14.2417 12.7795 14.3958C12.6765 14.55 12.5301 14.6702 12.3588 14.7411C12.1875 14.8121 11.999 14.8307 11.8171 14.7945C11.6352 14.7583 11.4682 14.669 11.3371 14.5379C11.206 14.4068 11.1167 14.2398 11.0805 14.0579C11.0443 13.876 11.0629 13.6875 11.1339 13.5162C11.2048 13.3449 11.325 13.1985 11.4792 13.0955C11.6333 12.9925 11.8146 12.9375 12 12.9375C12.2486 12.9375 12.4871 13.0363 12.6629 13.2121C12.8387 13.3879 12.9375 13.6264 12.9375 13.875ZM16.6875 13.875C16.6875 14.0604 16.6325 14.2417 16.5295 14.3958C16.4265 14.55 16.2801 14.6702 16.1088 14.7411C15.9375 14.8121 15.749 14.8307 15.5671 14.7945C15.3852 14.7583 15.2182 14.669 15.0871 14.5379C14.956 14.4068 14.8667 14.2398 14.8305 14.0579C14.7943 13.876 14.8129 13.6875 14.8839 13.5162C14.9548 13.3449 15.075 13.1985 15.2292 13.0955C15.3833 12.9925 15.5646 12.9375 15.75 12.9375C15.9986 12.9375 16.2371 13.0363 16.4129 13.2121C16.5887 13.3879 16.6875 13.6264 16.6875 13.875ZM9.1875 17.625C9.1875 17.8104 9.13252 17.9917 9.0295 18.1458C8.92649 18.3 8.78007 18.4202 8.60877 18.4911C8.43746 18.5621 8.24896 18.5807 8.0671 18.5445C7.88525 18.5083 7.7182 18.419 7.58709 18.2879C7.45598 18.1568 7.36669 17.9898 7.33051 17.8079C7.29434 17.626 7.31291 17.4375 7.38386 17.2662C7.45482 17.0949 7.57498 16.9485 7.72915 16.8455C7.88332 16.7425 8.06458 16.6875 8.25 16.6875C8.49864 16.6875 8.7371 16.7863 8.91291 16.9621C9.08873 17.1379 9.1875 17.3764 9.1875 17.625ZM12.9375 17.625C12.9375 17.8104 12.8825 17.9917 12.7795 18.1458C12.6765 18.3 12.5301 18.4202 12.3588 18.4911C12.1875 18.5621 11.999 18.5807 11.8171 18.5445C11.6352 18.5083 11.4682 18.419 11.3371 18.2879C11.206 18.1568 11.1167 17.9898 11.0805 17.8079C11.0443 17.626 11.0629 17.4375 11.1339 17.2662C11.2048 17.0949 11.325 16.9485 11.4792 16.8455C11.6333 16.7425 11.8146 16.6875 12 16.6875C12.2486 16.6875 12.4871 16.7863 12.6629 16.9621C12.8387 17.1379 12.9375 17.3764 12.9375 17.625ZM16.6875 17.625C16.6875 17.8104 16.6325 17.9917 16.5295 18.1458C16.4265 18.3 16.2801 18.4202 16.1088 18.4911C15.9375 18.5621 15.749 18.5807 15.5671 18.5445C15.3852 18.5083 15.2182 18.419 15.0871 18.2879C14.956 18.1568 14.8667 17.9898 14.8305 17.8079C14.7943 17.626 14.8129 17.4375 14.8839 17.2662C14.9548 17.0949 15.075 16.9485 15.2292 16.8455C15.3833 16.7425 15.5646 16.6875 15.75 16.6875C15.9986 16.6875 16.2371 16.7863 16.4129 16.9621C16.5887 17.1379 16.6875 17.3764 16.6875 17.625Z" fill="white"/>
                            </svg>
                            <p>РАСЧИТАТЬ СТОЙМОСТЬ СТРОИТЕЛЬСТВА ДОМА</p>
                        </a>
                    </div>
                    <div>
                        <ul class="left-bottom">
                            <li class="left-bottom_item">
                                <span>10 лет</span>
                                <p>опыт применения технологии</p>
                            </li>
                            <li class="left-bottom_item">
                                <span>от 3 дней</span>
                                <p>скорость возведения каркаса</p>
                            </li>
                            <li class="left-bottom_item">
                                <span>за 3 месяца</span>
                                <p>строим дом <br> вашей мечты</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="main-page-right">
                    <img width="100%" src="assets/images/main.png" alt="main">
                </div>
            </div>
        </section>
        <section id="about" class="about">
            <div class="container">
                <div class="about-main">
                    <div class="about-left">
                        <h2 class="about-left_title">О нас</h2>
                        <div class="about-left_text">
                            <p>Компания «Строй-Деталь.рф» основана в 2015 году</p>
                            <p>Огромный опыт наших специалистов, постоянное обучение, отточенные технологии строительства и собственные наработки позволяют нам строить качественные коттеджи для загородной жизни</p>
                        </div>
                        <div class="about-left_grid">
                            <div class="left-grid_item">
                                <span>>7 лет</span>
                                <p>строим красивые и энергоэффективные дома</p>
                            </div>
                            <div class="left-grid_item">
                                <span>5 лет</span>
                                <p>гарантийное обслуживаниедля построенных домов</p>
                            </div>
                            <div class="left-grid_item">
                                <span>103 дома</span>
                                <p>построили за это время</p>
                            </div>
                            <div class="left-grid_item">
                                <span>14 человек</span>
                                <p>в нашей команде</p>
                            </div>
                        </div>
                    </div>
                    <div class="about-right">
                        <img width="100%" src="assets/images/about.png" alt="about">
                    </div>
                </div>
            </div>
        </section>
        <section id="our-projects" class="our-projects">
            <div class="container">
                <h2>Наши проекты</h2>
                <div class="our-projects_main">
                    <div class="our-projects-item">
                        <div class="swiper our-porject-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img width="100%" src="assets/images/swiper-img-1.png" alt="swiper-img">
                                </div>
                                <div class="swiper-slide">
                                    <img width="100%" src="assets/images/swiper-img-1.png" alt="swiper-img">
                                </div>
                                <div class="swiper-slide">
                                    <img width="100%" src="assets/images/swiper-img-1.png" alt="swiper-img">
                                </div>
                            </div>
                        </div>
                        <div class="our-projects_left">
                            <div class="our-projects_title">
                                <h3>Одноэтажный жилой дом Тип-1А</h3>
                                <p>от 5 800 000 ₽</p>
                            </div>
                            <div class="projects-left_descr">
                                Одноэтажный финский дом на четыре спальни, с террасой и сауной. Он подходит как в качестве дачи для летнего отдыха на природе, так и для постоянного проживания.
                            </div>
                            <div class="projects-left_flex">
                                <div class="projects-left_grid">
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5 4H19V12M19 12H16.5M19 12V20H10.5M10.5 20V12M10.5 20H4V4H8L11 6.13333M10.5 12H13M10.5 12H8" stroke="#9EA2AB"/>
                                        </svg>
                                        <p>Площадь: <span>181</span>м2</p>
                                    </div>
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20H4V15H9.33333V9H14.6667V4H20Z" stroke="#9EA2AB"/>
                                        </svg>
                                        <p>Этажей: <span>1</span></p>
                                    </div>
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 3V21H4V3H20Z" stroke="#9EA2AB"/>
                                            <circle cx="17" cy="14" r="1" fill="#9EA2AB"/>
                                        </svg>
                                        <p>Комнат: <span>3</span></p>
                                    </div>
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 20H10V10H13H16H20V4H4V20Z" stroke="#9EA2AB"/>
                                            <path d="M16 7V10H13M13 10V7M13 10H10M10 10V7M10 10H7M10 10V13M10 13H7M10 13V16H7" stroke="#9EA2AB"/>
                                        </svg>
                                        <p>Размер: <span>15x12</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-btns">
                                <button class="projects-btn_pdf">СКАЧАТЬ PDF ПРОЕКТА</button>
                            </div>
                        </div>
                    </div>
                    <div class="our-projects-item">
                        <div class="swiper our-porject-swiper">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <img width="100%" src="assets/images/swiper-img-1.png" alt="swiper-img">
                                </div>
                                <div class="swiper-slide">
                                    <img width="100%" src="assets/images/swiper-img-1.png" alt="swiper-img">
                                </div>
                                <div class="swiper-slide">
                                    <img width="100%" src="assets/images/swiper-img-1.png" alt="swiper-img">
                                </div>
                            </div>
                        </div>
                        <div class="our-projects_left">
                            <div class="our-projects_title">
                                <h3>Одноэтажный жилой дом Тип-1А</h3>
                                <p>от 5 800 000 ₽</p>
                            </div>
                            <div class="projects-left_descr">
                                Одноэтажный финский дом на четыре спальни, с террасой и сауной. Он подходит как в качестве дачи для летнего отдыха на природе, так и для постоянного проживания.
                            </div>
                            <div class="projects-left_flex">
                                <div class="projects-left_grid">
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M14.5 4H19V12M19 12H16.5M19 12V20H10.5M10.5 20V12M10.5 20H4V4H8L11 6.13333M10.5 12H13M10.5 12H8" stroke="#9EA2AB"/>
                                        </svg>
                                        <p>Площадь: <span>181</span>м2</p>
                                    </div>
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 4V20H4V15H9.33333V9H14.6667V4H20Z" stroke="#9EA2AB"/>
                                        </svg>
                                        <p>Этажей: <span>1</span></p>
                                    </div>
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M20 3V21H4V3H20Z" stroke="#9EA2AB"/>
                                            <circle cx="17" cy="14" r="1" fill="#9EA2AB"/>
                                        </svg>
                                        <p>Комнат: <span>3</span></p>
                                    </div>
                                    <div class="projects-gird_item">
                                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M4 20H10V10H13H16H20V4H4V20Z" stroke="#9EA2AB"/>
                                            <path d="M16 7V10H13M13 10V7M13 10H10M10 10V7M10 10H7M10 10V13M10 13H7M10 13V16H7" stroke="#9EA2AB"/>
                                        </svg>
                                        <p>Размер: <span>15x12</span></p>
                                    </div>
                                </div>
                            </div>
                            <div class="projects-btns">
                                <button class="projects-btn_pdf">СКАЧАТЬ PDF ПРОЕКТА</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="advantages" class="advantages">
            <div class="container">
                <h4 class="advantages__title">
                    Преимущества домов из трехслойных финских панелей
                </h4>
                <div class="advantages__grid">
                    <div class="advantages__grid-left">
                        <div class="advantages__grid-left--item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.668 14.0001V10.6667M13.3346 14.0001V10.6667M16.0013 29.3334C23.3653 29.3334 29.3346 23.3641 29.3346 16.0001C29.3346 8.63608 23.3653 2.66675 16.0013 2.66675C8.6373 2.66675 2.66797 8.63608 2.66797 16.0001C2.66797 23.3641 8.6373 29.3334 16.0013 29.3334Z" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M16.0013 21.3333C17.4158 21.3333 18.7723 20.7714 19.7725 19.7712C20.7727 18.771 21.3346 17.4145 21.3346 16V14H10.668V16C10.668 17.4145 11.2299 18.771 12.2301 19.7712C13.2303 20.7714 14.5868 21.3333 16.0013 21.3333ZM16.0013 21.3333V29.3333" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="advantages__grid-left--item_text">
                  <span>
                    Энергоэффективность
                  </span>
                                <p>Сопротивление теплопередачи стен превышает нормы в 2 раза</p>
                            </div>
                        </div>
                        <div class="advantages__grid-left--item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8 6.66675H24L28 13.3334L16.6667 26.0001C16.5798 26.0888 16.476 26.1592 16.3616 26.2073C16.2471 26.2554 16.1242 26.2802 16 26.2802C15.8758 26.2802 15.7529 26.2554 15.6384 26.2073C15.524 26.1592 15.4202 26.0888 15.3333 26.0001L4 13.3334L8 6.66675Z" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                <path d="M13.3346 16.0001L10.668 13.0667L11.468 11.7334" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="advantages__grid-left--item_text">
                  <span>
                    Долговечность
                  </span>
                                <p>Гарантийный срок службы до 80 лет</p>
                            </div>
                        </div>
                        <div class="advantages__grid-left--item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M21.9993 6.9374C21.9993 3.6814 20.4793 1.3374 17.99 1.3374C16.622 1.3374 16.1526 2.14007 15.662 4.00407C15.562 4.39074 15.5126 4.5774 15.4606 4.76274C15.326 5.24007 15.0913 6.05607 14.758 7.20274C14.7489 7.23339 14.7354 7.26258 14.718 7.2894L10.898 13.2707C9.99374 14.6856 8.65948 15.7731 7.0913 16.3734L6.46064 16.6147C5.65537 16.9232 4.98456 17.5056 4.56612 18.2595C4.14767 19.0135 4.00835 19.8909 4.17264 20.7374L4.7113 23.5187C4.86894 24.3318 5.25626 25.0826 5.8274 25.6824C6.39854 26.2821 7.12959 26.7056 7.93397 26.9027L18.1046 29.3961C19.7261 29.7933 21.4388 29.5343 22.8703 28.6753C24.3017 27.8164 25.3362 26.427 25.7486 24.8094L27.6353 17.4094C27.7985 16.7696 27.8132 16.1009 27.6785 15.4544C27.5437 14.808 27.263 14.2009 26.8578 13.6796C26.4526 13.1582 25.9336 12.7363 25.3404 12.4462C24.7473 12.156 24.0956 12.0052 23.4353 12.0054H21.006C21.6673 9.82807 21.9993 8.1494 21.9993 6.9374ZM6.13264 20.3561C6.05812 19.9714 6.12152 19.5727 6.31171 19.2301C6.5019 18.8875 6.80673 18.6229 7.17264 18.4827L7.80464 18.2414C9.77221 17.4881 11.4462 16.1234 12.5806 14.3481L16.4033 8.36674C16.5233 8.18007 16.6153 7.97474 16.6766 7.7614C17.0126 6.60807 17.2473 5.78807 17.3833 5.30407C17.4572 5.0414 17.5279 4.77783 17.5953 4.5134C17.8486 3.55074 17.9726 3.33874 17.9886 3.33874C19.146 3.33874 19.998 4.65074 19.998 6.9374C19.998 8.11607 19.5633 10.0507 18.686 12.6907C18.6362 12.8409 18.6227 13.0008 18.6468 13.1571C18.6708 13.3135 18.7315 13.462 18.8241 13.5903C18.9166 13.7186 19.0383 13.8232 19.1791 13.8953C19.3199 13.9675 19.4758 14.0052 19.634 14.0054H23.434C23.7895 14.0054 24.1403 14.0866 24.4596 14.2428C24.7789 14.399 25.0583 14.6261 25.2765 14.9068C25.4946 15.1875 25.6458 15.5143 25.7184 15.8623C25.7909 16.2103 25.7831 16.5703 25.6953 16.9147L23.8086 24.3147C23.5262 25.4215 22.8183 26.372 21.8388 26.9595C20.8592 27.547 19.6873 27.7241 18.578 27.4521L8.4073 24.9587C7.9744 24.8525 7.58096 24.6246 7.27355 24.3018C6.96614 23.979 6.75761 23.575 6.67264 23.1374L6.13264 20.3561Z" fill="#D85140"/>
                            </svg>
                            <div class="advantages__grid-left--item_text">
                  <span>
                    Комфорт
                  </span>
                                <p>Планировка  предусматривает свободную конфигурацию комнат и максимальную естественную освещенность</p>
                            </div>
                        </div>
                        <div class="advantages__grid-left--item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M14 16.59L11.41 14L10 15.41L14 19.41L22 11.41L20.59 10L14 16.59Z" fill="#D85140"/>
                                <path d="M16 30L9.82401 26.707C8.06334 25.7703 6.59097 24.3719 5.56493 22.6617C4.53888 20.9516 3.99789 18.9943 4.00001 17V4C4.00054 3.46973 4.21142 2.96133 4.58638 2.58637C4.96134 2.21141 5.46974 2.00053 6.00001 2H26C26.5303 2.00053 27.0387 2.21141 27.4136 2.58637C27.7886 2.96133 27.9995 3.46973 28 4V17C28.0021 18.9943 27.4611 20.9516 26.4351 22.6617C25.409 24.3719 23.9367 25.7703 22.176 26.707L16 30ZM6.00001 4V17C5.99835 18.6318 6.44111 20.2333 7.28077 21.6325C8.12043 23.0317 9.32528 24.1758 10.766 24.942L16 27.733L21.234 24.943C22.6749 24.1767 23.8798 23.0324 24.7195 21.633C25.5592 20.2336 26.0018 18.632 26 17V4H6.00001Z" fill="#D85140"/>
                            </svg>
                            <div class="advantages__grid-left--item_text">
                  <span>
                    Безопасность
                  </span>
                                <p>Бетон и минеральная вата являются не горючими материалами и не вызывают аллергии</p>
                            </div>
                        </div>
                        <div class="advantages__grid-left--item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1.33203 18.4759V13.5239C1.33203 12.8167 1.61298 12.1384 2.11308 11.6383C2.61318 11.1382 3.29145 10.8573 3.9987 10.8573H7.86536C8.12606 10.8572 8.38102 10.7807 8.5987 10.6373L16.5987 5.3626C16.7997 5.23023 17.0328 5.15473 17.2732 5.14412C17.5137 5.13351 17.7525 5.18817 17.9644 5.30232C18.1763 5.41646 18.3533 5.58583 18.4767 5.79246C18.6001 5.99908 18.6653 6.23526 18.6654 6.47594V25.5239C18.6653 25.7646 18.6001 26.0008 18.4767 26.2074C18.3533 26.414 18.1763 26.5834 17.9644 26.6976C17.7525 26.8117 17.5137 26.8664 17.2732 26.8558C17.0328 26.8451 16.7997 26.7696 16.5987 26.6373L8.5987 21.3626C8.38102 21.2192 8.12606 21.1427 7.86536 21.1426H3.9987C3.29145 21.1426 2.61318 20.8617 2.11308 20.3616C1.61298 19.8615 1.33203 19.1832 1.33203 18.4759Z" stroke="#D85140" stroke-width="2"/>
                                <path d="M23.332 10C23.332 10 25.332 12 25.332 15.3333C25.332 18.6667 23.332 20.6667 23.332 20.6667M27.332 6C27.332 6 30.6654 9.33333 30.6654 15.3333C30.6654 21.3333 27.332 24.6667 27.332 24.6667" stroke="#D85140" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                            <div class="advantages__grid-left--item_text">
                  <span>
                    Шумоизоляция
                  </span>
                                <p>Железобетон и базальтовое волокно плохо проводят звук. Слышимость в «финских» домах значительно ниже, чем в монолитных домах и домах из старых панелей</p>
                            </div>
                        </div>
                        <div class="advantages__grid-left--item">
                            <svg width="32" height="32" viewBox="0 0 32 32" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M16.0013 29.3334C23.3651 29.3334 29.3346 23.3639 29.3346 16.0001C29.3346 8.63628 23.3651 2.66675 16.0013 2.66675C8.63751 2.66675 2.66797 8.63628 2.66797 16.0001C2.66797 23.3639 8.63751 29.3334 16.0013 29.3334Z" stroke="#D85140" stroke-width="2"/>
                                <path d="M12 18.6668H16M13.3333 16.0002V10.9335C13.3333 10.6855 13.3333 10.5615 13.3493 10.4588C13.3932 10.1804 13.5243 9.92305 13.7236 9.72374C13.9229 9.52443 14.1802 9.39341 14.4587 9.3495C14.56 9.3335 14.6853 9.3335 14.9333 9.3335H18C18.8841 9.3335 19.7319 9.68469 20.357 10.3098C20.9821 10.9349 21.3333 11.7828 21.3333 12.6668C21.3333 13.5509 20.9821 14.3987 20.357 15.0239C19.7319 15.649 18.8841 16.0002 18 16.0002H13.3333ZM13.3333 16.0002V22.6668M13.3333 16.0002H12" stroke="#D85140" stroke-width="2" stroke-linecap="round"/>
                            </svg>
                            <div class="advantages__grid-left--item_text">
                  <span>
                    Экономия
                  </span>
                                <p>Минимальные затраты на эксплуатацию</p>
                            </div>
                        </div>
                    </div>
                    <div class="advantages__grid-right">
                        <img width="100%" style="display: block !important;" src="assets/images/adv.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section id="realized" class="realized">
            <div class="container">
                <div class="realized__top">
                    <h4 class="realized__top--title">
                        Реализованные проекты
                    </h4>
                    <div class="realized__top--items">
                        <p class="realized__top--items_text">Собрали для вас фотографии со строек в одном месте, чтобы вы могли ближе познакомиться с нашей компанией</p>
                        <div class="realized__top--items_btns">
                            <div class="realized-button-prev">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                                </svg>
                            </div>
                            <div class="realized-button-next">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="realized__swiper">
                    <div class="swiper swiper-realized">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-realized-item">
                                    <img src="assets/images/realized.png" alt="">
                                    <div>
                      <span>
                        Щетниково
                      </span>
                                        <a class="realized-hidden" href="">смотреть проект</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-realized-item">
                                    <img src="assets/images/realized.png" alt="">
                                    <div>
                      <span>
                        Щетниково5555
                      </span>
                                        <a class="realized-hidden" href="">смотреть проект</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-realized-item">
                                    <img src="assets/images/realized.png" alt="">
                                    <div>
                      <span>
                        Щетниково444
                      </span>
                                        <a class="realized-hidden" href="">смотреть проект</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-realized-item">
                                    <img src="assets/images/realized.png" alt="">
                                    <div>
                      <span>
                        Щетниково123
                      </span>
                                        <a class="realized-hidden" href="">смотреть проект</a>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-realized-item">
                                    <img src="assets/images/realized.png" alt="">
                                    <div>
                      <span>
                        Щетниково2222
                      </span>
                                        <a class="realized-hidden" href="">смотреть проект</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="manage">
            <div class="container">
                <div class="manage__box">
                    <div class="manage__form">
                        <h4 class="manage__form--title">
                            Оставьте заявку и наш менеджер проконсультирует вас
                        </h4>
                        <form action="">
                            <input type="text" name="name" placeholder="Ваше имя" required>
                            <input type="tel" placeholder="Ваш номер телефона" required>
                            <div>
                                <label class="cyberpunk-checkbox-label">
                                    <input class="cyberpunk-checkbox" type="checkbox" checked>
                                    Нажимая на кнопку, вы соглашаетесь на обработку персональных данных
                                </label>
                            </div>
                            <div>
                                <button class="form-submit">
                                    задать вопрос
                                </button>
                            </div>
                        </form>
                    </div>
                    <div class="manage__box--img">
                        <img src="assets/images/form-home.png" alt="">
                    </div>
                </div>
            </div>
        </section>
        <section class="prod" id="prod">
            <div class="container">
                <h4 class="prod__title">
                    Собственное производство
                </h4>
                <div class="prod__grid">
                    <a href="#" class="prod__grid--item">
                        <img src="assets/images/prod-1.png" alt="">
                        <p>Изготовление стеновых панелей</p>
                    </a>
                </div>
            </div>
        </section>
        <section class="reviews" id="reviews">
            <div class="container">
                <div class="reviews__top">
                    <h3 class="reviews__top-title">
                        Отзывы наших клиентов
                    </h3>
                    <div class="reviews__top-btns">
                        <div class="reviews-button-prev">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6.75 15.75L3 12m0 0l3.75-3.75M3 12h18" />
                            </svg>
                        </div>
                        <div class="reviews-button-next">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M17.25 8.25L21 12m0 0l-3.75 3.75M21 12H3" />
                            </svg>
                        </div>
                    </div>
                </div>
                <div class="reviews__main">
                    <div class="swiper swiper-reviews">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="swiper-reviews-item">
                                    <div>
                                        <span>Иванов Сергей</span>
                                        <div class="swiper-reviews-item__text">
                                            <p>Компания «Строй-Деталь.рф» основана в 2015 году. Мы строим красивые и энергоэффективные дома с продуманными планировками.</p>
                                            <p>Компания «Строй-Деталь.рф» основана в 2015 году. Мы строим красивые и энергоэффективные дома с продуманными планировками.</p>
                                        </div>
                                        <span class="swiper-reviews-item__proj">
                        Проект: одноэтажный жилой дом Тип-1А
                      </span>
                                    </div>
                                    <img src="assets/images/otzv.png" alt="otzv">
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-reviews-item">
                                    <div>
                                        <span>Иванов Сергей</span>
                                        <div class="swiper-reviews-item__text">
                                            <p>Компания «Строй-Деталь.рф» основана в 2015 году. Мы строим красивые и энергоэффективные дома с продуманными планировками.</p>
                                            <p>Компания «Строй-Деталь.рф» основана в 2015 году. Мы строим красивые и энергоэффективные дома с продуманными планировками.</p>
                                        </div>
                                        <span class="swiper-reviews-item__proj">
                        Проект: одноэтажный жилой дом Тип-1А
                      </span>
                                    </div>
                                    <img src="assets/images/otzv.png" alt="otzv">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="qna">
            <div class="container">
                <div class="qna__main">
                    <div class="qna__main--left">
                        <div class="qna__main--left-text">
                            <h4>
                                Частые вопросы
                            </h4>
                            <p>Если здесь нет ответа на ваш вопрос и вам нужна консультация — смело обращайтесь, мы поможем!</p>
                        </div>
                        <div>
                            <button class="qna__main--left-btn form-modal-2">задать вопрос</button>
                        </div>
                    </div>
                    <div class="qna__main--qna">
                        <div x-data="{ isOpen:false }">
                            <button class="qna__main--qna-btn" @click="isOpen = !isOpen" :style="(isOpen) ? 'border-bottom: 0;' : ''">
                                <p>Какие сроки строительства дома?</p>
                                <svg :style="(isOpen) ? 'transform: rotate(45deg)' : ''" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="plus">
                                        <path id="Vector" d="M12 6.5V12.5M12 12.5V18.5M12 12.5H18M12 12.5H6" stroke="#2E3F65" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </button>
                            <div class="qna__main--qna-content" x-ref="container1" x-bind:style="isOpen ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <p>
                                    Выбор вида фундамента для частного дома обусловлен многими факторами: свойствами почвы на строительном участке, размерами строения, используемыми материалами, уровнем грунтовых вод и т.д.
                                </p>
                                <p>
                                    Многолетний опыт и профессионализм наших бригад позволяет реализовать любой из возможных видов фундамента. Мы проведём инженерно-геологические изыскания, после чего определим наиболее безопасный вид фундамента для вашего дома.
                                </p>
                            </div>
                        </div>
                        <div x-data="{ isOpen:false }">
                            <button class="qna__main--qna-btn" @click="isOpen = !isOpen" :style="(isOpen) ? 'border-bottom: 0;' : ''">
                                <p>Какие виды фундамента и технологии постройки вы используете?</p>
                                <svg :style="(isOpen) ? 'transform: rotate(45deg)' : ''" width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <g id="plus">
                                        <path id="Vector" d="M12 6.5V12.5M12 12.5V18.5M12 12.5H18M12 12.5H6" stroke="#2E3F65" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    </g>
                                </svg>
                            </button>
                            <div class="qna__main--qna-content" x-ref="container1" x-bind:style="isOpen ? 'max-height: ' + $refs.container1.scrollHeight + 'px' : ''">
                                <p>
                                    Выбор вида фундамента для частного дома обусловлен многими факторами: свойствами почвы на строительном участке, размерами строения, используемыми материалами, уровнем грунтовых вод и т.д.
                                </p>
                                <p>
                                    Многолетний опыт и профессионализм наших бригад позволяет реализовать любой из возможных видов фундамента. Мы проведём инженерно-геологические изыскания, после чего определим наиболее безопасный вид фундамента для вашего дома.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="contacts" id="contacts">
            <div class="contacts__items">
                <div class="contacts__items--left">
                    <div class="contacts__items--left-info">
                        <span class="contacts__items--left-info_title">Контакты</span>
                        <div class="contacts__items--left-info_pe">
                            <a href="tel:+79203849184">+7 (920) 384-91-84</a>
                            <a href="mailto:stroy-detal@yandex.ru">stroy-detal@yandex.ru</a>
                        </div>
                        <div class="contacts__items--left-info_socials">
                            <a href="#">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="white"/>
                                    <path d="M24 14C29.523 14 34 18.477 34 24C34 29.523 29.523 34 24 34C22.2328 34.0029 20.4967 33.5352 18.97 32.645L14.004 34L15.356 29.032C14.4651 27.5049 13.9971 25.768 14 24C14 18.477 18.477 14 24 14ZM20.592 19.3L20.392 19.308C20.2625 19.3159 20.136 19.3499 20.02 19.408C19.9115 19.4694 19.8125 19.5462 19.726 19.636C19.606 19.749 19.538 19.847 19.465 19.942C19.0951 20.4229 18.896 21.0133 18.899 21.62C18.901 22.11 19.029 22.587 19.229 23.033C19.638 23.935 20.311 24.89 21.199 25.775C21.413 25.988 21.623 26.202 21.849 26.401C22.9524 27.3725 24.2673 28.073 25.689 28.447L26.257 28.534C26.442 28.544 26.627 28.53 26.813 28.521C27.1043 28.506 27.3886 28.4271 27.646 28.29C27.777 28.2225 27.9048 28.1491 28.029 28.07C28.029 28.07 28.072 28.042 28.154 27.98C28.289 27.88 28.372 27.809 28.484 27.692C28.567 27.606 28.639 27.505 28.694 27.39C28.772 27.227 28.85 26.916 28.882 26.657C28.906 26.459 28.899 26.351 28.896 26.284C28.892 26.177 28.803 26.066 28.706 26.019L28.124 25.758C28.124 25.758 27.254 25.379 26.722 25.137C26.6663 25.1127 26.6067 25.0988 26.546 25.096C26.4776 25.089 26.4085 25.0967 26.3433 25.1186C26.2781 25.1405 26.2183 25.1761 26.168 25.223C26.163 25.221 26.096 25.278 25.373 26.154C25.3315 26.2098 25.2744 26.2519 25.2088 26.2751C25.1433 26.2982 25.0723 26.3013 25.005 26.284C24.9399 26.2665 24.876 26.2445 24.814 26.218C24.69 26.166 24.647 26.146 24.562 26.11C23.9881 25.8595 23.4567 25.5211 22.987 25.107C22.861 24.997 22.744 24.877 22.624 24.761C22.2306 24.3842 21.8877 23.958 21.604 23.493L21.545 23.398C21.5026 23.3342 21.4684 23.2653 21.443 23.193C21.405 23.046 21.504 22.928 21.504 22.928C21.504 22.928 21.747 22.662 21.86 22.518C21.97 22.378 22.063 22.242 22.123 22.145C22.241 21.955 22.278 21.76 22.216 21.609C21.936 20.925 21.646 20.244 21.348 19.568C21.289 19.434 21.114 19.338 20.955 19.319C20.901 19.313 20.847 19.307 20.793 19.303C20.6587 19.2963 20.5241 19.2977 20.39 19.307L20.591 19.299L20.592 19.3Z" fill="#2E3F65"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="white"/>
                                    <g clip-path="url(#clip0_268_2888)">
                                        <path d="M31.5387 16.597L15.5916 22.7784C14.9498 23.0662 14.7328 23.6427 15.4365 23.9556L19.5276 25.2624L29.4195 19.1175C29.9596 18.7317 30.5125 18.8346 30.0367 19.2589L21.5409 26.991L21.2741 30.2632C21.5212 30.7684 21.9738 30.7708 22.2626 30.5197L24.613 28.2841L28.6386 31.3141C29.5736 31.8705 30.0823 31.5115 30.2835 30.4917L32.9239 17.9244C33.198 16.6691 32.7305 16.1161 31.5387 16.597Z" fill="#2E3F65"/>
                                    </g>
                                    <defs>
                                        <clipPath id="clip0_268_2888">
                                            <rect width="18" height="18" fill="white" transform="translate(15 15)"/>
                                        </clipPath>
                                    </defs>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="white"/>
                                    <path d="M28.5 14.25H19.5C18.1081 14.2515 16.7736 14.8051 15.7893 15.7893C14.8051 16.7736 14.2515 18.1081 14.25 19.5V28.5C14.2515 29.8919 14.8051 31.2264 15.7893 32.2107C16.7736 33.1949 18.1081 33.7485 19.5 33.75H28.5C29.8919 33.7485 31.2264 33.1949 32.2107 32.2107C33.1949 31.2264 33.7485 29.8919 33.75 28.5V19.5C33.7485 18.1081 33.1949 16.7736 32.2107 15.7893C31.2264 14.8051 29.8919 14.2515 28.5 14.25ZM24 28.5C23.11 28.5 22.24 28.2361 21.4999 27.7416C20.7599 27.2471 20.1831 26.5443 19.8425 25.7221C19.5019 24.8998 19.4128 23.995 19.5865 23.1221C19.7601 22.2492 20.1887 21.4474 20.818 20.818C21.4474 20.1887 22.2492 19.7601 23.1221 19.5865C23.995 19.4128 24.8998 19.5019 25.7221 19.8425C26.5443 20.1831 27.2471 20.7599 27.7416 21.4999C28.2361 22.24 28.5 23.11 28.5 24C28.4988 25.1931 28.0243 26.337 27.1806 27.1806C26.337 28.0243 25.1931 28.4988 24 28.5ZM29.625 19.5C29.4025 19.5 29.185 19.434 29 19.3104C28.815 19.1868 28.6708 19.0111 28.5856 18.8055C28.5005 18.6 28.4782 18.3738 28.5216 18.1555C28.565 17.9373 28.6722 17.7368 28.8295 17.5795C28.9868 17.4222 29.1873 17.315 29.4055 17.2716C29.6238 17.2282 29.85 17.2505 30.0555 17.3356C30.2611 17.4208 30.4368 17.565 30.5604 17.75C30.684 17.935 30.75 18.1525 30.75 18.375C30.75 18.6734 30.6315 18.9595 30.4205 19.1705C30.2095 19.3815 29.9234 19.5 29.625 19.5ZM27 24C27 24.5933 26.8241 25.1734 26.4944 25.6667C26.1648 26.1601 25.6962 26.5446 25.1481 26.7716C24.5999 26.9987 23.9967 27.0581 23.4147 26.9424C22.8328 26.8266 22.2982 26.5409 21.8787 26.1213C21.4591 25.7018 21.1734 25.1672 21.0576 24.5853C20.9419 24.0033 21.0013 23.4001 21.2284 22.8519C21.4554 22.3038 21.8399 21.8352 22.3333 21.5056C22.8266 21.1759 23.4067 21 24 21C24.7956 21 25.5587 21.3161 26.1213 21.8787C26.6839 22.4413 27 23.2044 27 24Z" fill="#2E3F65"/>
                                </svg>
                            </a>
                            <a href="#">
                                <svg width="48" height="48" viewBox="0 0 48 48" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="24" cy="24" r="24" fill="white"/>
                                    <path d="M32 16H16C14.9 16 14.01 16.9 14.01 18L14 30C14 31.1 14.9 32 16 32H32C33.1 32 34 31.1 34 30V18C34 16.9 33.1 16 32 16ZM31.6 20.25L24.53 24.67C24.21 24.87 23.79 24.87 23.47 24.67L16.4 20.25C16.2997 20.1937 16.2119 20.1177 16.1419 20.0265C16.0719 19.9352 16.0211 19.8308 15.9926 19.7194C15.9641 19.608 15.9585 19.4919 15.9762 19.3783C15.9938 19.2647 16.0343 19.1558 16.0953 19.0583C16.1562 18.9608 16.2363 18.8767 16.3307 18.811C16.4251 18.7453 16.5319 18.6995 16.6445 18.6763C16.7571 18.6531 16.8733 18.653 16.986 18.6759C17.0986 18.6989 17.2055 18.7445 17.3 18.81L24 23L30.7 18.81C30.7945 18.7445 30.9014 18.6989 31.014 18.6759C31.1267 18.653 31.2429 18.6531 31.3555 18.6763C31.4681 18.6995 31.5749 18.7453 31.6693 18.811C31.7637 18.8767 31.8438 18.9608 31.9047 19.0583C31.9657 19.1558 32.0062 19.2647 32.0238 19.3783C32.0415 19.4919 32.0359 19.608 32.0074 19.7194C31.9789 19.8308 31.9281 19.9352 31.8581 20.0265C31.7881 20.1177 31.7003 20.1937 31.6 20.25Z" fill="#2E3F65"/>
                                </svg>
                            </a>
                        </div>
                    </div>
                    <div class="contacts__items--left-hours">
                        <span>Мы находимся в г.Кострома, встречи в офисе только по предварительной записи</span>
                        <span>Работаем с 9:00-18:00 без выходных</span>
                    </div>
                </div>
                <div class="contacts__items--right">
                    <div class="contacts__items--right-form">
                        <div class="contacts__items--right-form_title">
                            <h4>Остались вопросы?</h4>
                            <span>Напишите нам и мы перезвоним в течение 15 минут</span>
                        </div>
                        <div class="contacts__items--right-form_form">
                            <form action="">
                                <input type="text" placeholder="Ваше имя" required>
                                <input type="tel" name="phone" id="phone" placeholder="Ваш номер телефона">
                                <textarea name="" id="" cols="30" rows="5" placeholder="Ваш запрос или пожелания"></textarea>
                                <div>
                                    <label class="cyberpunk-checkbox-label">
                                        <input class="cyberpunk-checkbox" type="checkbox" checked>
                                        Нажимая на кнопку, вы соглашаетесь на обработку персональных данных
                                    </label>
                                </div>
                                <div>
                                    <button class="form-submit-btn">
                                        задать вопрос
                                    </button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>



<?php
get_footer();