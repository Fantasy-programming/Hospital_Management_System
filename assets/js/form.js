document.addEventListener("DOMContentLoaded", function () {
  const flashMessage = document.querySelector(".flash-message");
  if (flashMessage) {
    flashMessage.style.display = "block";
    setTimeout(function () {
      flashMessage.style.display = "none";
    }, 5000); // 5000 milliseconds (5 seconds)
  }
});
