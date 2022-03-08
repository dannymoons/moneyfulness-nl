const init = () => {
  const toggles = document.querySelectorAll("[data-popup-toggle]");

  [...toggles].forEach((toggle) => {
    const popupID = toggle.dataset.popupToggle;
    const popup = document.querySelector(`[data-popup-popup="${popupID}"]`);
    const popupClose = popup.querySelector(".popup__close");
    // const popupBody = popup.querySelector(".popup__body");

    toggle.addEventListener("click", (e) => {
      e.preventDefault();
      popup.classList.add("popup--active");
      // popup.classList.add("popup--active");
    });

    popupClose.addEventListener("click", () => {
      popup.classList.remove("popup--active");
    });
  });
};

export default init;
