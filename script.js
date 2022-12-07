const cogs = document.querySelectorAll('.cog');
// const start = document.querySelector('#button-words-2');
var button_words = document.querySelector('#button-words-1');

for(var i=0; i < cogs.length; i++){
  cogs[i].addEventListener("mouseover", function(event){
    event.target.classList.add('cog-ani-finite');
  })
  cogs[i].addEventListener("animationend", function(event){
    event.target.classList.remove('cog-ani-finite');
  })
}

// const bubble_chat = document.querySelector('.speech-container');
// start.addEventListener("click", e => {
//   bubble_chat.classList.add('disappears');
// })

document.querySelectorAll(".drag-area__input").forEach(inputElement=>{
  const dragAreaElement = inputElement.closest(".drag-area");

  dragAreaElement.addEventListener("click", e => {
    inputElement.click();
  });

  inputElement.addEventListener("change", e => {
    if(inputElement.files.length) {
      updateThumbnail(dragAreaElement, inputElement.files[0]);
    }
  })

  dragAreaElement.addEventListener("dragover", e => {
    e.preventDefault();
    dragAreaElement.classList.add("drag-area--over");
  });

  ["dragleave", "dragend"].forEach(type => {
    dragAreaElement.addEventListener(type, e => {
      dragAreaElement.classList.remove("drag-area--over");
    });
  });

  dragAreaElement.addEventListener("drop", e => {
    e.preventDefault();
    if(e.dataTransfer.files.length) {
      inputElement.files = e.dataTransfer.files;
      updateThumbnail(dragAreaElement, e.dataTransfer.files[0]);
    }

    dragAreaElement.classList.remove("drag-area--over");
  });
});

function updateThumbnail(dragAreaElement, file) {
  let thumbnailElement = dragAreaElement.querySelector(".drag-area__thumb");

  if(dragAreaElement.querySelector(".talktext")) {
    dragAreaElement.querySelector(".talktext").remove();
  }

  if(!thumbnailElement) {
    thumbnailElement = document.createElement("div");
    thumbnailElement.classList.add("drag-area__thumb");
    dragAreaElement.appendChild(thumbnailElement);
  }

  thumbnailElement.dataset.label = file.name;
  button_words.style.visibility = "hidden";
}

