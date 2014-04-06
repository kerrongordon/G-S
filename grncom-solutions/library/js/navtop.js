jQuery(document).ready(function($) {


  $('.team-member').addClass('col-xs-12 col-sm-4 col-lg-4');
  $('.twitter-timeline').addClass('k-full-width');
	

    $(".dropdown").click(function () {
        $(this).toggleClass('open');
    });

    /*
    $( ".top-s-box" ).toggle(function() {
        $(".top-s-box").animate( {"width":"200px"}, 400);
    }, function () {
        $(".top-s-box").animate( {"width":"65px"}, 400);
    });
    */

    $(window).scroll(function(){
         if ($(window).scrollTop() > 60){
            $(".navbar-default").addClass("navbar-default-scrll");
         } else if ($(window).scrollTop() < 60) {
            $(".navbar-default").removeClass("navbar-default-scrll");
         }
    });

      $("a[href='#top']").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
          return false;
        });
		
		
		
	var current_href = $(location).attr('href');
	var current_title = $(document).attr('title');
	
	
	
	if (current_title === "Providing quality and reliable computing solutions"){
		$('.container').removeClass('topoff');
		$('.navbar-default .navbar-nav>li>a').css('color','#fff');
		$('.navbar-default .navbar-brand').css('color','#fff');
		$(window).scroll(function(){
         	if ($(window).scrollTop() > 60){
            	$('.navbar-default .navbar-nav>li>a').css('color','#777');
				$('.navbar-default .navbar-brand').css('color','#777');
         	} else if ($(window).scrollTop() < 60) {
            	$('.navbar-default .navbar-nav>li>a').css('color','#fff');
				$('.navbar-default .navbar-brand').css('color','#fff');
         	}
    	});
	}
      

      $('#controls').toggle(function () {
          $(this).css( {"left":"0"} );
      }, function () {
          $(this).css( {"left":"-30px"} );
      });


      var backtoTop = $('.top');
      backtoTop.hide();

      $(window).scroll(function () {
            if ($(this).scrollTop() < 400) {
                backtoTop.fadeOut();
            } else {
                backtoTop.fadeIn();
            }
        });

      $("a[href='#top']").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });

      
      $('.post_content a img').addClass("img-responsive");
      $('#content img').attr('rel', 'lightbox');

    /*
    $(window).scroll(function() {
        var x = $(this).scrollTop();
          $('.homebg1').css('background-position', '50% ' + parseInt(-x / 50) + 'px');
    });
    

    $(window).scroll(function() {
        var x = $(this).scrollTop();
          $('.homebg2').css('background-position', '50% ' + parseInt(-x / 50) + 'px');
    });
   */
  
	

});



