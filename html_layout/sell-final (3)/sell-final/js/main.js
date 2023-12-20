// product image popup

function productImgPopupEvent(event) {
  productPopup.style.display = "flex";
  //   select the product item which image was clicked
  const clickedProuct = event.currentTarget.closest(".product");
  //   set the corresponding product image in the preview poupbox
  productPopup.querySelector(".product-popup-view-image").src =
    clickedProuct.querySelector(".product__image").src;
  // set first tab image src
  productPopup.querySelector(".product-popup-tab-image .first").src =
    clickedProuct.querySelector(".product__image").src;
  // same way set the product title
  productPopup.querySelector(".product-popup__title").innerText =
    clickedProuct.querySelector(".product__caption").innerText;
  // set sku value
  productPopup.querySelector(".product-popup__sku").innerText =
    clickedProuct.querySelector(".product__sku").innerText;
  // set tag value
  productPopup.querySelector(".product-popup__tag").innerText =
    clickedProuct.querySelector(".product__tag").innerText;
  // set size value
  productPopup.querySelector(".product__size-select").innerHTML =
    clickedProuct.querySelector(".product__size-select").innerHTML;
  // set stock value
  productPopup.querySelector(".product__stock-count").innerText =
    clickedProuct.querySelector(".product__stock-count").innerText;
  // set price value
  productPopup.querySelector(".product__popup-price").innerText =
    clickedProuct.querySelector(".product__price").innerText;
}
const productPopup = document.querySelector(".product-popup");
const allProductImages = document.querySelectorAll(".product__image");
allProductImages.forEach((productImage) => {
  // display the popup box after clicking on product image
  productImage.addEventListener("click", (event) => {});
});
// close the popup after clicking on close button
const productPopupClose = document.querySelector(".product-popup__close");
productPopupClose.addEventListener("click", () => {
  productPopup.style.display = "none";
});

// setting the height in products section
const navAndSearchWrapper = document.querySelector(".nav-and-search-wrapper");
const products = document.querySelector(".products");

const navAndSearchHeight = navAndSearchWrapper.offsetHeight;
products.style.height = window.innerHeight - navAndSearchHeight + "px";

// product popup image gallery tab
function imageViewProductGallery(event) {
  productPopup.querySelector(".product-popup-view-image").src =
    event.currentTarget.src;
}

// language switch button
const langSwitchToggle = document.querySelector(".language-toggle");
const langSwitchBtn = document.querySelector(".lang__round-button");

langSwitchToggle.addEventListener("click", (event) => {
  const isButtonPositionRight = langSwitchBtn.classList.contains("right");
  if (isButtonPositionRight) {
    langSwitchBtn.classList.remove("right");
    langSwitchBtn.classList.add("left");
    langSwitchToggle.setAttribute("data-lang", "th");
  } else {
    langSwitchBtn.classList.remove("left");
    langSwitchBtn.classList.add("right");
    langSwitchToggle.setAttribute("data-lang", "en");
  }
});
