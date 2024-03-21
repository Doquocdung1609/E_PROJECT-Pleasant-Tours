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
    const dataParagraph = document.getElementById('data1');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the visibility of the data paragraph
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.toggleButton2');
    const dataParagraph = document.getElementById('data2');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the visibility of the data paragraph
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.toggleButton3');
    const dataParagraph = document.getElementById('data3');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the visibility of the data paragraph
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.toggleButton4');
    const dataParagraph = document.getElementById('data4');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the visibility of the data paragraph
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.toggleButton5');
    const dataParagraph = document.getElementById('data5');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the visibility of the data paragraph
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        });
    });
});

document.addEventListener('DOMContentLoaded', function() {
    const plusButtons = document.querySelectorAll('.toggleButton6');
    const dataParagraph = document.getElementById('data6');

    plusButtons.forEach(function(button) {
        button.addEventListener('click', function() {
            // Toggle the visibility of the data paragraph
            if (dataParagraph.style.display === 'none') {
                dataParagraph.style.display = 'block';
            } else {
                dataParagraph.style.display = 'none';
            }
        });
    });
});