/* Menu bar toggle */

/*
$(document).ready(function() {
    $().click(function() {
        $('ul').toggleClass('show')
    });
});
let menu = document.querySelector('#menu-bar');
let naviBar = document.querySelector('.naviBar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    naviBar.classList.toggle('active');
}

window.onscroll = () => {
    menu.classList.remove('fa-times');
    naviBar.classList.remove('active');
}*/



/*Login/Register forms */
/*
const loginForm = document.querySelector('.loginForm');
const loginLink = document.querySelector('.login-link');
const registerLink = document.querySelector('.register-link');
const btnPopUp = document.querySelector('.LgnBtn');
const iconClose = document.querySelector('.icon-close');

registerLink.addEventListener('click',()=>{
    loginForm.classList.add('active');
});

loginLink.addEventListener('click',()=>{
    loginForm.classList.remove('active');
});

btnPopUp.addEventListener('click',()=>{
    loginForm.classList.add('active-popup');
});

iconClose.addEventListener('click',()=>{
    loginForm.classList.remove('active-popup');
});*/

/*
const signinLink = document.querySelector("#signin-link");
const signupLink = document.querySelector("#signup-link");
const signinForm = document.querySelector("#login-form");
const signupForm = document.querySelector("#sign-up-form");

signinLink.addEventListener("click", function() {
    signinForm.classList.add("active");
    signupForm.classList.remove("active");
});

signupLink.addEventListener("click", function() {
    signupForm.classList.add("active");
    signinForm.classList.remove("active");
}); */
/*
let signUpForm = document.querySelector('.sign-up-form');

document.querySelector('#sign-up-link').onclick = ()=>{
    loginForm.classList.toggle('active');
}*/

let loginForm = document.querySelector('.login-form');

document.querySelector('#LgnBtn').onclick = ()=>{
    loginForm.classList.toggle('active');
}

const showSignUpForm = document.querySelector('#sign-up-link');
const showSignInForm = document.querySelector('#sign-in-link');
const signUpForm = document.querySelector('.sign-up-form');

showSignUpForm.addEventListener('click', (event) => {
  event.preventDefault();

  loginForm.classList.remove('active');
  signUpForm.classList.add('active');
});

showSignInForm.addEventListener('click', (event) => {
    event.preventDefault();
  
    signUpForm.classList.remove('active');
    loginForm.classList.add('active');
});

let navBar = document.querySelector('.naviBar');

document.querySelector('#menu-bar').onclick = ()=>{
    navBar.classList.toggle('active');
}

/*Add onclick function for submit booking button*/

/*SignUp form validation */
const validation = new JustValidate("#sign-up-form");

validation
    .addField("#name",[{rule: "required"}])
    .addField("#email",[{rule: "required"}, {rule: "email"}])
    .addField("#password",[{rule: "required"}, {rule:"password"}])
    .addField("#passwordConfirmation",[{validator: (value, fields) => {return value === fields["#password"].elem.value;}, errorMessage: "Passwords do not match"}])
    .onSuccess((event) => { document.getElementById("sign-up-form").submit(); });