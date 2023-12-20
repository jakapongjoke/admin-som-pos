// PRODUCT ADD IN CART
function addProductToCart(event) {
  const productItem = event.currentTarget.closest(".product-event");
  const productImage = productItem.querySelector(".product__image-event");
  const productSku = productItem.querySelector(".product__sku-event");
  const productTag = productItem.querySelector(".product__tag-event");
  const productSize = productItem.querySelector(".product__size-event");
  const productPrice = productItem.querySelector(".product__price-event");

  const li = document.createElement("li");
  li.classList.add("cart__product-item");
  li.innerHTML = `
    <div class="cart__product-image-wrapper">
        <img src="${productImage.src}" alt="" class="cart__product-image">
    </div>
    <div class="cart__product-info">
        <div class="cart__product-sku">${productSku.innerText}</div>
        <div class="cart__product-tag">${productTag.innerText}</div>
        <div class="cart__product-size">Size ${productSize.value}</div>
    </div>
    <div class="cart__product-counter">
        <div class="cart__product-decrease-btn" onclick="ProductQuantityDecrease(event)">
            <i class="fa-solid fa-minus"></i>
        </div>
        <span class="cart__product-quantity">1</span>
        <div class="cart__product-increase-btn" onclick="ProductQuantityIncrease(event)">
            <i class="fa-solid fa-plus"></i>
        </div>
    </div>
    <div class="cart__product-price-and-remove">
        <div class="cart__product-price">${productPrice.innerText}</div>
        <button class="cart__product-remove-btn" onclick="removeProductFromCart(event)">Remove</button>
    </div>
  `;
  document.querySelector(".cart__products").appendChild(li);

  // update the total product value and change status
  cartTotalProduct();

  // display the coupon and checkout section
  document.querySelector(".checkout-sell-page").style.display = "block";
  document.querySelector(".coupon-and-discount").style.display = "flex";
}

// PRODUCT REMOVE FROM CART
function removeProductFromCart(event) {
  event.currentTarget.closest(".cart__product-item").remove();
  // update the total product value
  cartTotalProduct();

  //  if cart got empty by removing all product then hide the coupon and checkout section
  const cardProductItem = document.querySelectorAll(".cart__product-item");
  if (cardProductItem.length == 0) {
    document.querySelector(".checkout-sell-page").style.display = "none";
    document.querySelector(".coupon-and-discount").style.display = "none";
  }
}

// a function to check and update total product (start)
function cartTotalProduct() {
  const cartProducts = document.querySelectorAll(".cart__product-item");
  const totalCalculateSection = document.querySelector(
    ".cart__total-item-wrapper"
  );
  if (cartProducts.length == 0) {
    totalCalculateSection.style.display = "none";
    document.querySelector(".status.sell").classList.remove("complete");
  } else if (cartProducts.length > 0) {
    totalCalculateSection.style.display = "block";
    document.querySelector(".status.sell").classList.add("complete");
  }
  totalCalculateSection.querySelector(
    ".cart__total-item"
  ).innerText = `Total ${cartProducts.length} item`;
}

// cart product quatity counter start
function ProductQuantityIncrease(event) {
  const productQuantityElement = event.currentTarget
    .closest(".cart__product-item")
    .querySelector(".cart__product-quantity");
  let currentQuantity = Number(productQuantityElement.innerText);
  productQuantityElement.innerText = ++currentQuantity;
}

function ProductQuantityDecrease(event) {
  const productQuantityElement = event.currentTarget
    .closest(".cart__product-item")
    .querySelector(".cart__product-quantity");
  let currentQuantity = Number(productQuantityElement.innerText);
  if (currentQuantity > 1) {
    productQuantityElement.innerText = --currentQuantity;
  }
}
