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
		*/
		
		
	var current_href = $(location).attr('href');
	var current_title = $(document).attr('title');
	

      $('#controls').toggle(function () {
          $(this).css( {"left":"0"} );
      }, function () {
          $(this).css( {"left":"-30px"} );
      });


      

      $("a[href='#top']").click(function() {
          $("html, body").animate({ scrollTop: 0 }, "slow");
        return false;
      });

      
      $('.post_content a img').addClass("img-responsive");
      $('#content img').attr('rel', 'lightbox');
      $('#content img').attr('rel', 'lightbox');


      $.browser.device = (/android|webos|iphone|ipad|ipod|blackberry|iemobile|opera mini/i.test(navigator.userAgent.toLowerCase()));
    /*
    if (!$.browser.device){
    $(window).scroll(function() {
        var x = $(this).scrollTop();
          $('.section-colored-full, .homebg2').css('background-position', '50% ' + parseInt(-x / 8) + 'px');
    });
    }
    */

    
    $("homebg1").fadeIn(); 
    
   
  //$('body').prepend($(".demoslider"));
    $('.top').hide();

    $(window).scroll(function() {
      if ($(this).scrollTop() < 700) {
        $('.top').fadeOut();
      } else {
        $('.top').fadeIn();
      }
    });
	

});



