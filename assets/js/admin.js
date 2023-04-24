let add = document.querySelector('.add');
let dialAdd = document.querySelector('.dial-add');
let overlay = document.querySelector('.overlay');

add.addEventListener('click', ()=>{
dialAdd.open = 'open';
overlay.classList.remove('hidden')

});