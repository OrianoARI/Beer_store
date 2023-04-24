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
    sideMenu.style.transition = "600ms";
    sideMenu.style.left = "0px";
    burger.style.transition = "600ms";
    burger.style.left = "0px";
    burger.style.borderRadius = "0 10px 10px 0";
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
    sideMenu.style.transition = "600ms";
    sideMenu.style.left = "-100px";
    burger.style.transition = "600ms";
    burger.style.left = "-100px";
    sideMenu.style.backgroundColor = "black";
    burger.style.borderRadius = "10px 10px 10px 10px";
};


burger.addEventListener('click', () => {
    console.log('click');
    if (burger.classList.contains("closed")) {
        console.log('closed');
        burger.classList.replace("closed", "opened");
        burgerMenuClosed();
    }else if (burger.classList.contains("opened")){
        burger.classList.replace("opened","closed");
        console.log('open');
        burgerMenuOpen()
    }
    
});








