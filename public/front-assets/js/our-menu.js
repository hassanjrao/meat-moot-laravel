const words = ['Amazing', 'Scrumptious']; // Words to display
let wordIndex = 0;
let letterIndex = 0;
let currentWord = '';
let isDeleting = false;
const delay = 150;
const dynamicWordElement = document.getElementById('dynamic-word');

function typeWords() {
    // Get current word
    let fullWord = words[wordIndex];

    if (isDeleting) {
        currentWord = fullWord.substring(0, letterIndex--);
    } else {
        currentWord = fullWord.substring(0, letterIndex++);
    }

    dynamicWordElement.innerHTML = currentWord;

    if (!isDeleting && letterIndex === fullWord.length) {
        // Pause before deleting the word
        setTimeout(() => (isDeleting = true), 1000);
    } else if (isDeleting && letterIndex === 0) {
        // Go to the next word after deleting
        wordIndex = (wordIndex + 1) % words.length;
        isDeleting = false;
    }

    // Change speed for typing and deleting
    const typingSpeed = isDeleting ? 100 : delay;
    setTimeout(typeWords, typingSpeed);
}

typeWords(); // Start the typing animation


  // image change on click
  const dynamicImage = document.getElementById("dynamicImage");
  const dynamicNumber = document.getElementById("dynamicNumber");
  const nestedDivs = document.querySelectorAll(".background-two");

  nestedDivs.forEach(div => {
    div.addEventListener("click", function() {
      const newImage = this.getAttribute("data-image");
      const newNumber = this.getAttribute("data-number");

      dynamicImage.src = newImage;
      dynamicNumber.textContent = newNumber; // Update the number

      // Line effect
      const lineEffect = this.querySelector('.line-effect');
        lineEffect.classList.toggle('line-active');

        // Reset the line effect
        nestedDivs.forEach(otherDiv => {
          if (otherDiv !== div) {
            const otherLineEffect = otherDiv.querySelector('.line-effect');
            otherLineEffect.classList.remove('line-active');
          }
        });
    });
  });