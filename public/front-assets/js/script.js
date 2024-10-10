
document.addEventListener("DOMContentLoaded", function () {
    const heroSection = document.querySelector(".hero-section");

    // Array of background images
    const images = [
        "/front-assets/media/images/BRISKET-1-scaled-e1673617952250.webp",
        // "/front-assets/media/images/meat-moot-happy-customerss.webp",
        "/front-assets/media/images/Lamb-Ribs-meat-moot-2-2048x1638.webp",
        "/front-assets/media/images/LAMB-SHANK-meat-moot-smokingmeat-1-scaled-e1673617386290.webp",
        "/front-assets/media/images/LAMB-SHOULDER-MEAT-MOOT-2-2048x1638.webp",
    ];

    let currentImageIndex = 0;

    // Function to change background image with only zoom-in animation
    function changeBackgroundImage() {
        // Apply the new image
        currentImageIndex = (currentImageIndex + 1) % images.length; // Loop through the images
        heroSection.style.backgroundImage = `url(${images[currentImageIndex]})`;

        // Add the fade-in (zoom-in) class for the new image
        heroSection.classList.add("zoom-in");

        // Remove the fade-in class after the zoom-in animation finishes
        setTimeout(() => {
            heroSection.classList.remove("zoom-in");
        }, 4000); // Matches the zoom-in duration
    }

    // Initial image zoom-in on load
    changeBackgroundImage();

    // Change background every 4 seconds (2 seconds zoom-in, then automatic change)
    setInterval(changeBackgroundImage, 4100);
});

// Testimonial animation on scroll
document.addEventListener("DOMContentLoaded", function () {
    const testimonialQuote = document.querySelector(".testimonial-quote");
    const testimonialLogo = document.querySelector(".testimonial-logo");

    const options = {
        root: null, // viewport is the default root
        rootMargin: "0px",
        threshold: 0.5, // Trigger when 50% of the element is visible
    };

    // Callback for IntersectionObserver
    const handleIntersection = (entries, observer) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                if (entry.target.classList.contains("testimonial-quote")) {
                    entry.target.classList.add("fade-in-text"); // Add fade-in class for text
                } else if (entry.target.classList.contains("testimonial-logo")) {
                    entry.target.classList.add("fade-in-image"); // Add fade-in class for logo
                }
                observer.unobserve(entry.target); // Stop observing after animation triggers
            }
        });
    };

    // Create the IntersectionObserver
    const observer = new IntersectionObserver(handleIntersection, options);

    // Observe both the quote and the logo for scroll animations
    observer.observe(testimonialQuote);
    observer.observe(testimonialLogo);
});

// Section INfo
document.querySelector(".btn").addEventListener("click", function (e) {
    e.preventDefault();
    document.querySelector("#connect").scrollIntoView({
        behavior: "smooth",
    });
});

// Rating Scroll Section
document.addEventListener("DOMContentLoaded", function () {
    const statsSections = document.querySelectorAll(".stats-section h1");
    let hasAnimated = false;

    function animateNumber(element, start, end, duration) {
        let startTime = null;

        function step(timestamp) {
            if (!startTime) startTime = timestamp;
            const progress = Math.min((timestamp - startTime) / duration, 1);
            const currentNumber = progress * (end - start) + start;

            element.textContent = formatNumber(currentNumber, end);

            if (progress < 1) {
                window.requestAnimationFrame(step);
            }
        }

        window.requestAnimationFrame(step);
    }

    function formatNumber(number, end) {
        if (end % 1 !== 0) {
            return number.toFixed(1);
        } else {
            return Math.floor(number).toLocaleString();
        }
    }

    function isInViewport(element) {
        const rect = element.getBoundingClientRect();
        return rect.top < window.innerHeight && rect.bottom > 0; // Adjusted for more accuracy
    }

    // Function to trigger animation
    function triggerAnimation() {
        if (!hasAnimated) {
            statsSections.forEach((section) => {
                const targetNumber = parseFloat(section.getAttribute("data-number"));
                animateNumber(section, 0, targetNumber, 2000);
            });
            hasAnimated = true;
        }
    }

    // Initial check to trigger animation on page load if in view
    if (isInViewport(document.querySelector(".section-review"))) {
        triggerAnimation();
    }

    // Use IntersectionObserver for better performance
    const observer = new IntersectionObserver((entries) => {
        entries.forEach((entry) => {
            if (entry.isIntersecting) {
                triggerAnimation();
                observer.unobserve(entry.target); // Stop observing after the animation
            }
        });
    });

    // Observe the review section
    observer.observe(document.querySelector(".section-review"));
});

