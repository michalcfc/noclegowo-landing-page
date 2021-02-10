$(window).scroll(function() {    

  var scroll = $(window).scrollTop();

  if (scroll >= 5) {
      $(".overlay-active").removeClass(".overlay-active").addClass("overlay");
  }
});

$(document).ready(function(){
  $( "#bolder_standard, #bolder_premium, #bolder_max, #bolder_reserv" ).click(function() {
    $( ".benefits" ).toggleClass( "font_bold" );
  });
});

$(document).ready(function(){
  $(".dimness, .dimness1, .dimness2, .dimness3, .dimness4, .dimness5, .dimness6, .dimess7").click(function() {
      $(".overlay-active").removeClass("overlay");
      $(".signin").removeClass("signin-off");
  });
});

//  Change background when user clicks anywhere
$(window).ready(function(){
  $("#overlayOff").click(function() {
    $(".overlay-active").removeClass(".overlay-active").addClass("overlay");
  });
});


$(document).ready(function(){
  $('.responsive').slick({
    dots: true,
    infinite: false,
    speed: 300,
    slidesToShow: 4,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});


$(document).ready(function(){
  $('.autoplay').slick({
    centerMode: true,
    dots: true,
    arrows: true,
    infinite: true,
    centerPadding: '160px',
    slidesToShow: 1,
    autoplay: true,
    autoplaySpeed: 2000,
    responsive: [
      {
        breakpoint: 1024,
        settings: {
          centerMode: true,
          arrows: true,
          focusOnSelect: true,
          slidesToShow: 3,
          slidesToScroll: 3,
          infinite: true,
          dots: true
        }
      },
      {
        breakpoint: 600,
        settings: {
          centerMode: true,
          focusOnSelect: true,
          slidesToShow: 2,
          slidesToScroll: 2
        }
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });
});


// slick_on_mobile( $slick_slider, settings_slider);

// // slick on mobile
// function slick_on_mobile(slider, settings){
//   $(window).on('load resize', function() {
//     if ($(window).width() >= 764) {
//       if (slider.hasClass('slick-initialized')) {
//         slider.slick('unslick');
//       }
//       return
//     }
//     if (!slider.hasClass('slick-initialized')) {
//       return slider.slick(settings);
//     }
//   });
// };

// Change logo to dark version after scroll down
$(window).scroll(function(){
    if($(this).scrollTop()>70) {
        $('#header img').attr('src','img/logo_white.webp');
    }
    else {
        $('#header img').attr('src','img/noclegowo.svg');
    }
})

// Change top navigation after scroll down
$(function() {
    var header = $(".fixed-top");

    $(window).scroll(function() {
        var scroll = $(window).scrollTop();
        if (scroll >= 2) {
            header.addClass("scrolled");
        } else {
            header.removeClass("scrolled");
        }
    });

});

$(window).scroll(function() {    

  var scroll = $(window).scrollTop();

  if (scroll >= 480) {
      $(".btn-mobile").removeClass("hideButton");
  }
  if (scroll <= 480) {
    $(".btn-mobile").addClass("hideButton");
}
});

// Change background when user starts scrolling
$(window).scroll(function() {    

    var scroll = $(window).scrollTop();

    if (scroll >= 5) {
        $(".overlay-active").removeClass(".overlay-active").addClass("overlay");
    }
});

// Fixed conflict with position between header navigation and form 
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();
    if (scroll >= 5) {
        $(".signin").removeClass(".signin").addClass("signin-off");
    }
});



// Go to top after refresh page
$(window).on('beforeunload', function() {
    $(window).scrollTop(0);
 });
    

// $(function() {

//     var origTitle, animatedTitle, timer;

//     function animateTitle(newTitle) {
//       var currentState = false;
//       origTitle = document.title;  // save original title
//       animatedTitle = "Wróć do nas :(";
//       timer = setInterval(startAnimation, 2000);

//       function startAnimation() {
//       // animate between the original and the new title
//       document.title = currentState ? origTitle : animatedTitle;
//       currentState = !currentState;
//       }
//     }

//     function restoreTitle() {
//       clearInterval(timer);
//       document.title = origTitle; // restore original title
//     }

//     // Change page title on blur
//     $(window).blur(function() {
//       animateTitle();
//     });

//     // Change page title back on focus
//     $(window).focus(function() {
//       restoreTitle();
//     });

//   });


$("#toggle-imprint").click(function(){
  $('#v-pills-settings-tab').tab('show');
});