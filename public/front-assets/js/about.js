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
  
    // Toggle aria-expanded attribute
    this.setAttribute("aria-expanded", !isExpanded);
  
    // Show or hide the navbar collapse
    if (!isExpanded) {
      navbar.classList.add("show");
    } else {
      navbar.classList.remove("show");
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
    const activeLink = localStorage.getItem("activeLink");
  
    // If an active link is saved, apply the active class
    if (activeLink) {
      navLinks.forEach((link) => {
        if (link.href === activeLink) {
          link.classList.add("active");
        }
      });
    }
  
    // Add click event to all nav links
    navLinks.forEach((link) => {
      link.addEventListener("click", function () {
        // Remove active class from all links
        navLinks.forEach((link) => link.classList.remove("active"));
  
        // Add active class to the clicked link
        this.classList.add("active");
  
        // Save the active link in localStorage
        localStorage.setItem("activeLink", this.href);
      });
    });
  });
  