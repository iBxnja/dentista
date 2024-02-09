document.addEventListener('DOMContentLoaded', function () {
    console.log('¡DOM cargado correctamente para trabajar!.');

    const menuAbrir = document.getElementById('menuAbrir');
    const menuCerrar = document.getElementById('menuCerrar');
    const navbar = document.getElementById('navbar');
    const header = document.querySelector('header');

    const toggleMenu = () => {
        menuCerrar.classList.toggle('hidden');
        navbar.classList.toggle('hidden');
        menuAbrir.classList.toggle('hidden');
        header.classList.toggle('h-screen');
    };

    menuAbrir.addEventListener('click', toggleMenu);
    menuCerrar.addEventListener('click', toggleMenu);







});