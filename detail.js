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

document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.toggleButton');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Find the corresponding data paragraph
            const dataId = button.dataset.target;
            const dataParagraph = document.getElementById(dataId);

            // Toggle the visibility of the data paragraph
            if (dataParagraph) {
                dataParagraph.style.display = dataParagraph.style.display === 'none' ? 'block' : 'none';
            }
        });
    });
});


    

