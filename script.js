const cogs = document.querySelectorAll(".cog");
const start = document.querySelector("#button-words-2");

cogs.forEach((el) => {
  start.addEventListener("click", (e) => {
    el.classList.add("cog-ani");
  });
});

for (var i = 0; i < cogs.length; i++) {
  cogs[i].addEventListener("mouseover", function (event) {
    event.target.classList.add("cog-ani-finite");
  });
  cogs[i].addEventListener("animationend", function (event) {
    event.target.classList.remove("cog-ani-finite");
  });
}

const excel = document.querySelector(".excel");
const csv = document.querySelector(".csv");

start.addEventListener("click", (e) => {
  excel.classList.add("svgHorizontalMove");
  excel.addEventListener("animationend", (e) => {
    csv.classList.add("svgHorizontalMove");
    csv.addEventListener("animationend", (e) => {
      cogs.forEach((e) => {
        e.classList.remove("cog-ani");
      });
    });
  });
});

const bubble_chat = document.querySelector(".speech-container");
start.addEventListener("click", (e) => {
  bubble_chat.classList.add("disappears");
});

// var ornament_1 = document.querySelector('#ornament-1');
// var ornament_2 = document.querySelector('#ornament-2');
// var ornament_3 = document.querySelector('#ornament-3');
// var instruction_1 = document.querySelector('#instruction-1');
// var instruction_2 = document.querySelector('#instruction-2');
// var instruction_3 = document.querySelector('#instruction-3');

var ornament = document.querySelectorAll(".ornament");
var instruction_words = document.querySelectorAll(".instruction-words");

const mobileMediaQuery = window.matchMedia("(max-width: 768px)");

function handleMobileChange(e) {
  if (e.matches) {
    ornament[0].addEventListener("click", (er) => {
      ornament[0].style.display = "none";
      ornament[1].style.display = "flex";
      instruction_words[0].style.display = "none";
      instruction_words[1].style.display = "flex";
    });

    ornament[1].addEventListener("click", (er) => {
      ornament[1].style.display = "none";
      ornament[2].style.display = "flex";
      instruction_words[1].style.display = "none";
      instruction_words[2].style.display = "flex";
    });
  }
}

mobileMediaQuery.addListener(handleMobileChange);
handleMobileChange(mobileMediaQuery);

// const normalMediaQuery = window.matchMedia('(min-width: 769px)');

// function handleNormalChange(e) {
//   if(e.matches) {
//     ornament.forEach(e => {
//       e.style.display = 'flex';
//     })

//     instruction_words.forEach(e => {
//       e.style.display = 'flex';
//     })
//   }

// }

// normalMediaQuery.addListener(handleNormalChange);
// handleNormalChange(normalMediaQuery);
