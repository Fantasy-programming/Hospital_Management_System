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
