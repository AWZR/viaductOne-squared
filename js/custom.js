

  jQuery(document).ready(function($) {
  $( ".cardOne" ).click(function() {
    $( ".cardOne-toggle" ).fadeToggle(250, function() {
      // Animation complete.
    });
  });
  });

  jQuery(document).ready(function($) {
  $( ".cardTwo" ).click(function() {
    $( ".cardTwo-toggle" ).fadeToggle( 250, function() {
      // Animation complete.
    });
  });
  });

  jQuery(document).ready(function($) {
  $( ".cardThree" ).click(function() {
    $( ".cardThree-toggle" ).fadeToggle( 250, function() {
      // Animation complete.
    });
  });
  });

  jQuery(document).ready(function($) {
  $( ".cardFour" ).click(function() {
    $( ".cardFour-toggle" ).fadeToggle( 250, function() {
      // Animation complete.
    });
  });
  });


  jQuery(document).ready(function($) {
$('.close').click(function(){
  $(".toggle").fadeOut();
  });

});



// slide toggles

jQuery(document).ready(function($) {
$( "#slideOne" ).click(function() {
  $( ".slideOne" ).toggle(250, function() {
    // Animation complete.
  });
});
});

jQuery(document).ready(function($) {
$( "#slideTwo" ).click(function() {
  $( ".slideTwo" ).toggle( 250, function() {
    // Animation complete.
  });
});
});

jQuery(document).ready(function($) {
$( "#slideThree" ).click(function() {
  $( ".slideThree" ).toggle( 250, function() {
    // Animation complete.
  });
});
});

jQuery(document).ready(function($) {
$( "#slideFour" ).click(function() {
  $( ".slide" ).hide( 250, function() {
    // Animation complete.
  });
});





// hide toggle when link is clicked

jQuery(document).ready(function($) {
$('a').click(function(){
  $(".toggle").hide();
  });

});


// Menu toggles: change menu item classes to target menu items


jQuery(document).ready(function($) {
$( ".about" ).click(function() {
$( ".about-toggle" ).toggle( 250, function() {
});
});
});
//
//
//
jQuery(document).ready(function($) {
$( ".contact" ).click(function() {
$( ".contact-toggle" ).toggle( 250, function() {
});
});
});
//
jQuery(document).ready(function($) {
$( ".login" ).click(function() {
$( ".login-toggle" ).fadeToggle( 250, function() {
});
});
});


jQuery(document).ready(function($) {
$( ".privacy" ).click(function() {
$( ".privacy-toggle" ).fadeToggle( 250, function() {
});
});
});

jQuery(document).ready(function($) {
$('.close').click(function(){
$(".privacy-toggle").fadeOut();
});

});


});





// Parallax.JS scenes: add one for each instance
var scene = document.getElementById('scene');
var parallaxInstance = new Parallax(scene, {
  relativeInput: true
});
