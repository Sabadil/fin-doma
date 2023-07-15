$(function() {

	$('your-slider').slick({
		dots: false,
		infinite: true,
		speed: 300,
		slidesToShow: 4,
		centerMode: false,
    	prevArrow: '<button type="button" class="slick-prev"><img src="/img/icons/arrow-left.svg"></button>',
    	nextArrow: '<button type="button" class="slick-next"><img src="/img/icons/arrow-right.svg"></button>',
		responsive: [
		  {
		    breakpoint: 1200,
		    settings: {
		      slidesToShow: 3
		    }
		  },
		  {
		    breakpoint: 992,
		    settings: {
		      slidesToShow: 2
		    }
		  },
		  {
		    breakpoint: 768,
		    settings: {
		      slidesToShow: 1
		    }
		  }
		]
	});

	// $('.form2').submit(function(e){
	// 	e.preventDefault(); 
	// 	if ($(".checkbox", $(this)).hasClass('checked')) { 
	// 		$('label', $(this)).css('color', '#000');
	// 		$('label a', $(this)).css('color', '#000');
	// 	} else {
	// 		$('label', $(this)).css('color', 'red');
	// 		$('label a', $(this)).css('color', 'red');
	// 		return;
	// 	}
	//   var form_data = {
	//   	'type':$(".type", $(this)).val(),
	//   	'name':$(".name", $(this)).val(),
	//   	'phone':$(".phone", $(this)).val(),
	//   	'email':$(".email", $(this)).val(),
	//   	'page':$('h1').text()
	//   };
	//   $.ajax({
	//     type: "POST",
	//     url: "/wp-content/themes/main-theme/mail.php",
	//     data: form_data,
	//     success: function(){
	//       $('.modal-bg').fadeIn();
	//       $('.modal').fadeOut();
	//       $('.modal.success').fadeIn();
	//     },
	//     error: function() {
	//       alert("Произошла какая то ошибка!")
	//     }
	//   }); 
	// });



var capcha_status = false;
if( $('body').hasClass('page-template-page-callback') ) {
	window.addEventListener("load",generCap);
	function getRandomInt(min, max){return Math.floor(Math.random() * (max - min + 1)) + min;}
	var testCapcha, valCapcha, capchaArr = "QWERTYUIOPLKJHGFDSAZXCVBNM1234567890";
	function generCap(){
	    valCapcha="";
	    testCapcha = getRandomInt(3,3);
	    if(!capchaArr instanceof Array) capchaArr = capchaArr.split("");
	    for(var i=0; i<=testCapcha; i++) valCapcha += capchaArr[getRandomInt(0, capchaArr.length-1)];
	    var canvas = document.getElementById("cap");
	    canvasCapcha = canvas.getContext("2d");
	    canvasCapcha.clearRect(0, 0, canvas.width, canvas.height);
	    canvasCapcha.fillStyle = "#4874b3";
	    canvasCapcha.strokeStyle = "#4874b3";
	    canvasCapcha.shadowColor = "#4874b3";
	    canvasCapcha.font = "italic 60px Microsoft Sans Serif";
	    canvasCapcha.fillText(valCapcha, 4, 90);
	}
	function cap(){
	    valCapcha = "^"+valCapcha+"$";
	    var r = RegExp(valCapcha,"i"), str = document.getElementById("myText").value;
	    if(r.test(str)) {
	    	capcha_status = true;
	    	document.getElementById("info").innerHTML = "";
	    }
	    else{
	    	capcha_status = false;
	        document.getElementById("info").innerHTML = " Проверка не пройдена, введите код еще раз";
	        generCap();
	    }
	}
}

// Отправка данных на сервер
$('#form').trigger('reset');
$(function() {
  'use strict';
  $('#form').on('submit', function(e) {
    e.preventDefault();
    // Если тема не выбрана
	if (!select_status) {
		$('#info2').addClass('show');
		return;
	} else {
		$('#info2').removeClass('show');
	}
	// Если не приняли соглашение
	if ($(".checkbox", $(this)).hasClass('checked')) { 
		$('#info3').removeClass('show');
	} else {
		$('#info3').addClass('show');
		return;
	}
	// Если не ввели капчу
	cap();
	if (!capcha_status) {
		return;
	}
    $.ajax({
      url: '/wp-content/themes/main-theme/send.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function(msg) {
        console.log(msg);
        if (msg == 'ok') {
	      $('.modal-bg').fadeIn();
	      $('.modal').fadeOut();
	      $('.modal.success').fadeIn();
          $('#form').trigger('reset'); // очистка формы
        } else {
          alert('Ошибка при отправке сообщения!');
        }
      }
    });
  });
});


// Отправка данных на сервер
$('#form2').trigger('reset');
$(function() {
  'use strict';
  $('#form2').on('submit', function(e) {
    e.preventDefault();
	// Если не приняли соглашение
	if ($(".checkbox", $(this)).hasClass('checked')) { 
		$('#info-modal').removeClass('show');
	} else {
		$('#info-modal').addClass('show');
		return;
	}
    $.ajax({
      url: '/wp-content/themes/main-theme/send-modal.php',
      type: 'POST',
      contentType: false,
      processData: false,
      data: new FormData(this),
      success: function(msg) {
        console.log(msg);
        if (msg == 'ok') {
	      $('.modal-bg').fadeIn();
	      $('.modal').fadeOut();
	      $('.modal.success').fadeIn();
          $('#form').trigger('reset'); // очистка формы
        } else {
          alert('Ошибка при отправке сообщения!');
        }
      }
    });
  });
});

// $('#form2 .mailto-modal').val(mailto);



	$('.checkbox').change(function(){
		$(this).toggleClass('checked');
	});
	$(".phone").mask("+7 (999) 999-9999");
	$('.menu-toggle').click(function(){
		$('.nav-block').slideToggle();
	});
	$('.callback').click(function() {
		$('.modal-bg').fadeIn();
		$('.callback-form').fadeIn();
	});
	$('.modal-bg').click(function() {
		$('.modal-bg').fadeOut();
		$('.modal').fadeOut();
	});
	$('.modal .close').click(function() {
		$('.modal-bg').fadeOut();
		$('.modal').fadeOut();
	});
	$('.menu-toggle').click(function(){
		$('main nav').slideToggle();
	});

    $('.up').click(function(e) {
        e.preventDefault();
        $('body,html').animate({scrollTop: 0}, 1000);
    });

    // $('.smoothScroll').click(function(event) {
    //     event.preventDefault();
    //     var href=$(this).attr('href');
    //     var target=$(href);
    //     var top=target.offset().top;
    //     $('html,body').animate({
    //       scrollTop: top
    //     }, 1000);
    // });

	// check_offset();
	// $(window).scroll(function() {
	// 	check_offset();
	// });
	// function check_offset() {
	// 	var pos = 60;
	// 	if($(window).width() <= 575) {
	// 		pos = 210;
	// 	}
	// 	if($(this).scrollTop() >= pos) {
	// 		$('.nav-bg').addClass('stickytop');
	// 	}
	// 	else{
	// 		$('.nav-bg').removeClass('stickytop');
	// 	}
	// }

});