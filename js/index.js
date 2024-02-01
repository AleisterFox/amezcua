const burguerMenu = document.querySelector(".burguer-menu");
const navMenu = document.querySelector(".menu");
const header = document.querySelector("nav");

burguerMenu.addEventListener("click", () => {
  if (navMenu.style.display != "flex") {
    header.style.borderBottomLeftRadius = "0";
    header.style.borderBottomRightRadius = "0";
    navMenu.style.display = "flex";
  } else {
    navMenu.style.display = "none";
  }
});

// CONVIERTE VH A PX
function vhToPx(vh) {
  return Math.round(window.innerHeight * (vh / 100));
}

const options = document.querySelectorAll(".option");

options.forEach((option) => {
  let titleHeight = option.firstElementChild.clientHeight;
  // console.log(`Title: ${titleHeight}`);
  let contentHeight = option.lastElementChild.clientHeight;
  // console.log(`Content: ${contentHeight}`);
  let totalHeight = titleHeight + contentHeight;
  // console.log(`Total: ${totalHeight}`);
  option.style.height = `${titleHeight}px`;

  option.firstElementChild.addEventListener("click", () => {
    if (option.classList.contains("active")) {
      option.style.height = `${titleHeight}px`;
      option.classList.remove('active');
    } else {
      option.style.height = `${totalHeight}px`;
      option.classList.add('active');
    }
  });
});
