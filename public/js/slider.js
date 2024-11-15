let slideIndex = 0;
const slideImages = [
  'url("../images/image1.jpg")',
  'url("../images/image2.jpg")',
];

function showSlides() {
  let slide = document.querySelector(".slide");
  let slides = document.querySelectorAll(".slide-item");
  let currentSlide = slides[slideIndex];

  slideIndex = (slideIndex + 1) % slideImages.length;
  let nextSlide = document.createElement("div");
  nextSlide.classList.add("slide-item");
  nextSlide.style.backgroundImage = slideImages[slideIndex];

  // Append the next slide
  slide.appendChild(nextSlide);

  // Trigger reflow for the transition
  nextSlide.offsetWidth;

  // Transition current and next slides
  if (currentSlide) {
    currentSlide.classList.add("prev");
    nextSlide.classList.add("current");

    // Remove the previous slide after transition
    setTimeout(() => {
      currentSlide.remove();
    }, 1000); // Match this duration with CSS transition
  }

  setTimeout(showSlides, 4000); // Change image every 4 seconds
}

document.addEventListener("DOMContentLoaded", () => {
  let slide = document.querySelector(".slide");

  // Initialize with the first image
  let initialSlide = document.createElement("div");
  initialSlide.classList.add("slide-item", "current");
  initialSlide.style.backgroundImage = slideImages[slideIndex];
  slide.appendChild(initialSlide);

  showSlides();
});
