window.onscroll = function () {
  var navbar = document.getElementById("mainNavbar");
  if (window.scrollY > 50) {
    navbar.classList.add("scrolled");
  } else {
    navbar.classList.remove("scrolled");
  }
};

// Handling toggle button behavior
document.getElementById("navbarToggle").addEventListener("click", function () {
  var navbar = document.getElementById("navbarNav");
  var isExpanded = this.getAttribute("aria-expanded") === "true";

  console.log('sssssssss',isExpanded);

  // Toggle aria-expanded attribute

  // Show or hide the navbar collapse
  if (!isExpanded) {
    console.log('as')
    navbar.classList.add("show");
  this.setAttribute("aria-expanded", "true");
  } else {
    navbar.classList.remove("show");
    this.setAttribute("aria-expanded", "false");
  }
});

// To reset the navbar when switching from mobile to desktop view
window.addEventListener("resize", function () {
  var width = window.innerWidth;
  var navbar = document.getElementById("navbarNav");

  if (width > 991) {
    navbar.classList.remove("show"); // Ensure collapse is not active
  }
});

document.addEventListener("DOMContentLoaded", function () {
  // Get all nav links
  const navLinks = document.querySelectorAll(".nav-link");

  // Check if there is a saved active link in localStorage
//   const activeLink = localStorage.getItem("activeLink");

  // If an active link is saved, apply the active class
//   if (activeLink) {
//     navLinks.forEach((link) => {
//       if (link.href === activeLink) {
//         link.classList.add("active");
//       }
//     });
//   }

  // Add click event to all nav links
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Remove active class from all links
      navLinks.forEach((link) => link.classList.remove("active"));

      // Add active class to the clicked link
      this.classList.add("active");

      // Save the active link in localStorage
    //   localStorage.setItem("activeLink", this.href);
    });
  });
});

// JavaScript function to navigate to another page
function navigateToPage() {
  window.location.href = "/our-menu";
}

// Function to add the classes when elements come into view
document.addEventListener("DOMContentLoaded", function () {
  const observerOptions = {
    root: null, // Use the viewport as the root
    rootMargin: "0px",
    threshold: 0.1, // Trigger when 10% of the element is visible
  };

  const fadeInElements = document.querySelectorAll(".item-title");
  const moveUpElements = document.querySelectorAll(".item-description");

  const observer = new IntersectionObserver(function (entries, observer) {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        // Add fade-in class for h5
        if (entry.target.classList.contains("item-title")) {
          entry.target.classList.add("fade-in");
        }

        // Add move-up class for p
        if (entry.target.classList.contains("item-description")) {
          entry.target.classList.add("move-up");
        }
      }
    });
  }, observerOptions);

  // Observe each item-title and item-description
  fadeInElements.forEach((el) => observer.observe(el));
  moveUpElements.forEach((el) => observer.observe(el));
});
document.addEventListener(
  "contextmenu",
  function (e) {
    e.preventDefault();
  },
  false
);
// document.onkeydown = function (e) {
//   if (
//     e.key === "F12" ||
//     (e.ctrlKey && e.shiftKey && e.key === "I") ||
//     (e.ctrlKey && e.key === "u")
//   ) {
//     return false;
//   }
// };

document.addEventListener("DOMContentLoaded", function () {
  // Get all nav links
  const navLinks = document.querySelectorAll(".nav-link");

  // Check if there is a saved active link in localStorage
//   const activeLink = localStorage.getItem("activeLink");

//   // If an active link is saved, apply the active class
//   if (activeLink) {
//     navLinks.forEach((link) => {
//       if (link.href === activeLink) {
//         link.classList.add("active");
//       }
//     });
//   }

  // Add click event to all nav links
  navLinks.forEach((link) => {
    link.addEventListener("click", function () {
      // Remove active class from all links
      navLinks.forEach((link) => link.classList.remove("active"));

      // Add active class to the clicked link
      this.classList.add("active");

      // Save the active link in localStorage
    //   localStorage.setItem("activeLink", this.href);
    });
  });
});
