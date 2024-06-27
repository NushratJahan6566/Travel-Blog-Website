document.addEventListener("DOMContentLoaded", function () {
  const menuBtn = document.querySelector(".menu-btn");
  const cancelbtn = document.querySelector(".cancel-btn");
  const navigation = document.querySelector(".navigation");

  menuBtn.addEventListener("click", () => {
    menuBtn.style.display = "none";
    cancelbtn.style.display = "block";
    cancelbtn.classList.toggle("active");
    navigation.classList.toggle("active");
  });
  cancelbtn.addEventListener("click", () => {
    cancelbtn.classList.toggle("active");
    menuBtn.style.display = "block";
    cancelbtn.style.display = "none";
    navigation.classList.remove("active");
  });

  const btns = document.querySelectorAll(".nav-btn");
  const slides = document.querySelectorAll(".v-slide");
  const contents = document.querySelectorAll(".content");
  
  var sliderNav = function (manual) {
    btns.forEach((btn) => {
      btn.classList.remove("active");
    });
  
    slides.forEach((slide) => {
      slide.classList.remove("active");
    });
    contents.forEach((content) => {
      content.classList.remove("active");
    });
  
    btns[manual].classList.add("active");
    slides[manual].classList.add("active");
    contents[manual].classList.add("active");
  };
  
  btns.forEach((btn, i) => {
      btn.addEventListener("click", () => {
        sliderNav(i);
    });
  });

});
