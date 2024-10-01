function toggleDiv(element) {
    var allAnswers = document.querySelectorAll(".answer");
    var allIcons = document.querySelectorAll(".question i");

    var answer = element.nextElementSibling;
    var icon = element.querySelector("i");

    if (answer.style.display === "block") {
      answer.style.display = "none";
      answer.classList.remove("show");
      icon.classList.remove("fa-minus");
      icon.classList.add("fa-plus");
    } else {
      allAnswers.forEach((ans) => {
        ans.style.display = "none";
        ans.classList.remove("show");
      });
      allIcons.forEach((icn) => {
        icn.classList.remove("fa-minus");
        icn.classList.add("fa-plus");
      });

      answer.style.display = "block";
      answer.classList.add("show");
      icon.classList.remove("fa-plus");
      icon.classList.add("fa-minus");
    }
  }
  document.addEventListener("DOMContentLoaded", function () {
    const cards = document.querySelectorAll(
      ".franchise-process-cards .content-div"
    );
    // Define options for IntersectionObserver
    const observerOptions = {
      root: null, // relative to the viewport
      threshold: 1, // 20% of the element must be visible
    };
    // Create an intersection observer
    const observer = new IntersectionObserver((entries) => {
      entries.forEach((entry) => {
        // Check if the card is intersecting (in view)
        if (entry.isIntersecting) {
          // Change background to satin color and text color to black
          entry.target.style.backgroundColor = "rgb(179, 142, 74)";
          entry.target.querySelector("h2").style.color = "black";
          entry.target.querySelector("p").style.color = "black";
        } else {
          // Revert to default colors when out of view
          entry.target.style.backgroundColor = "black";
          entry.target.querySelector("h2").style.color = "orange"; // Default text color
          entry.target.querySelector("p").style.color = "#F0F0F0"; // Default text color
        }
      });
    }, observerOptions);
    // Observe each card
    cards.forEach((card) => {
      observer.observe(card);
    });
  });
