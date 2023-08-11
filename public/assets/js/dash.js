document.addEventListener("DOMContentLoaded", function (event) {
  const showNavbar = (toggleId, navId, bodyId, headerId) => {
    const toggle = document.getElementById(toggleId),
      nav = document.getElementById(navId),
      bodypd = document.getElementById(bodyId),
      headerpd = document.getElementById(headerId);

    // Validate that all variables exist
    if (toggle && nav && bodypd && headerpd) {
      toggle.addEventListener("click", () => {
        // show navbar
        nav.classList.toggle("show");
        // change icon
        toggle.classList.toggle("bx-x");
        // add padding to body
        bodypd.classList.toggle("body-pd");
        // add padding to header
        headerpd.classList.toggle("body-pd");
      });
    }
  };

  showNavbar("header-toggle", "nav-bar", "body-pd", "header");

  /*===== LINK ACTIVE =====*/
  const linkColor = document.querySelectorAll(".nav_link");

  function colorLink() {
    if (linkColor) {
      linkColor.forEach((l) => l.classList.remove("active"));
      this.classList.add("active");
    }
  }
  linkColor.forEach((l) => l.addEventListener("click", colorLink));

  // Your code to run since DOM is loaded and ready
});

// Navbar

function updateDateTime() {
  const currentDateTime = new Date();

  const dateOptions = { day: "numeric", month: "long" };
  const formattedDate = currentDateTime.toLocaleDateString(
    "en-US",
    dateOptions
  );
  const dateContainer = document.getElementById("date-container");
  dateContainer.textContent = `Today, ${formattedDate}`;

  const timeOptions = { hour: "2-digit", minute: "2-digit", hour12: true };
  const formattedTime = currentDateTime.toLocaleTimeString(
    "en-US",
    timeOptions
  );
  const timeContainer = document.getElementById("time-container");
  timeContainer.textContent = formattedTime;
}

// Initial call to update both date and time
updateDateTime();

// Auto-update every minute
setInterval(updateDateTime, 60000);
