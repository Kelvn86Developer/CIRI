
// WORKING WITH NAVBAR
const nav = document.querySelector('.nav');
const linksContainer = nav.querySelector('.links');
const menuBtn = nav.querySelector('#menu-bar');

menuBtn.addEventListener('click',()=>{
    menuBtn.classList.toggle('fa-times');
    linksContainer.classList.toggle('active');
});

window.onscroll = ()=> {
    linksContainer.classList.remove('active');
    menuBtn.classList.remove('fa-times');
}


// WINDOW ON SCROLL TO HIDE AND SHOW SECTIONS
let windowHeight = window.innerHeight;

window.addEventListener('scroll',()=> {

    if(document.documentElement.scrollTop > 50 ){
        nav.style.backgroundColor = '#fff';
    }

    else {
        nav.style.background = 'transparent';
    }
});
