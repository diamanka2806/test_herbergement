function versrestaurant()
{
    document.location.href="exemp.php?nom=diamanka";
}

function toggleNavMenu() {
    var navMenu = document.querySelector(".nav-menu");
    navMenu.classList.toggle("open");
}
function closeToggle()
{
    var menu=document.querySelector(".nav-menu");
    if(menu.classList.toggle("open"))
        menu.classList.remove("open");
}

function recherche()
{
    
    document.location.href="Vues/Page-Accueil.php";
}