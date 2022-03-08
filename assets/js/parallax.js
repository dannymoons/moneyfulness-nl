import Rellax from "rellax";

const init = () => {
  new Rellax(".rellax", {
    center: true,
  });
  new Rellax(".gallery__item--1", {
    speed: "-2",
    center: true,
  });
  new Rellax(".gallery__item--2", {
    speed: "2",
    center: true,
  });

  // new Rellax(".services-1", {
  //   speed: "1",
  //   breakpoints: ["576", "768", "1201"],

  //   // center: true,
  // });
  // new Rellax(".services-2", {
  //   speed: "0",
  //   // center: true,
  // });
  // new Rellax(".services-3", {
  //   speed: "2",
  //   // center: true,
  // });
};

export default init;
