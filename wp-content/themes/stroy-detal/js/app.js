

document.addEventListener('DOMContentLoaded', () => {

	window.Alpine = Alpine;
	Alpine.start();

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

	// Класс для проверки чекбокса при отправке
	$('.checkbox').change(function(){
		$(this).toggleClass('checked');
	});

	// Отправка данных на сервер
	$('.callback-form').trigger('reset');
	$(function() {
		$('.callback-form').on('submit', function(e) {
			e.preventDefault();

			// Если не приняли соглашение
			if ($(".checkbox", $(this)).hasClass('checked')) {
				$('.checkbox-error', $(this)).removeClass('checkbox-error_show');
			} else {
				$('.checkbox-error', $(this)).addClass('checkbox-error_show');
				return;
			}

			$.ajax({
				url: '/wp-content/themes/stroy-detal/send.php',
				type: 'POST',
				contentType: false,
				processData: false,
				data: new FormData(this),
				success: function(msg) {
					console.log(msg);
					if (msg == 'ok') {
						MicroModal.show('modal-thx');
						$('#form').trigger('reset'); // очистка формы
					} else {
						alert('Ошибка при отправке сообщения!');
					}
				}
			});
		});
	});
})
