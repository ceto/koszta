// Modified http://paulirish.com/2009/markup-based-unobtrusive-comprehensive-dom-ready-execution/
// Only fires on body class (working off strictly WordPress body_class)

var ExampleSite = {
  // All pages
  common: {
    init: function() {
      // JS here
    },
    finalize: function() { }
  },
  // Home page
  home: {
    init: function() {
      // JS here
    }
  },
  // About page
  about: {
    init: function() {
      // JS here
    }
  }
};

var UTIL = {
  fire: function(func, funcname, args) {
    var namespace = ExampleSite;
    funcname = (funcname === undefined) ? 'init' : funcname;
    if (func !== '' && namespace[func] && typeof namespace[func][funcname] === 'function') {
      namespace[func][funcname](args);
    }
  },
  loadEvents: function() {

    UTIL.fire('common');

    $.each(document.body.className.replace(/-/g, '_').split(/\s+/),function(i,classnm) {
      UTIL.fire(classnm);
    });

    UTIL.fire('common', 'finalize');
  }
};

$(document).ready(UTIL.loadEvents);

jQuery(document).ready(function() {

  var top = $('.nav-row').offset().top - parseFloat($('.nav-row').css('marginTop').replace(/auto/, 0));
  $(window).scroll(function (event) {
    // what the y position of the scroll is
    var y = $(this).scrollTop();
    // whether that's below the form
    if (y >= top) {
      // if so, ad the fixed class
      $('.nav-row').addClass('fixed');
    } else {
      // otherwise remove it
      $('.nav-row').removeClass('fixed');
    }
  });

  $('.refnyito a').click(function(e){
    e.preventDefault();
    //$('#chooser').load('?page_id=13 #fullcs');
    $('#chooser').toggleClass('open');
    //$( "#chooser" ).show( "slow", function() { // Animation complete.  //});
  });



  if (typeof Galleria!=='undefined') {
    Galleria.loadTheme('http://kommandanten.no/wp-content/themes/komandanten/assets/galleria/classic/galleria.classic.js');
    Galleria.run('#galleria',{
      transition: 'fade',
      imageCrop: true,
      autoplay: 3000,
      showInfo: false,
    });
    Galleria.ready(function() {
      var gallery = this;
      $('<a>', {
          href: '#',
          class:'fullbtn',
          click:function(e) {
              e.preventDefault();
              gallery.enterFullscreen();
          }
      }).append('<i class="entypo resize-full"></i>' ).appendTo('#galleria');
    
    });
  }
  
  $('.comment-nyito').click(function(e){
    e.preventDefault();
    $('.fb-comments').toggleClass('open');
  });

});