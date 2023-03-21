$(document).ready(function () {
  let $carousel = $(".galery");
  let InicializadorSlick = false;

  function initSlick() {
    if ($(window).width() <= 960 && !InicializadorSlick) {
      $carousel.slick({
        centerMode: true,
        centerPadding: "60px",
        slidesToShow: 2,
        responsive: [
          {
            breakpoint: 768,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: "40px",
              slidesToShow: 1,
            },
          },
          {
            breakpoint: 480,
            settings: {
              arrows: false,
              centerMode: true,
              centerPadding: "40px",
              slidesToShow: 1,
            },
          },
        ],
      });
      InicializadorSlick = true;
    } else if ($(window).width() > 960 && InicializadorSlick) {
      $carousel.slick("unslick");
      InicializadorSlick = false;
    }
  }
  initSlick();
  $(window).resize(initSlick);
});
