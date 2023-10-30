function slideNav() {
  const nav = document.querySelector("nav");
  const burgerNav = document.querySelector("nav .burger");
  const navLinks = document.querySelector("nav .nav-links");
  const navLinksLi = document.querySelectorAll("nav .nav-links li");

  // window area
  window.onscroll = () => {
    if (window.scrollY > 50) {
      nav.classList.add("change");
    } else {
      nav.classList.remove("change");
    }
    goToTopBtn();
  };

  burgerNav.addEventListener("click", () => {
    //   toggle nav
    navLinks.classList.toggle("nav-active");
    nav.classList.add("change");

    // animation links
    navLinksLi.forEach((li, index) => {
      if (li.style.animation) {
        li.style.animation = "";
      } else {
        li.style.animation = `navLinkFade 0.5s forwards ease ${index / 5}s`;
      }
    });

    // animation burger
    burgerNav.classList.toggle("toggle");
  });
}
slideNav();

// heartbeat monitor
let lines = document.querySelectorAll("#front line");
let svg = document.getElementById("loader");
// Setting proper viewBox for the svg element
let box = svg.getBBox();
svg.setAttribute("viewBox", `${box.x} ${box.y} ${box.width} ${box.height}`);

function run() {
  for (let i = 0; i < lines.length; i += 1) {
    let currLine = lines[i];
    setStyle(currLine, i);
    removeStyle(currLine, i);
  }

  function setStyle(currElement, i) {
    // setting delay 0.06 * i for making sure the next animated element will get styles when the preveios finishes
    setTimeout(() => {
      currElement.setAttribute(
        "style",
        `stroke: #fff; stroke-dasharray: ${currElement.getTotalLength()}px; stroke-dashoffset: ${currElement.getTotalLength()}px; animation: dash 0.1s ease-out forwards 0.1s; animation-delay: ${
          0.06 * i
        }s`
      );
    }, i);
  }

  function removeStyle(element, i) {
    setTimeout(() => {
      element.removeAttribute("style");
    }, 100 * (i + 2) - (i + 1) * 20); //100 * i + 2 - how fast we want to reset style. Each element is increasing its reset time with increasing i. For making the anumation smoother at the end, we can compensate by substracting (i + 1) * 20. Feel free to play around constants and find your perfect timing
  }
}

run();
setInterval(run, 1200);

// switch color area
let switchColor = document.querySelector(".switch-color"),
  iconswitchColor = document.querySelector(".switch-color .gear i");

iconswitchColor.onclick = function (e) {
  e.preventDefault();
  this.classList.toggle("fa-spin");
  switchColor.classList.toggle("open");
};

////
// switch Color
const colors = document.querySelectorAll(
  ".switch-color .colors-content .color"
);
// get local storage color

let mainColors = localStorage.getItem("color-option");

if (mainColors !== null) {
  document.documentElement.style.setProperty("--mainColor", mainColors);

  // remove class active from the color list
  colors.forEach((ele) => {
    ele.classList.remove("active");

    // add class active on the color list with local storage
    if (ele.dataset.color === mainColors) {
      ele.classList.add("active");
    }
  });
}

colors.forEach((li) => {
  li.addEventListener("click", (e) => {
    document.documentElement.style.setProperty(
      "--mainColor",
      e.target.dataset.color
    );
    // set local storage color
    localStorage.setItem("color-option", e.target.dataset.color);
    // remove class active from color
    document
      .querySelectorAll(".setting .color-list li.active")
      .forEach((element) => {
        element.classList.remove("active");
      });
    // add class active on color
    e.target.classList.add("active");
  });
});

function goToTopBtn() {
  let btnToTop = document.getElementById("btn-goToTop");

  if (window.scrollY > 300) {
    btnToTop.classList.add("active");
  } else {
    btnToTop.classList.remove("active");
  }
  btnToTop.addEventListener("click", () => {
    window.scrollTo(0, 0);
  });
}

function navDropdown() {
  let dropDownLink = document.querySelector(
      "nav .nav-links .dropdown .dropdown-link"
    ),
    dropDownContent = document.querySelector(
      "nav .nav-links .dropdown .dropdown-content"
    );

  dropDownLink.addEventListener("click", () => {
    dropDownContent.classList.toggle("active");
  });
}
navDropdown();
