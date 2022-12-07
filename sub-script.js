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

// start.addEventListener("click", e => {
//   excel.classList.add('svgHorizontalMove');
//   excel.addEventListener("animationend", e => {
//     csv.classList.add('svgHorizontalMove');
//     csv.addEventListener("animationend", e => {
//       cogs.forEach(e => {
//         e.classList.remove('cog-ani');
//       })
//     })
//   })
// })

// const observer = new IntersectionObserver((entries)=>{
//   entries.forEach((entry)=>{
//     if(entry.isIntersecting){
//       entry.classList.add('svgHorizontalMove');
//     }
//   });
// });

// const hiddenGroups = document.querySelectorAll('.excel');

// hiddenGroups.forEach((el)=>observer.observe(el));


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
