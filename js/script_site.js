$(function(){
	// Скрываем элементы для анимации
	$('input[name="tell"]').mask("+7 (999) 999-9999");
	$("#tab2 h1, #tab2 .left_image, #tab4 .image_cont, #tab4 h2, #tab5 .image_cont, #tab5 h2, #tab6 h1, #tab7 h1, #tab9 h1, #tab10 h1, .left_dost_cont, .dost_rt, #tab11 h1, .bxslider, #tab13 h1, #tab12 h1")
	.css("visibility","hidden");
	
	// Отображаем элементы по событию "скролл"
	$(document).scroll(function() {
			 if ($("#tab2").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab2").find("h1").addClass("slideLeft");
      			 $("#tab2 .left_image").addClass("fadeIn");
    		  }
			 if ($("#tab3").position().top<= $(document).scrollTop() + $(window).height()) {
      			  $("#tab3").find("h1").addClass("slideLeft");
    		  }
			  if ($("#tab4").position().top + 200<= $(document).scrollTop() + $(window).height()) {
			  	$("#tab4 .image_cont").addClass("fadeIn");
			  	$("#tab4 h2").addClass("slideLeft");
    		  }
			  if ($("#tab5").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab5 .image_cont").addClass("fadeIn");
			  	$("#tab5 h2").addClass("slideRight");
    		  }
			  if ($("#tab6").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			$("#tab6 h1").addClass("slideRight");
    		  }
    		  if ($("#tab7").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab7 h1").addClass("fadeIn");
    		  }
    		  if ($("#tab8").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 
    		  }
    		  if ($("#tab9").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab9 h1").addClass("slideRight");
    		  }
    		  if ($("#tab10").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab10 h1").addClass("slideRight");
      			 $(".left_dost_cont, .dost_rt").addClass("expandOpen");
    		  }
    		  if ($("#tab11").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab11 h1").addClass("slideRight");
      			 $(".bxslider").addClass("expandOpen");
    		  }
    		  if ($("#tab12").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab12 h1").addClass("slideRight");
      			 $(".bxslider").addClass("expandOpen");
    		  }
    		  if ($("#tab13").position().top + 200<= $(document).scrollTop() + $(window).height()) {
      			 $("#tab13 h1").addClass("slideRight");
    		  }
		});
    $("").hover(function () {
		$(this).stop().toggleClass("pulse");
	});
	
	$('nav a[href^="#"]').bind('click.smoothscroll',function (e) {
		e.preventDefault();
		var target = this.hash,
		$target = $(target);
		$(".nav_fixed").find("a").removeClass("active");
		$(this).addClass("active");
		$('html, body').stop().animate({
			'scrollTop': $target.offset().top
		}, 900, 'swing', function () {
		});
	});
});