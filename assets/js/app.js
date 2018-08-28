(function($) {
  "use strict"; // Start of use strict



  // Scroll to top button appear
  $(document).scroll(function() {
    var scrollDistance = $(this).scrollTop();
    if (scrollDistance > 100) {
      $('.scroll-to-top').fadeIn();
    } else {
      $('.scroll-to-top').fadeOut();
    }
  });

  // Activate scrollspy to add active class to navbar items on scroll
  $('body').scrollspy({
    target: '#mainNav',
    offset: 80
  });

  // Collapse Navbar
  var navbarCollapse = function() {
    if ($("#mainNav").offset().top > 100) {
      $("#mainNav").addClass("navbar-shrink");
    } else {
      $("#mainNav").removeClass("navbar-shrink");
    }
  };
  // Collapse now if page is not at top
  navbarCollapse();
  // Collapse the navbar when page is scrolled
  $(window).scroll(navbarCollapse);

  // Modal popup$(function () {
  // $('.portfolio-item').magnificPopup({
  //   type: 'inline',
  //   preloader: false,
  //   focus: '#username',
  //   modal: true
  // });
  $(document).on('click', '.portfolio-modal-dismiss', function(e) {
    e.preventDefault();
    $.magnificPopup.close();
  });

  // Floating label headings for the contact form
  $(function() {
    $("body").on("input propertychange", ".floating-label-form-group", function(e) {
      $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    }).on("focus", ".floating-label-form-group", function() {
      $(this).addClass("floating-label-form-group-with-focus");
    }).on("blur", ".floating-label-form-group", function() {
      $(this).removeClass("floating-label-form-group-with-focus");
    });
  });

  // Add custom classes to links in menu. I can't seem to add these using PHP or the admin UI.
  $(".nav-link").addClass("py-3 px-0 px-lg-3 rounded js-scroll-trigger");
  $(".menu-item").addClass("mx-0 mx-lg-1");

  // Closes responsive menu when a scroll trigger link is clicked
  $('.js-scroll-trigger').click(function() {
    $('.navbar-collapse').collapse('hide');
  });

  // Smooth scrolling using jQuery easing
  $('a.js-scroll-trigger[href*="#"]:not([href="#"])').click(function() {
    console.log("clicked!!!");
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
      if (target.length) {
        $('html, body').animate({
          scrollTop: (target.offset().top - 70)
        }, 1000, "easeInOutExpo");
        return false;
      }
    }
  });
})(jQuery); // End of use strict

$(document).ready(function(){
  $('.slider').slick({
    dots: true,
    arrows: false,
    pauseOnHover: false,
    pauseOnFocus: false,
    mobileFirst: true,
    // slide: 'div'
  });

  $('.slider').slickLightbox({
    itemSelector: 'a',
    navigateByKeyboard: true,
  });

  $('#review-slider').slick({
    dots: false,
    arrows: true,
    mobileFirst: true,
    adaptiveHeight: true
  });
});
