import Swiper, { Pagination, Navigation, Autoplay, EffectCards } from "swiper";

const init = (slider) => {
  const defaultOptions = {
    loop: true,
    speed: 500,
    // keyboard: true,
    // slidesPerView: 3,
    // spaceBetween: 32,

    modules: [Pagination, Navigation, Autoplay, EffectCards],

    pagination: {
      el: slider.querySelector(".slider__pagination"),
      modifierClass: "slider__pagination--",
      bulletClass: "slider__bullet",
      bulletActiveClass: "slider__bullet--active",
      clickable: true,
      clickableClass: "slider__pagination--clickable",
    },

    navigation: {
      nextEl: slider.querySelector(".slider__button--next"),
      prevEl: slider.querySelector(".slider__button--prev"),
      disabledClass: "slider__button--disabled",
    },
  };

  // const customOptions = JSON.parse(decodeURIComponent(slider.dataset.swiper));
  const customOptions = JSON.parse(
    decodeURIComponent(slider.getAttribute("data-swiper"))
  );

  new Swiper(slider, { ...defaultOptions, ...customOptions });
};

export default init;
