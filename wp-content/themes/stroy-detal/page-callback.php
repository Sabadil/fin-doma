
<?php
/**
	Template name: Интернет-приёмная
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

<main class="callback-main">
	<div class="section text">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-6 offset-left-xl-0 col-xl-8"><?php the_field('текст_секции_№1'); ?></div>
			</div>
		</div>
	</div>

	<div class="title-section">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-6 size-25 bold color-white offset-left-xl-0 col-xl-8"><?php the_field('заголовок_секции_№2'); ?></div>
			</div>
		</div>
	</div>

<form enctype="multipart/form-data" method="post" id="form">

	<section class="form-part1">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-2 offset-left-xl-0 col-xl-4 col-sm-8">
					<label class="size-25" for="surname">Фамилия</label>
					<input placeholder="Обязательное поле" name="surname" type="text" required id="surname">
				</div>
				<div class="col-fhd-2 col-xl-4 col-sm-8">					
					<label class="size-25" for="name">Имя</label>
					<input placeholder="Обязательное поле" name="name" type="text" required id="name">
				</div>
				<div class="col-fhd-2 col-xl-4 col-sm-8">	
					<label class="size-25" for="patronymic">Отчество</label>
					<input placeholder="При наличии" name="patronymic" type="text" id="patronymic">
				</div>
				<div class="offset-left-fhd-1 col-fhd-2 offset-left-xl-0 col-xl-4 col-sm-8">	
					<label class="size-25" for="phone">Контактный телефон</label>
					<input placeholder="Не обязательное поле(если оставили почту)" name="phone" type="text" id="phone" required="required" class="phone-mask">
				</div>
				<div class="col-fhd-2 col-xl-4 col-sm-8">	
					<label class="size-25" for="email">Эл. почта</label>
					<input placeholder="Не обязательное поле(если оставили телефон)" name="email" type="text" id="email" required="required">
				</div>
				<script>
					$(function(){
						function check_inputs() {
							var phone_val = $('#phone').val();
							var email_val = $('#email').val();
							if( (phone_val != '') ) {
								$('#email').removeAttr('required');
							}
							if( (email_val != '') ) {
								$('#phone').removeAttr('required');
							}
						}
						$('#phone').change(function(){check_inputs()});
						$('#email').change(function(){check_inputs()});
					});
				</script>
			</div>
		</div>
	</section>

	<div class="title-section">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-6 size-25 bold color-white offset-left-xl-0 col-xl-8"><?php the_field('заголовок_секции_№3'); ?></div>
			</div>
		</div>
	</div>

	<section class="form-part2">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-6 offset-left-xl-0 col-xl-8">
					<p><?php the_field('текст_секции_№3'); ?></p>
				</div>	
				<div class="offset-left-fhd-1 col-fhd-3 offset-left-xl-0 col-xl-4 col-md-6 col-sm-8">
					<label class="size-25" for="theme">Тема обращения</label>
					<input type="hidden" name="mailto" class="input-mailto">
					<div class="custom-select">
					  <select name="theme">
					  	<option value="Пожалуйста выберите тему обращения">Пожалуйста выберите тему обращения</option>
					  <?php foreach (get_field('темы_обращений') as $value) { ?>
					  	<option value="<?php echo $value['тема']; ?>" data-mailto="<?php echo $value['e-mail']; ?>"><?php echo $value['тема']; ?></option>
					  <?php } ?>
					  </select>
					</div>

					<script>
					var select_status = false;
					var x, i, j, selElmnt, a, b, c;
					/*look for any elements with the class "custom-select":*/
					x = document.getElementsByClassName("custom-select");
					for (i = 0; i < x.length; i++) {
					  selElmnt = x[i].getElementsByTagName("select")[0];
					  /*for each element, create a new DIV that will act as the selected item:*/
					  a = document.createElement("DIV");
					  a.setAttribute("class", "select-selected");
					  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
					  x[i].appendChild(a);
					  /*for each element, create a new DIV that will contain the option list:*/
					  b = document.createElement("DIV");
					  b.setAttribute("class", "select-items select-hide");
					  for (j = 1; j < selElmnt.length; j++) {
					    /*for each option in the original select element,
					    create a new DIV that will act as an option item:*/
					    c = document.createElement("DIV");
					    c.innerHTML = selElmnt.options[j].innerHTML;
					    c.addEventListener("click", function(e) {
					        /*when an item is clicked, update the original select box,
					        and the selected item:*/
					        var y, i, k, s, h;
					        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
					        h = this.parentNode.previousSibling;
					        for (i = 0; i < s.length; i++) {
					          if (s.options[i].innerHTML == this.innerHTML) {
					            s.selectedIndex = i;
					            h.innerHTML = this.innerHTML;
					            y = this.parentNode.getElementsByClassName("same-as-selected");
					            for (k = 0; k < y.length; k++) {
					              y[k].removeAttribute("class");
					            }
					            this.setAttribute("class", "same-as-selected");
					            break;
					          }
					        }
					        h.click();
					    });
					    b.appendChild(c);
					  }
					  x[i].appendChild(b);
					  a.addEventListener("click", function(e) {
					      /*when the select box is clicked, close any other select boxes,
					      and open/close the current select box:*/
					      e.stopPropagation();
					      closeAllSelect(this);
					      this.nextSibling.classList.toggle("select-hide");
					      this.classList.toggle("select-arrow-active");
					      select_mailto();
					      if($('select').val() != 'Пожалуйста выберите тему обращения') {
					      	select_status = true;
					      }
					      
					    });
					}
					function closeAllSelect(elmnt) {
					  /*a function that will close all select boxes in the document,
					  except the current select box:*/
					  var x, y, i, arrNo = [];
					  x = document.getElementsByClassName("select-items");
					  y = document.getElementsByClassName("select-selected");
					  for (i = 0; i < y.length; i++) {
					    if (elmnt == y[i]) {
					      arrNo.push(i)
					    } else {
					      y[i].classList.remove("select-arrow-active");
					    }
					  }
					  for (i = 0; i < x.length; i++) {
					    if (arrNo.indexOf(i)) {
					      x[i].classList.add("select-hide");
					    }
					  }
					}
					/*if the user clicks anywhere outside the select box,
					then close all select boxes:*/
					document.addEventListener("click", closeAllSelect);


					select_mailto();
					function select_mailto() {
						$('select option').each(function(){
							var this_option = $(this);
							var selected_val = $('select').val();
							var option_val = this_option.val();
							if (selected_val == option_val) {
								$('.input-mailto').val(this_option.attr('data-mailto'));
							} 
						});						
					}
					</script>
				</div>		
				<div class="offset-left-fhd-1 col-fhd-6 offset-left-xl-0 col-xl-8">
					<label class="size-25 textarea-label" for="email">Суть вопроса</label>
					<textarea placeholder="До 1000 символов" name="text1" id="text1" maxlength="1000"></textarea>				
				</div>	
				<div class="offset-left-fhd-1 col-fhd-6 offset-left-xl-0 col-xl-8">
					<label class="size-25 textarea-label" for="email">Содержание обращения</label>
					<textarea placeholder="До 10000 символов" name="text2" id="text2" maxlength="10000"></textarea>				
				</div>
				<div class="offset-left-fhd-1 col-fhd-6 offset-left-xl-0 col-xl-8">
		 			<input type="file" name="myfile[]" multiple id="myfile" class="inputfile" data-multiple-caption="{count} файлов выбрано">
					<label class="btn green size-25" for="myfile"><span>Добавить документ</span></label>
				</div>
				<script>
				'use strict';

				;( function ( document, window, index )
				{
					var inputs = document.querySelectorAll( '.inputfile' );
					Array.prototype.forEach.call( inputs, function( input )
					{
						var label	 = input.nextElementSibling,
							labelVal = label.innerHTML;

						input.addEventListener( 'change', function( e )
						{
							var fileName = '';
							if( this.files && this.files.length > 1 )
								fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
							else
								fileName = e.target.value.split( '\\' ).pop();

							if( fileName )
								label.querySelector( 'span' ).innerHTML = fileName;
							else
								label.innerHTML = labelVal;
						});

						// Firefox bug fix
						input.addEventListener( 'focus', function(){ input.classList.add( 'has-focus' ); });
						input.addEventListener( 'blur', function(){ input.classList.remove( 'has-focus' ); });
					});
				}( document, window, 0 ));
				</script>
			</div>
		</div>
	</section>

	<div class="title-section">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-6 size-25 bold color-white offset-left-xl-0 col-xl-8"><?php the_field('заголовок_секции_№4'); ?></div>
			</div>
		</div>
	</div>

	<section class="form-part3">
		<div class="container">
			<div class="row">
				<div class="offset-left-fhd-1 col-fhd-6 offset-left-xl-0 col-xl-8">
					<div class="check">
						<div class="capcha">
					    	<input type="text" id="myText" placeholder="Проверочный код">
					    	<canvas id="cap"></canvas>
					    </div>
					    <input type="checkbox" id="checkbox3" name="checkbox" class="checkbox"><label for="checkbox3"><span>Я согласен на <a href="/files/personal_data.pdf" target="_blank">обработку персональных данных</a></span></label>
					    <span id="info" class="size-20"></span>
					    <span id="info2" class="size-20">Не выбрана тема обращения!</span>					    
					    <span id="info3" class="size-20">Дайте согласие на обработку персональных данных</span>					    
					</div>
				</div>
				<div class="offset-left-fhd-1 col-fhd-2  offset-left-xl-0 col-xl-3 col-sm-8">
					<input value="Отправить письмо" type="submit" class="btn green size-25">
				</div>
			</div>
		</div>
	</section>

</form>

</main>

<?php
get_footer();