// document.addEventListener("DOMContentLoaded", function () {
//   const statsSections = document.querySelectorAll(".stats-section h1");
//   let hasAnimated = false;

//   // Helper function to animate the numbers, now handles floating-point and adds commas
//   function animateNumber(element, start, end, duration) {
//     let startTime = null;

//     function step(timestamp) {
//       if (!startTime) startTime = timestamp;
//       const progress = Math.min((timestamp - startTime) / duration, 1);
//       const currentNumber = progress * (end - start) + start;

//       // Format the number with commas
//       element.textContent = formatNumber(currentNumber, end);

//       if (progress < 1) {
//         window.requestAnimationFrame(step);
//       }
//     }

//     window.requestAnimationFrame(step);
//   }

//   // Helper function to format numbers with commas and decimal points if necessary
//   function formatNumber(number, end) {
//     if (end % 1 !== 0) {
//       // Floating point numbers: return up to 1 decimal place
//       return number.toFixed(1);
//     } else {
//       // Integer numbers: add commas
//       return Math.floor(number).toLocaleString();
//     }
//   }

//   // Function to check if the section is in view
//   function isInViewport(element) {
//     const rect = element.getBoundingClientRect();
//     return rect.top >= 0 && rect.bottom <= window.innerHeight;
//   }

//   // Add event listener for scroll to trigger animation when section comes into view
//   window.addEventListener("scroll", function () {
//     if (
//       !hasAnimated &&
//       isInViewport(document.querySelector(".section-review"))
//     ) {
//       statsSections.forEach((section) => {
//         const targetNumber = parseFloat(section.getAttribute("data-number"));
//         animateNumber(section, 0, targetNumber, 2000); // Adjust the duration as needed
//       });
//       hasAnimated = true;
//     }
//   });
// });

// Map Section

let zoomLevel = 1;
let isPanning = false;
let startX = 0;
let startY = 0;
let translateX = 0;
let translateY = 0;

const map = document.getElementById("world-map");
const zoomInButton = document.getElementById("zoom-in");
const zoomOutButton = document.getElementById("zoom-out");

if (zoomInButton) {
    zoomInButton.addEventListener("click", function () {
        if (zoomLevel < 2) {
            zoomLevel += 0.1;
            map.style.transform = `scale(${zoomLevel}) translate(${translateX}px, ${translateY}px)`;
            map.style.transformOrigin = "center";
        }
    });
}

if (zoomOutButton) {
    zoomOutButton.addEventListener("click", function () {
        if (zoomLevel > 1) {
            zoomLevel -= 0.1;
            map.style.transform = `scale(${zoomLevel}) translate(${translateX}px, ${translateY}px)`;
            map.style.transformOrigin = "center";
        }
    });

}
if (map) {
    // Start panning on mouse down
    map.addEventListener("mousedown", function (event) {
        isPanning = true;
        startX = event.clientX - translateX;
        startY = event.clientY - translateY;
        map.style.cursor = "grabbing";
    });

    // Pan the image while moving the mouse
    map.addEventListener("mousemove", function (event) {
        if (isPanning) {
            translateX = event.clientX - startX;
            translateY = event.clientY - startY;
            map.style.transform = `scale(${zoomLevel}) translate(${translateX}px, ${translateY}px)`;
        }
    });

    // Stop panning when the mouse button is released
    map.addEventListener("mouseup", function () {
        isPanning = false;
        map.style.cursor = "grab";
    });

    // Stop panning if the mouse leaves the image area
    map.addEventListener("mouseleave", function () {
        isPanning = false;
        map.style.cursor = "grab";
    });
}

// animation zoom in map picture
const mapContainer = document.querySelector(".map-container");
// const map = document.getElementById("world-map");

// Function to check if the element is in the viewport
function isInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <=
        (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Add a scroll event listener to trigger animation when the map is in the viewport
window.addEventListener("scroll", function () {
    if (isInViewport(mapContainer)) {
        mapContainer.classList.add("visible");
    }
});

const container = document.querySelector("#bootstrap-image-gallery");
window.lightGallery(container, {
    selector: ".lg-item",
    plugins: [lgZoom, lgThumbnail],
});
