$(document).ready(() => {
  $(".button-collapse").sideNav();
  $(".carousel").carousel({ fullWidth: true, duration: 100 });
  $(".slider").slider();
  $(".collapsible").collapsible();

  $("#carousel-prev-button").click(() => $(".carousel").carousel("prev"));
  $("#carousel-next-button").click(() => $(".carousel").carousel("next"));

  setInterval(() => {
    $(".carousel").carousel("next");
  }, 10000);
});
