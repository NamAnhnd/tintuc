jQuery(function($){
  "use strict";
    $('.menu > ul').superfish({
      delay:       500,                            
      animation:   {opacity:'show',height:'show'},  
      speed:       'fast'                         
    });

    $('.search-box span i').click(function(){
        $(".serach_outer").toggle();
    });
});

/* Mobile responsive Menu*/

function openNav() {
  document.getElementById("mySidenav").style.width = "250px";
}

function closeNav() {
  document.getElementById("mySidenav").style.width = "0";
}

jQuery(function() {
  //----- OPEN
  jQuery('[data-popup-open]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-open');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeIn(350);

    e.preventDefault();
  });

  //----- CLOSE
  jQuery('[data-popup-close]').on('click', function(e) {
    var targeted_popup_class = jQuery(this).attr('data-popup-close');
    jQuery('[data-popup="' + targeted_popup_class + '"]').fadeOut(350);

    e.preventDefault();
  });
});


jQuery('document').ready(function(){
    
    var owl = jQuery('#featuredproduct .owl-carousel');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 2
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          },
          1200: {
            items: 4
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true,
    });

    var owl = jQuery('#category .owl-carousel');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 1
          },
          600:{
            items:2
          },
          1000: {
            items: 3
          },
          1200: {
            items: 3
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true,
    });

    var owl = jQuery('#dangerSlider .owl-carousel');
    
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : false,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 2
          },
          600: {
            items: 2
          },
          1000: {
            items: 2
          },
          1200: {
            items: 2
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    }); 

     var owl = jQuery('#backSlider .owl-carousel');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 2
          },
          600: {
            items: 2
          },
          1000: {
            items: 2
          },
          1200: {
            items: 2
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });

    var owl = jQuery('#newArrivals .owl-carousel');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 2
          },
          600: {
            items: 2
          },
          1000: {
            items: 3
          },
          1200: {
            items: 4
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });

    var owl = jQuery('#bestSellers .owl-carousel');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
          0: {
            items: 1
          },
          400: {
            items: 2
          },
          600: {
            items: 2
          }, 
          1000: {
            items: 3
          }, 
          1200: {
            items: 4
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    });  

    var owl = jQuery('#fromBlog .owl-carousel');
        owl.owlCarousel({
        margin: 10,
        nav: true,
        autoplay : true,
        lazyLoad: true,
        autoplayTimeout: 3000,
        loop:true,
        dots:false,
        navText : ['<i class="fa fa-lg fa-caret-left"></i>','<i class="fa fa-lg fa-caret-right"></i>'],
        responsive: {
         0: {
            items: 1
          },
          400: {
            items: 1
          },
          600: {
            items: 2
          },
          800: {
            items: 2
          },
          1000: {
            items: 3
          },  
          1200: {
            items: 3
          }
        },
        autoplayHoverPause : true,
        mouseDrag: true
    }); 
});