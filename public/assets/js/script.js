// DARKMODE.JS
// function addDarkmodeWidget() {
//     new Darkmode().showWidget();
// }
// window.addEventListener('load', addDarkmodeWidget);

// const options = {
//     bottom: '64px', // default: '32px'
//     right: 'unset', // default: '32px'
//     left: '32px', // default: 'unset'
//     time: '0.5s', // default: '0.3s'
//     mixColor: '#fff', // default: '#fff'
//     backgroundColor: '#fff',  // default: '#fff'
//     buttonColorDark: '#100f2c',  // default: '#100f2c'
//     buttonColorLight: '#fff', // default: '#fff'
//     saveInCookies: false, // default: true,
//     label: '🌓', // default: ''
//     autoMatchOsTheme: true // default: true
// }

// const darkmode = new Darkmode(options);
// darkmode.showWidget();



// navbar
var menuButton = document.querySelector('#menu-button');
var menu = document.querySelector('#menu');

// show or hide
menuButton.addEventListener('click',function(){
    menu.classList.toggle('show-menu');
    menuButton.classList.toggle('close');
});

// darkmode homemade
const switchBtn = document.getElementById('switchMode');
const logo = document.querySelector('#logo');
const header = document.querySelector('.header');
const body = document.querySelector('body');
const title = document.querySelector('.header-title')
const burgerM = document.querySelector('#menu-button');

console.log(burgerM);
// burgerM.style.color='rgb(0, 0, 0)';
title.style.color='rgb(0, 0, 0)';
header.style.backgroundColor='rgb(255, 255, 255)';
body.style.backgroundColor='rgb(242, 242, 242)';
switchBtn.style.color='rgb(239, 215, 0)';

switchBtn.addEventListener('click', () =>{
    if (header.style.backgroundColor=='rgb(255, 255, 255)' && body.style.backgroundColor=='rgb(242, 242, 242)' && logo.src == 'http://pineapplephp.localhost/public/assets/img/pineappleDark.png' && title.style.color=='rgb(0, 0, 0)' && switchBtn.innerHTML=='☀️'){
        console.log(getComputedStyle(title).color);
        header.style.backgroundColor = '#000000';
        body.style.backgroundColor='rgb(51, 51, 51)';
        logo.src='http://pineapplephp.localhost/public/assets/img/pineapple.png';
        title.style.color='rgb(255, 255, 255)';
        switchBtn.innerHTML='☾';
        switchBtn.style.color='rgb(0, 0, 0)';
        burgerM.style.color='rgb(255, 255, 255)';
    } else {
        header.style.backgroundColor= 'rgb(255, 255, 255)';
        body.style.backgroundColor='rgb(242, 242, 242)';
        logo.src='http://pineapplephp.localhost/public/assets/img/pineappleDark.png';
        title.style.color='rgb(0, 0, 0)';
        switchBtn.innerHTML='☀️';
        switchBtn.style.color='rgb(255, 255, 255)';
        burgerM.style.color='rgb(0, 0, 0)';
    }
})