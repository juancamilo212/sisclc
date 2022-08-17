const shrink_btn = document.querySelector(".shrink-btn");
const search = document.querySelector(".search");
const sidebar_links = document.querySelectorAll(".sidebar-links a");
const active_tab = document.querySelector(".active-tab");
const shortcuts = document.querySelector(".sidebar-links h4");
const tooltip_elements = document.querySelectorAll(".tooltip-element");

let activeIndex;

shrink_btn.addEventListener("click", () => {
  document.body.classList.toggle("shrink");
  setTimeout(moveActiveTab, 400);

  shrink_btn.classList.add("hovered");

  setTimeout(() => {
    shrink_btn.classList.remove("hovered");
  }, 500);
});



function moveActiveTab() {

  let topPosition = activeIndex * 58 + 2.5;
  active_tab.style.top = `${topPosition}px`;
}

function changeLink(e) {
  console.log(e);
  sidebar_links.forEach((sideLink) => sideLink.classList.remove("active"));
  this.classList.add("active");
  activeIndex = this.dataset.active;
  moveActiveTab();
}



sidebar_links.forEach((link) => link.addEventListener("click", changeLink));

