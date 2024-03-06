let mybutton = document.getElementById("myBtn");

window.onscroll = function() {
  scrollFunction();
};

function scrollFunction() {
  if (
    document.body.scrollTop > 300 ||
    document.documentElement.scrollTop > 300
  ) {
    mybutton.style.display = "block";
    mybutton.classList.add("show"); // Add the 'show' class to fade in
  } else {
    mybutton.classList.remove("show"); // Remove the 'show' class to fade out
  }
}

mybutton.addEventListener("click", function() {
  scrollToTop(1250); // Adjust the duration (in milliseconds) here
});

function scrollToTop(duration) {
  const start = window.pageYOffset;
  const startTime = performance.now();

  function scrollStep(timestamp) {
    const currentTime = timestamp - startTime;
    const scrollFraction = currentTime / duration;

    // Apply an ease-out effect
    const easeOutFraction = 1 - Math.pow(1 - scrollFraction, 3); // Cubic easing

    if (scrollFraction < 1) {
      window.scrollTo(0, start - start * easeOutFraction);
      requestAnimationFrame(scrollStep);
    } else {
      window.scrollTo(0, 0);
    }
  }

  requestAnimationFrame(scrollStep);
}
