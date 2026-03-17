const slidesContainer = document.getElementById('slidesContainer');
const indicators = document.querySelectorAll('.indicator');
const slides = document.querySelectorAll('.slide');
let currentSlide = 0;

// Function to scroll to specific slide
function scrollToSlide(index) {
    if (index >= 0 && index < slides.length) {
        slidesContainer.scrollTo({
            left: index * window.innerWidth,
            behavior: 'smooth'
        });
        updateIndicators(index);
        currentSlide = index;
    }
}

// Update active indicator
function updateIndicators(index) {
    indicators.forEach((indicator, i) => {
        if (i === index) {
            indicator.classList.add('active');
        } else {
            indicator.classList.remove('active');
        }
    });
}

// Navigation functions
function scrollSlides(direction) {
    if (direction === 'next') {
        scrollToSlide(currentSlide + 1);
    } else if (direction === 'prev') {
        scrollToSlide(currentSlide - 1);
    }
}

// Click on indicators
indicators.forEach((indicator, index) => {
    indicator.addEventListener('click', () => {
        scrollToSlide(index);
    });
});

// Detect scroll end to update indicators
let scrollTimeout;
slidesContainer.addEventListener('scroll', () => {
    clearTimeout(scrollTimeout);
    scrollTimeout = setTimeout(() => {
        const scrollPosition = slidesContainer.scrollLeft;
        const slideWidth = window.innerWidth;
        const activeIndex = Math.round(scrollPosition / slideWidth);
        updateIndicators(activeIndex);
        currentSlide = activeIndex;
    }, 100);
});

// Keyboard navigation
document.addEventListener('keydown', (e) => {
    if (e.key === 'ArrowRight') {
        scrollSlides('next');
    } else if (key === 'ArrowLeft') {
        scrollSlides('prev');
    }
});

// Touch navigation variables
let touchStartX = 0;
let touchEndX = 0;

slidesContainer.addEventListener('touchstart', (e) => {
    touchStartX = e.changedTouches[0].screenX;
});

slidesContainer.addEventListener('touchend', (e) => {
    touchEndX = e.changedTouches[0].screenX;
    handleSwipe();
});

function handleSwipe() {
    const swipeThreshold = 50;
    if (touchEndX < touchStartX - swipeThreshold) {
        scrollSlides('next');
    }
    if (touchEndX > touchStartX + swipeThreshold) {
        scrollSlides('prev');
    }
}

// Wheel navigation with shift key for horizontal scroll
document.addEventListener('wheel', (e) => {
    if (e.shiftKey) {
        e.preventDefault();
        if (e.deltaY > 0) {
            scrollSlides('next');
        } else if (e.deltaY < 0) {
            scrollSlides('prev');
        }
    }
}, { passive: false });