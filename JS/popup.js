function exitPopup() {
  let wraper = document.querySelectorAll(".wraper"),
    exitLink = document.querySelectorAll(".exit-popup");

  exitLink.forEach((exit) => {
    exit.addEventListener("click", () => {
      wraper.forEach((ele) => {
        ele.classList.remove("active");
      });
    });
  });
}
exitPopup();

function allLinksPopup(links, popup) {
  links.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      popup.classList.add("active");
    });
  });
}

// delete reservations with employee
allLinksPopup(
  document.querySelectorAll(
    ".table-border.reservations .table tr td .control .delete"
  ),
  document.querySelector(".wraper.delete-reservations")
);

// edit patient with employee
function pathIdPatient() {
  let btnEdit = document.querySelectorAll(
      ".services .services-border .tab-content .services-item .control-patient .edit"
    ),
    modalEditPatient = document.querySelector(".wraper.edit-patient"),
    inputHidden = document.querySelector(".wraper.edit-patient .input-hidden");

  btnEdit.forEach((link) => {
    link.addEventListener("click", (e) => {
      e.preventDefault();
      modalEditPatient.setAttribute("id", link.dataset.id);
      inputHidden.value = link.dataset.id;
      modalEditPatient.classList.add("active");
    });
  });
}
pathIdPatient();

// delete patient with employee
allLinksPopup(
  document.querySelectorAll(
    ".services .services-border .tab-content .services-item .control-patient .delete"
  ),
  document.querySelector(".wraper.delete-patient")
);

// add new patient with employee
allLinksPopup(
  document.querySelectorAll(
    ".services .services-border  .tab-content .services-item .submit .btn-add-patient"
  ),
  document.querySelector(".wraper.add-patient")
);

// change password

allLinksPopup(
  document.querySelectorAll(
    ".profile .container .links-profile .btn.change-password"
  ),
  document.querySelector(".wraper.change-password-popup")
);

// delete treament

allLinksPopup(
  document.querySelectorAll(
    ".services .services-border .services-content .services-item .treatment .table-treatment .btn.delete"
  ),
  document.querySelector(".wraper.delete-treatment")
);

allLinksPopup(
  document.querySelectorAll(
    ".main-header-page .header-content .header-text .btn-main-header"
  ),
  document.querySelector(".wraper.scanner")
);
