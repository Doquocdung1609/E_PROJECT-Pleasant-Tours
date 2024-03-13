document.addEventListener("DOMContentLoaded", function() {
  const signUpButton = document.getElementById("signUp");
  const signInButton = document.getElementById("signIn");
  const container = document.getElementById("container");
    
  signUpButton.addEventListener("click", () => {
      container.classList.add("right-panel-active");
  });
    
  signInButton.addEventListener("click", () => {
      container.classList.remove("right-panel-active");
  });
});


let menu = document.querySelector('#menu-btn');
let navbar = document.querySelector('.header .navbar');

menu.onclick = () => {
    menu.classList.toggle('fa-times');
    navbar.classList.toggle('active');
};

window.onscroll = () =>{
    menu.classList.remove('fa-times');
    navbar.classList.remove('active');
};