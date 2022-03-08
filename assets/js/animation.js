import AOS from "aos";

const init = () => {
  AOS.init({
    // offset: 200,
    duration: 1000,
    // easing: "ease-in-out",
    delay: 0,
    once: true,
  });
};

export default init;
