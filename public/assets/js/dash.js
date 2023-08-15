document.addEventListener("DOMContentLoaded", function (event) {
  const header = document.querySelector("header");
  const notificationContainer = header.querySelector("#notification_Container");
  const notificationCount = header.querySelector(".icon-button__badge");

  // Toggle sidebar (navigation code)
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

  // header code

  // Your code to run since DOM is loaded and ready
  fetchRequests(notificationContainer, notificationCount);

  // Initial call to update both date and time
  updateDateTime();

  // Auto-update every minute
  setInterval(updateDateTime, 60000);
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

function timeElapsed(timestamp) {
  const now = new Date();
  const parsedTime = new Date(timestamp);
  const elapsedMilliseconds = now - parsedTime;

  const seconds = Math.floor(elapsedMilliseconds / 1000);
  const minutes = Math.floor(seconds / 60);
  const hours = Math.floor(minutes / 60);
  const days = Math.floor(hours / 24);
  const months = Math.floor(days / 30);
  const years = Math.floor(months / 12);

  if (years > 0) {
    return `${years} year${years > 1 ? "s" : ""} ago`;
  } else if (months > 0) {
    return `${months} month${months > 1 ? "s" : ""} ago`;
  } else if (days > 0) {
    return `${days} day${days > 1 ? "s" : ""} ago`;
  } else if (hours > 0) {
    return `${hours} hour${hours > 1 ? "s" : ""} ago`;
  } else if (minutes > 0) {
    return `${minutes} minute${minutes > 1 ? "s" : ""} ago`;
  } else {
    return "Just now";
  }
}

async function fetchRequests(ncontainer, ncount) {
  // Fetch the requests
  const response = await fetch("/staff/requests");
  const result = await response.json();

  // update notification count
  ncount.textContent = result.length;

  // populate the notification container
  ncontainer.innerHTML = "";
  result.forEach((request) => {
    const notificationElement = document.createElement("li");
    notificationElement.innerHTML = `
    <a class="dropdown-item" href="/staff/requests/${
      request.request_id
    }" value="${request.notification_id}">
      <div>
        <div class="d-flex justify-content-between align-items-center">
          <div> <strong>${
            request.service_name
          }</strong> <span class="small text-muted">#${
      request.request_id
    }</span> </div> <small class="text-muted">${timeElapsed(
      request.request_date
    )}</small>
        </div>
        <div class="text-truncate"> ${request.Description} patient ${
      request.requestee_name
    } </div>
      </div>
    </a>
    `;
    ncontainer.appendChild(notificationElement);
  });
}

// settings
document.addEventListener("DOMContentLoaded", function (event) {
  const filehandle = document.querySelector("input.image");
  const imageInput = document.getElementById("image-input");
  const imageLabel = document.getElementById("image-label");
  const profilebutton = document.querySelector(".profile-button");
  const passwordbutton = document.querySelector(".password-button");
  const image = document.querySelector("img.rounded-circle");

  imageLabel.addEventListener("click", () => {
    imageInput.click();
  });

  filehandle.addEventListener("change", function (event) {
    const file = this.files[0];
    const url = URL.createObjectURL(file);

    // change the src to the new url
    image.src = url;
  });

  // Insert the form on the page
  form = document.getElementById("settingForm");
  passform = document.getElementById("passwordform");
  successToast = document.getElementById("successToast");
  successToastMsg = document.getElementById("successToastMsg");
  errorToast = document.getElementById("errorToast");
  errorToastMsg = document.getElementById("errorToastMsg");

  // Add an event listener for when the form is submitted
  form.addEventListener("submit", async function (event) {
    profilebutton.disabled = true;
    event.preventDefault();
    const data = new FormData(form);

    try {
      const response = await fetch("/staff", {
        method: "POST",
        body: data,
      });
      const result = await response.json();
      if (result.statusCode === 200) {
        profilebutton.disabled = false;
        form.reset();
        let toastBootstrap = new bootstrap.Toast(successToast);
        image.src = "/assets/uploads/dummy_image.jpg";
        toastBootstrap.show();
        successToastMsg.textContent = result.message;
      } else if (result.statusCode === 500) {
        profilebutton.disabled = false;
        form.reset();
        let toastBootstrap = new bootstrap.Toast(errorToast);
        image.src = "/assets/uploads/dummy_image.jpg";
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      } else if (result.statusCode === 400) {
        profilebutton.disabled = false;
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      }
    } catch (error) {
      console.log(error);
    }
  });

  passform.addEventListener("submit", async function (event) {
    passwordbutton.disabled = true;
    event.preventDefault();
    const data = new FormData(passform);

    try {
      const response = await fetch("/staff", {
        method: "POST",
        body: data,
      });
      const result = await response.json();
      console.log(result);
      if (result.statusCode === 200) {
        console.log("200");
        passwordbutton.disabled = false;
        passform.reset();
        let toastBootstrap = new bootstrap.Toast(successToast);
        toastBootstrap.show();
        successToastMsg.textContent = result.message;
      } else if (result.statusCode === 500) {
        console.log("500");
        passwordbutton.disabled = false;
        passform.reset();
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      } else if (result.statusCode === 400) {
        console.log("400");
        passwordbutton.disabled = false;
        let toastBootstrap = new bootstrap.Toast(errorToast);
        toastBootstrap.show();
        errorToastMsg.textContent = result.message;
      }
    } catch (error) {
      console.log(error);
    }
  });
});
