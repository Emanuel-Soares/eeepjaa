$(window).scroll(function() {
  if ($(window).scrollTop() > 900) {
    $('#return-to-top').fadeIn(300);
  } else {
    $('#return-to-top').fadeOut(300);
  }
});
$(document).on('click', 'a[href="#"]', function(event) {
    event.preventDefault();

  $('html, body').animate({
    scrollTop: $($.attr(this, 'href')).offset().top,
  }, 500);
});
$('#return-to-top').click(() => {
  $('html, body').animate({
    scrollTop: 0,
  }, 500);
})