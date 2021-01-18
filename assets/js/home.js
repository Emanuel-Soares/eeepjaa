$(document).ready(function () {
  function addJaa() {
    const width = window.innerWidth;
    const slider = $("#slider");
    // slider.carousel("destroy");

    if (width <= 910 && width > 0) {
      const isMobile = $("#slider #eeep");
      if (isMobile) return console.log("já existe", isMobile);

      const eeep = $("<div>").addClass("carousel-item").attr({
        id: "eeep",
      });

      const eeepjaa = $("<img>").addClass("slider-image").attr({
        src: "/assets/img/home/eeep.png",
        alt: "EEEPJAA",
      });

      const lastSlide = $("div#last-slide");

      eeep.html(eeepjaa);
      lastSlide.after(eeep);

      console.log(slider);
      // $(".carousel").carousel({ fullWidth: true, duration: 100 });
    }
  }

  addJaa();

  window.onresize = addJaa;
});
