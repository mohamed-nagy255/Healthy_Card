let inpSelect = document.querySelectorAll(".full-input-check input");

inpSelect.forEach((inp) => {
  inp.addEventListener("click", () => {
    inp.parentElement.classList.add("hide");
    if (!inp.hasAttribute("checked")) {
      inp.setAttribute("checked", true);
    }
  });
});
