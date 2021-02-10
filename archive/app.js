
// Change logo to dark version after scroll down
$(window).scroll(function(){
    if($(this).scrollTop()>70) {
        $('#header img').attr('src','/img-offer/logo_bw.JPG');
    }
    else {
        $('#header img').attr('src','/img-offer/noclegowo.svg');
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

//  Change background when user clicks anywhere
  $(window).click(function() {
    $(".overlay-active").removeClass(".overlay-active").addClass("overlay");
});

$("#clickme").click(function() {
    $(".overlay-active").removeClass(".overlay-active").addClass("overlay");
});


// Show add offer button when user starts scrolling
// $(window).scroll(function() {    

//     var scroll = $(window).scrollTop();

//     if (scroll >= 5) {
//         $("").removeClass("showAdd").addClass("");
//     }
// });

// Show mobile add button 

$(window).scroll(function() {    

    var scroll = $(window).scrollTop();

    if (scroll <= 5) {
        $("").removeClass(".hideButton").addClass("");
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

// $('#myModal').on('shown.bs.modal', function () {
//     $('#myInput').trigger('focus')
//   });



  $(function() {

    var origTitle, animatedTitle, timer;
    
    function animateTitle(newTitle) {
      var currentState = false;
      origTitle = document.title;  // save original title
      animatedTitle = "Hey There! " + origTitle;
      timer = setInterval(startAnimation, 2000);
    
      function startAnimation() {
        // animate between the original and the new title
        document.title = currentState ? origTitle : animatedTitle;
        currentState = !currentState;
      }
    }
    
    function restoreTitle() {
      clearInterval(timer);
      document.title = origTitle; // restore original title
    }
    
    // Change page title on blur
    $(window).blur(function() {
        animateTitle();
    });
    
    // Change page title back on focus
    $(window).focus(function() {
        restoreTitle();
    });
    
    });