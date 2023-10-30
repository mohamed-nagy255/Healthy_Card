function sliderInfoDoctor() {
  let perPageCount;

  if (window.innerWidth > 580) {
    perPageCount = 3;
  } else if (window.innerWidth < 580) {
    perPageCount = 1;
  }
  // slider with library splide
  let splideMeet = new Splide(".splide-meet", {
    type: "loop",
    perPage: `${perPageCount}`,
    focus: "center",
    autoplay: true,
    pagination: false,
    arrows: false,
  });

  splideMeet.mount();
}
sliderInfoDoctor();

function sliderTestimonial() {
  let perPageCount;

  if (window.innerWidth > 991) {
    perPageCount = 3;
  } else {
    perPageCount = 1;
  }
  // slider with library splide
  let splideClient = new Splide(".splide-client", {
    type: "loop",
    perPage: `${perPageCount}`,
    focus: "center",
    arrows: false,
    autoplay: true,
  });

  splideClient.mount();
}
sliderTestimonial();
