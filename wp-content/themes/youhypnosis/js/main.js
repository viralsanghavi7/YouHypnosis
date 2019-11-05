/* Banner Slider */



    var swiper1 = new Swiper('.swiper1', {

      spaceBetween: 0,

	  loop: true,

	  centeredSlides: true,

      autoplay: {

        delay: 5500,

        disableOnInteraction: false,

      },

      pagination: {

        el: '.swiper-pagination1',

        clickable: true,

      },

	   navigation: {

        nextEl: '.swiper-button-next1',

        prevEl: '.swiper-button-prev1',

      },

    });

	

	



	var swiper2 = new Swiper('.swiper2', {

      spaceBetween: 0,

	  loop: true,

	  centeredSlides: true,

      autoplay: {

        delay: 2500,

        disableOnInteraction: false,

      },

      // init: false,

	  pagination: {

        el: '.swiper-pagination2',

        clickable: true,

      },

    });

	

	

	

	var swiper3 = new Swiper('.swiper3', {

      slidesPerView: 4,

      spaceBetween: 0,

	  autoplay: {

        delay: 2500,

        disableOnInteraction: false,

      },

	  loop: true,

      // init: false,

      navigation: {

        nextEl: '.swiper-button-next3',

        prevEl: '.swiper-button-prev3',

      },

      breakpoints: {

        1024: {

          slidesPerView: 4,

          spaceBetween: 40,

        },

        768: {

          slidesPerView: 3,

          spaceBetween: 30,

        },

        640: {

          slidesPerView: 1,

          spaceBetween: 20,

        },

        320: {

          slidesPerView: 1,

          spaceBetween: 10,

        }

      }

    });

	



	

// Menu toggle


 $(document).ready(function(e) {
  /* Main Menu Open */
  $(".mobileMenuToggle").click(function(){
    if($(this).hasClass("active")){
      $(this).removeClass("active");
      $("#mainMenu").removeClass("active"); 
    }else{
      $(this).addClass("active");
      $("#mainMenu").addClass("active");
    }
    });
	
 $("#mainHeader #mainMenu > ul > li.menu-item").click(function(){
	if($(this).hasClass("active")){
      $(this).addClass("active");
      $("#mainMenu").addClass("active"); 
	  $(".mobileMenuToggle").addClass("active");
    }else{
      $(this).removeClass("active");
      $("#mainMenu").removeClass("active");
	  $(".mobileMenuToggle").removeClass("active");
	  
    }
	});	
	
	 $("#mainHeader #mainMenu > ul > li.submainMenu > ul.submenu li.menu-item").click(function(){
	if($(this).hasClass("active")){
      $(this).addClass("active");
      $("#mainMenu").addClass("active"); 
	   $(".mobileMenuToggle").addClass("active");
    }else{
      $(this).removeClass("active");
      $("#mainMenu").removeClass("active");
	   $(".mobileMenuToggle").removeClass("active");
    }
		});	

  /* Header Submenu dropdown */

  $("#mainHeader #mainMenu > ul > li.submainMenu").click(function(){
    if($(this).hasClass("active")){
    $("#mainHeader #mainMenu > ul > li").removeClass("active");   
    }else{
    $("#mainHeader #mainMenu > ul > li").removeClass("active");
    $(this).addClass("active"); 
    }
  });  
});



var $w = $(window);
var headerStickyTop = $("#header").height();
$(window).scroll(function(){
	var scrollTop = $w.scrollTop();
	if (scrollTop > headerStickyTop) {
		$(".bot-header").addClass("headerFixed");
	}
	else {
		$(".bot-header").removeClass("headerFixed");
	}
})

