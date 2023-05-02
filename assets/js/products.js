let add = document.querySelector('.add');
let dialAdd = document.querySelector('.dial-add');

let overlay = document.querySelector('.overlay');
let html = document.querySelector('html');
let body = document.querySelector('body');
let closeBtn = document.querySelector('.close-btn');


//============================================================================ modal add product function

add.addEventListener('click', () => {
    dialAdd.classList.replace ('modal-hidden', 'visible');
    overlay.classList.remove('hidden')
    html.style.overflow = 'hidden';
    body.style.overflow = 'hidden';
});

closeBtn.addEventListener('click', () => {
    dialAdd.classList.replace ('visible','modal-hidden');
    overlay.classList.add('hidden');
    html.style.overflow = 'visible';
    body.style.overflow = 'visible';
});

//======================================================================================== 
//============================================================================ menu

let menuContainer = document.querySelector('.menu-container');
let burger = document.querySelector('#menuBurger');
let burgerOne = document.querySelector('#burgerOne');
let burgerTwo = document.querySelector('#burgerTwo');
let burgerThree = document.querySelector('#burgerThree');
let sideMenu = document.querySelector('.side-menu');



function burgerMenuClosed() {
    burger.style.backgroundColor = "#e88e36";
    burgerOne.style.backgroundColor = "black";
    burgerThree.style.backgroundColor = "black";
    burgerTwo.style.backgroundColor = "black";
    burgerOne.style.transition = "600ms";
    burgerOne.style.transform = "rotate(45deg)";
    burgerThree.style.position = "absolute";
    burgerThree.style.transition = "600ms";
    burgerOne.style.transform = "rotate(45deg)";
    burgerThree.style.width = "0px";
    burgerTwo.style.position = "absolute";
    burgerTwo.style.transition = "600ms";
    burgerTwo.style.transform = "rotate(135deg)"
    menuContainer.style.transition = "600ms";
    menuContainer.style.left = sideMenu.offsetWidth + "px";
    burger.style.transition = "600ms";
    burger.style.left = "0px";
    sideMenu.style.backgroundColor = "#e88e36";
}

function burgerMenuOpen() {
    burger.style.backgroundColor = "black";
    burgerOne.style.backgroundColor = "#e88e36";
    burgerThree.style.backgroundColor = "#e88e36";
    burgerTwo.style.backgroundColor = "#e88e36";
    burgerOne.style.transition = "600ms";
    burgerOne.style.transform = "initial";
    burgerTwo.style.position = "initial";
    burgerTwo.style.transition = "600ms";
    burgerTwo.style.transform = "initial"
    burgerThree.style.width = "35px";
    burgerThree.style.transition = "600ms";
    burgerThree.style.position = "initial";
    menuContainer.style.transition = "600ms";
    menuContainer.style.left = "0%";
    burger.style.transition = "600ms";
    sideMenu.style.backgroundColor = "black";
};


burger.addEventListener('click', () => {
    console.log('click');
    if (burger.classList.contains("closed")) {
        console.log('closed');
        burger.classList.replace("closed", "opened");
        burgerMenuClosed();
    } else if (burger.classList.contains("opened")) {
        burger.classList.replace("opened", "closed");
        console.log('open');
        burgerMenuOpen()
    }

});

//================================================================




//updateBtn.forEach(btn =>{
//    btn.addEventListener('click', async(elem) => {
 //       let id = elem.target.getAttribute('data-id');
 //       let prod = await fetch('http://localhost/projetbiere/controllers/product_update_controller.php?productId=beer_Brooklin_East IPA')
  //      console.log(prod);
  //      prod = await prod.text()
  //      console.log(prod);
  //      dialUpdate.open = 'open';
   //     overlay.classList.remove('hidden')
   //     html.style.overflow = 'hidden';
   //     body.style.overflow = 'hidden';
  //      elem.stopPropagation();
  //  });
//})