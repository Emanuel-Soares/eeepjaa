$(document).ready(() => {
  $(".button-collapse").sideNav();
  $(".carousel").carousel({ fullWidth: true, duration: 100 });
  $(".slider").slider();
  $(".collapsible").collapsible();

  $("#carousel-prev-button").click(() => $(".carousel").carousel("prev"));
  $("#carousel-next-button").click(() => $(".carousel").carousel("next"));

  $(".modal").modal();
  $('.collapsible').collapsible();

  setInterval(() => {
    $(".carousel").carousel("next");
  }, 8000);

  $.fn.preload = function () {
    this.each(function () {
      $("<img/>").src = this;
    });
  };

  $("img").each((i, e) => {
    $(e).preload();
  });
});
