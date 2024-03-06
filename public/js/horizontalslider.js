const contentContainer = document.querySelector('.content-container');
const textFrames = document.querySelectorAll('.text-frame');
let currentIndex = 0;
let autoplayInterval;
const autoplayDelay = 3000; // Change this value to adjust the autoplay delay (in milliseconds)

function scrollToFrame(index) {
  const frame = textFrames[index];
  contentContainer.scrollTo({
    left: frame.offsetLeft,
    behavior: 'smooth'
  });
}

function nextFrame(userClicked = false) {
  if (currentIndex === textFrames.length - 1) {
    // If on the last element, scroll to the first element
    currentIndex = 0;
  } else {
    currentIndex++;
  }
  scrollToFrame(currentIndex);

  if (userClicked) {
    resetAutoplay();
  }
}

function prevFrame(userClicked = false) {
  if (currentIndex === 0) {
    // If on the first element, scroll to the last element
    currentIndex = textFrames.length - 1;
  } else {
    currentIndex--;
  }
  scrollToFrame(currentIndex);

  if (userClicked) {
    resetAutoplay();
  }
}

const prevBtn = document.getElementById('prevBtn');
const nextBtn = document.getElementById('nextBtn');

prevBtn.addEventListener('click', () => prevFrame(true));
nextBtn.addEventListener('click', () => nextFrame(true));

function startAutoplay() {
  autoplayInterval = setInterval(nextFrame, autoplayDelay);
}

function stopAutoplay() {
  clearInterval(autoplayInterval);
}

function resetAutoplay() {
  stopAutoplay();
  startAutoplay();
}

// Stop autoplay when the tab is not active
document.addEventListener('visibilitychange', () => {
  if (document.visibilityState === 'visible') {
    startAutoplay();
  } else {
    stopAutoplay();
  }
});

contentContainer.addEventListener('mouseenter', stopAutoplay);
contentContainer.addEventListener('mouseleave', startAutoplay);

scrollToFrame(currentIndex); // Show the first frame initially
startAutoplay(); // Start autoplay
