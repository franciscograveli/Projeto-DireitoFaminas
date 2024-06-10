
document.addEventListener('DOMContentLoaded', function() {
    const toggler = document.querySelector('.navbar-toggler');
    const menu = document.querySelector('.navbar-menu');

    toggler.addEventListener('click', function() {
        menu.classList.toggle('active');
    });

    const container = document.querySelector('.container');
    container.addEventListener('click', function() {
        if(menu.classList.contains('active')){
            menu.classList.remove('active');
        }
    });
});

