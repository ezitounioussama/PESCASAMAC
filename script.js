const socialLink = document.querySelector(".social-link");
const shareLink = document.querySelector(".share-link");

socialLink.addEventListener("click", function () {
  socialLink.classList.toggle("active");
  shareLink.classList.toggle("active");
});

// Copyright

document.getElementById("currentyear").innerHTML = new Date().getFullYear();
document.getElementById("currentyearMobile").innerHTML =
  new Date().getFullYear();

// Modal

let modal = document.getElementById("my-modal");
let btn = document.getElementById("open-btn");
let button = document.getElementById("btn-close");
btn.onclick = function () {
  modal.style.display = "flex";
  modal.style.justifyContent = "center";
  modal.style.alignItems = "center";
  modal.style.backdropFilter = "blur(2px)";
  modal.style.zIndex = "100";
};
button.onclick = function () {
  modal.style.display = "none";
};

window.onclick = function (event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
};
