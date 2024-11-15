let lastScrollTop = 0;
window.addEventListener("scroll", function () {
  let currentScroll = window.pageYOffset || document.documentElement.scrollTop;
  if (currentScroll > lastScrollTop) {
    document.querySelector("header").classList.add("hidden-header");
  } else {
    document.querySelector("header").classList.remove("hidden-header");
  }
  lastScrollTop = currentScroll;
});
