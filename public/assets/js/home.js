// import { Isolde } from "../modules/isolde/dist/isolde.min.js";

const navLinks = document.querySelectorAll(".nvlink");

navLinks.forEach((link) => {
  link.addEventListener("click", (event) => {
    navLinks.forEach((link) => {
      link.classList.remove(
        "btn",
        "color-second",
        "text-white",
        "px-3",
        "rounded-pill"
      );
    });
    event.currentTarget.classList.add(
      "btn",
      "color-second",
      "text-white",
      "px-3",
      "rounded-pill"
    );
  });
});

const panels = document.querySelectorAll(".panel");
panels.forEach((panel) => {
  panel.addEventListener("click", () => {
    removeActiveClasses();
    panel.classList.add("active");
  });
});
function removeActiveClasses() {
  panels.forEach((panel) => {
    panel.classList.remove("active");
  });
}

const sections = document.querySelectorAll("header, section");
window.onscroll = () => {
  var current = "";

  sections.forEach((section) => {
    const sectionTop = section.offsetTop;
    if (scrollY >= sectionTop - 60) {
      current = section.getAttribute("id");
    }
  });

  navLi.forEach((li) => {
    link.classList.remove(
      "btn",
      "color-second",
      "text-white",
      "px-3",
      "rounded-pill"
    );
    if (li.classList.contains(current)) {
      li.classList.add(
        "btn",
        "color-second",
        "text-white",
        "px-3",
        "rounded-pill"
      );
    }
  });
};

// Filtered tables

// const grid = new Isolde();

const buttons = document.querySelectorAll("#services button, #faq button");
buttons.forEach((button) => {
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
    if (lastElement.classList.contains("d-inline-block")) {
      lastElement.style.transition = "opacity 0.5s ease-in";
      lastElement.style.opacity = "1";
    } else {
      lastElement.style.transition = "opacity 0.5s ease-out";
      lastElement.style.opacity = "0";
    }
  });
});
