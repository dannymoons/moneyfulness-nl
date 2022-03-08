import loader from "./utils/loader.js";

document.addEventListener("DOMContentLoaded", () => {
  // Navbar logic
  loader("navbar");

  //  Counter logic
  loader("counter");

  // Expando locic
  loader("expando");

  // Animations
  loader("animation");

  // Popup logic
  loader("popup");

  // Swiper logic
  loader("swiper", ".slider");

  // Youtube light logic
  loader("youtube", ".youtube-player");
});
