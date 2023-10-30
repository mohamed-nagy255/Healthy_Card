function ratingStars() {
  let valueStars = document.getElementById("input-hidden-stars"),
    inputStars = document.querySelectorAll(".rate-stars .star-widget input");
  for (let i = 0; i < inputStars.length; i++) {
    inputStars[i].onclick = () => {
      valueStars.value = inputStars[i].dataset.num;
    };
  }
  valueStars.onkeyup = () => {
    for (let i = 0; i < inputStars.length; i++) {
      if (inputStars[i].dataset.num == valueStars.value) {
        inputStars[i].checked = true;
      }
    }
  };
}
ratingStars();
