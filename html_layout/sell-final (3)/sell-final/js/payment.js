// payment method slider
const slides = document.querySelectorAll(".slide");
const prevBtn = document.querySelector(".prevBtn");
const nextBtn = document.querySelector(".nextBtn");

let slideIndex = 0;
function showSlide(index) {
  slides.forEach((slide, i) => {
    if (i === index) {
      slide.classList.add("active");
    } else {
      slide.classList.remove("active");
    }
  });
}
function goToNextSlide() {
  slideIndex++;
  if (slideIndex >= slides.length) {
    slideIndex = 0;
  }
  showSlide(slideIndex);
  updatePagination(slideIndex);
  paymentInputModification();
}

function goToPrevSlide() {
  slideIndex--;
  if (slideIndex < 0) {
    slideIndex = slides.length - 1;
  }
  showSlide(slideIndex);
  updatePagination(slideIndex);
  paymentInputModification();
}

// pagination function
// create same pagincation indicator as slide
const pagination = document.querySelector(".pagination");
const allSlide = document.querySelectorAll(".slider .slide");
allSlide.forEach((item, index) => {
  const paginationIndicator = document.createElement("div");
  paginationIndicator.classList.add("pagination-indicator");
  // adding the active in the first indicator initially
  if (index == 0) {
    paginationIndicator.classList.add("active");
  }
  pagination.appendChild(paginationIndicator);
});
// update pagination when click next or prev
function updatePagination(slideIndex) {
  const pagination = document.querySelector(".pagination");
  const paginationIndicators = pagination.querySelectorAll(
    ".pagination-indicator"
  );

  for (let i = 0; i < paginationIndicators.length; i++) {
    if (i < slideIndex + 1) {
      paginationIndicators[i].classList.add("active");
    } else {
      paginationIndicators[i].classList.remove("active");
    }
  }
}

function paymentInputModification() {
  const creditCardSlide = document.querySelector(".slide.credit-card");
  const isCreditCardActive = creditCardSlide.classList.contains("active");
  if (isCreditCardActive) {
    document.querySelector(".service-fee").style.display = "flex";
    document.querySelector(".payment.event").style.display = "block";
  } else {
    document.querySelector(".service-fee").style.display = "none";
    document.querySelector(".payment.event").style.display = "none";
  }

  const bankTransferSlide = document.querySelector(".slide.bank-transfer");
  const isBankTransferActive = bankTransferSlide.classList.contains("active");
  if (isBankTransferActive) {
    document.querySelector(".file").style.display = "flex";
  } else {
    document.querySelector(".file").style.display = "none";
  }
}
