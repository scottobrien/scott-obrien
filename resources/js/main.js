$( document ).ready(function() {

/*  Tablet/Mobile Nav  */
		$(".mobile-nav ul.menu").hide();
			$(".burger-menu").click(function() {
			$(".mobile-nav ul.menu").slideToggle(250);
		});
			

/*  Modal Box  */
		$(".group1").colorbox({rel:'group1'});


/*  Bar Graph, Skills  */
		$(".bar.html").animate( { width:"85%"}, { duration:1000 } );
		$(".bar.css").animate( { width:"85%"}, { duration:1000 } );
		$(".bar.jquery").animate( { width:"70%" }, {  duration:1000 } );
		$(".bar.wp").animate( { width:"60%" }, { duration:1000 } );
		$(".bar.ps").animate( { width:"95%" }, { duration:1000 } );
		$(".bar strong") .animate ( {opacity:"1.0"}, {duration:2000});


/*  Work Filter  */
		$(".button-all").click(function(){
			$(".button-all") .addClass("select-active");
			$(".col-third") .removeClass("dull");
			$(".button-front-end") .removeClass("select-active");
			$(".button-ui-design") .removeClass("select-active");
		});


		$(".button-ui-design").click(function(){
			$(".button-ui-design") .addClass("select-active");
			$(".category-front-end") .addClass("dull");
			$(".button-front-end") .removeClass("select-active");
			$(".button-all") .removeClass("select-active");
			$(".category-ui") .removeClass("dull");
		});

		$(".button-front-end").click(function(){
			$(".category-ui") .addClass("dull");
			$(".button-front-end") .addClass("select-active");
			$(".button-ui-design") .removeClass("select-active");
			$(".button-all") .removeClass("select-active");
			$(".category-front-end") .removeClass("dull");
		});


/*  Slider  */

		$('.bxslider').bxSlider();


/*  Scroll Up  */
		$(window).scroll(function(){
            if ($(this).scrollTop() > 100) {
                $('.scrollup').fadeIn();
            } else {
                $('.scrollup').fadeOut();
            }
        });
 
        $('.scrollup').click(function(){
            $("html, body").animate({ scrollTop: 0 }, 600);
            return false;
        });

});


  
