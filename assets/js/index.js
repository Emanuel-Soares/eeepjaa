$(document).ready(() => {
  $(".button-collapse").sideNav()
  $(".carousel").carousel({ fullWidth: true, duration: 100 })
  $(".slider").slider()
  $(".collapsible").collapsible()

  $("#carousel-prev-button").click(() => $(".carousel").carousel("prev"))
  $("#carousel-next-button").click(() => $(".carousel").carousel("next"))
 
  $('.modal').modal()

  setInterval(() => {
    $('.carousel').carousel('next')
  }, 5000)
})