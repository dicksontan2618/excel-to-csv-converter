const cogs = document.querySelectorAll('.cog');

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

function pageonLoad(){
  excel.classList.add('svgHorizontalMove');
  cogs.forEach(e => {
    e.classList.add('cog-ani');
  })
  excel.addEventListener("animationend", e => {
    csv.classList.add('svgHorizontalMove');
    csv.addEventListener("animationend", e => {
      cogs.forEach(e => {
        e.classList.remove('cog-ani');
      })
    })
  })
}

document.addEventListener("DOMContentLoaded", pageonLoad());
