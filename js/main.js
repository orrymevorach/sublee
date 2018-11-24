jQuery(document).ready(function( $ ) {

  // Smooth scroll for the menu and links with .scrollto classes
  $('.smoothscroll').on('click', function(e) {
    e.preventDefault();
    if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
      var target = $(this.hash);
      if (target.length) {

        $('html, body').animate({
          scrollTop: target.offset().top - 48
        }, 1500, 'easeInOutExpo');
      }
    }
  });

  $(".navbar-collapse a").on('click', function() {
    $(".navbar-collapse.collapse").removeClass('in');
  });
});

// Validating Empty Field
function check_empty() {
  if (document.getElementById('name').value == "" || document.getElementById('email').value == "" || document.getElementById('msg').value == "") {
    alert("Fill All Fields !");
  } else {
    document.getElementById('form').submit();
    alert("Form Submitted Successfully...");
  }
}
//Function To Display Popup
function div_show() {
  document.getElementById('abc').style.display = "block";
}
//Function to Hide Popup
function div_hide(){
  document.getElementById('abc').style.display = "none";
}

// Left Side of Header Fade In Effect
$('.header-left').addClass('fade-in')
$('.header-left').css({ 'opacity': '1' })

// Ride side of Header Fade In Effect
$('.header-logo').addClass('fade-in')
$('.header-logo').css({ 'opacity': '1' })

// Navigation Slide Feect
$('.nav').addClass('nav-slide')
$('.nav').css({ 'transform': 'translateX(0)' })

// Mobile Logo Fade Effect
$('.mobile-logo').addClass('fade-in')
$('.mobile-logo').css({'opacity': '1'})

// Mobile Down Arrow Fade Effect
$('.header-mobile svg.fa-angle-down').addClass('fade-in')
$('.header-mobile svg.fa-angle-down').css({'opacity': '1'})


let navVisible = false;
// Hamburger Menu
$('.nav-hamburger-container').on('click', function() {
  navVisible = true;
  const windowWidth = $(window).width()
  if(windowWidth <= 1000 && windowWidth >= 720) {
    $('.nav-right').toggleClass('slide-left')
    $('.nav-left').toggleClass('fade-away')
  }
  else if (windowWidth < 720) {
    $('body').toggleClass('body-mobile-nav')
    $('.nav').toggleClass('nav-mobile')
    $('.nav-right').toggleClass('nav-right-mobile')
  }
});

$('.nav li').on('click', function() {
  if (navVisible === true) {
    $('body').toggleClass('body-mobile-nav')
    $('.nav').toggleClass('nav-mobile')
    $('.nav-right').toggleClass('nav-right-mobile')
  }
})


// How It Works Move In List Reveal
if ($(window).width() <= 700) {
  $('.howitworks .icons-column1 .heading').on('click', function () {
    $('.howitworks .moving-in-list').toggle({ 'display': 'block' })
  })
  // How It Works Move Out List Reveal
  $('.howitworks .icons-column3 .heading').on('click', function () {
    $('.howitworks .moving-out-list').toggle({ 'display': 'block' })
  })
}

// Mobile Nav

