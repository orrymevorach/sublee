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

// Hamburger Menu
$('.nav-right').on('click', function() {
  $('.nav ul').toggleClass('slide-left')
  $('.nav ul').css({ 'transform': 'translateX(0)' })
  console.log('hey dude')
})
