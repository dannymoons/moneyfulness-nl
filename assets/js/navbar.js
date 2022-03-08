const init = () => {
  const navbarToggle = document.querySelector(".navbar__toggle");
  const navbarLinks = document.querySelector(".navbar__links");
  
  navbarToggle.addEventListener("click", (e) => {
    e.preventDefault();
    navbarLinks.classList.toggle("navbar__links--active");
    navbarToggle.classList.toggle("navbar__toggle--active");
  });
}

export default init;