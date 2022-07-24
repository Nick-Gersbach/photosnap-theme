const openMobileNav = document.querySelector(".open-menu");
const navMenu = document.querySelector(".nav-menu");
const toggleSwitch = document.querySelector(".slider");
const priceBoxPrice = document.querySelectorAll(".price-box-price");
const priceBoxPriceYear = document.querySelectorAll(".price-box-price-year");
const pricePerMonth = document.querySelectorAll(".price-per-month");
const pricePerYear = document.querySelectorAll(".price-per-year");

openMobileNav.addEventListener("click", openMobileNavNow);
toggleSwitch.addEventListener("click", changePricing);

function openMobileNavNow() {
  openMobileNav.classList.toggle("hide");
  navMenu.classList.toggle("show");
}

function changePricing() {
  for (const monthylyPriceBoxPrice of priceBoxPrice) {
    monthylyPriceBoxPrice.classList.toggle("hide");
  }

  for (const yearlyPriceBoxPrice of priceBoxPriceYear) {
    yearlyPriceBoxPrice.classList.toggle("show");
  }

  for (const monthlyPrice of pricePerMonth) {
    monthlyPrice.classList.toggle("hide-monthly-price");
  }

  for (const yearlyPrice of pricePerYear) {
    yearlyPrice.classList.toggle("show-yearly-price");
  }
}
