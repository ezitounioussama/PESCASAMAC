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
