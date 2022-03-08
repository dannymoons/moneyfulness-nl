const init = () => {
  const accordion = document.querySelector(".accordion");
  const expandos = document.querySelectorAll(".expando");

  expandos.forEach((expando) => {
    const expandoHeader = expando.querySelector(".expando__header");
    const expandoContent = expando.querySelector(".expando__content");

    const expandoHeaderHeight = expandoHeader.offsetHeight;
    let expandoContentHeight = 0;
    let expandoTotalHeight = 0;

    setTimeout(() => {
      expandoContentHeight = expandoContent.offsetHeight;
      expandoTotalHeight = expandoHeaderHeight + expandoContentHeight;
    }, 100);

    expando.style.maxHeight = `${expandoHeaderHeight}px`;

    expandoHeader.addEventListener("click", () => {
      if (expando.classList.contains("active")) {
        expando.style.maxHeight = `${expandoHeaderHeight}px`;
        expando.classList.remove("active");
      } else {
        expando.style.maxHeight = `${expandoTotalHeight}px`;
        expando.classList.add("active");
      }
    });
  });
};

export default init;
