const cogs = document.querySelectorAll('.cog');
const start = document.querySelector('#button-words-2');

cogs.forEach(el => {
  start.addEventListener("click", e => {
    el.classList.add('cog-ani');
  })
})

for(var i=0; i < cogs.length; i++){
  cogs[i].addEventListener("mouseover", function(event){
    event.target.classList.add('cog-ani-finite');
  })
  cogs[i].addEventListener("animationend", function(event){
    event.target.classList.remove('cog-ani-finite');
  })
}

const excel = document.querySelector('.excel');
const csv = document.querySelector('.csv');

start.addEventListener("click", e => {
  excel.classList.add('svgHorizontalMove');
  excel.addEventListener("animationend", e => {
    csv.classList.add('svgHorizontalMove');
    csv.addEventListener("animationend", e => {
      cogs.forEach(e => {
        e.classList.remove('cog-ani');
      })
    })
  })
})

const bubble_chat = document.querySelector('.speech-container');
start.addEventListener("click", e => {
  bubble_chat.classList.add('disappears');
})
