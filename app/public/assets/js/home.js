const navLinks = document.querySelectorAll(".nvlink");
const panels = document.querySelectorAll(".panel");
const buttons = document.querySelectorAll("#services button, #faq button");

// setup navlinks

for (const link of navLinks) {
  link.addEventListener("click", (event) => {
    for (const link of navLinks) {
      link.classList.remove(
        "btn",
        "color-second",
        "text-white",
        "px-3",
        "rounded-pill",
      );
    }
    event.currentTarget.classList.add(
      "btn",
      "color-second",
      "text-white",
      "px-3",
      "rounded-pill",
    );
  });
}

// Setup pannel

for (const panel of panels) {
  panel.addEventListener("click", () => {
    removeActiveClasses();
    panel.classList.add("active");
  });
}

function removeActiveClasses() {
  for (const panel of panels) {
    panel.classList.remove("active");
  }
}

for (const button of buttons) {
  button.addEventListener("click", () => {
    const pTag = button.previousElementSibling;
    const lastElement = pTag.lastElementChild;
    pTag.classList.toggle("gap-4");
    lastElement.classList.toggle("d-none");
    lastElement.classList.toggle("d-inline-block");
    lastElement.classList.toggle("w-75");
    const svg = button.querySelector("svg");
    svg.classList.toggle("rotate");
    button.classList.toggle("color-second");

    // Set initial opacity value in CSS
    lastElement.style.opacity = "0";

    setTimeout(() => {
      if (lastElement.classList.contains("d-inline-block")) {
        lastElement.style.transition = "opacity 0.5s ease-in";
        lastElement.style.opacity = "1";
      } else {
        lastElement.style.transition = "opacity 0.5s ease-out";
        lastElement.style.opacity = "0";
      }
    }, 0);
  });
}

// Sticky Navbar (future)

// const sections = document.querySelectorAll("header, section");
// window.onscroll = () => {
//   let current = null;
//   let previousSection = null;
//
//   sections.forEach((section) => {
//     const sectionTop = section.offsetTop;
//     if (scrollY >= sectionTop - 60) {
//       current = section.getAttribute("id");
//     }
//   });
//
//   // Check if the current section has changed
//   if (current !== null && current !== previousSection) {
//     console.log(current);
//     previousSection = current;
//   }
// };

// Filtered tables
