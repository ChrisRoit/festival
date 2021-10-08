
//voeg een event listener toe die kijkt of de gebruiker scrollt
document.addEventListener("scroll",function(e){
    //pak de bovenste navbar element
    navbar = document.getElementById("navbar-background-color");
    //als de scrollY positie niet op 0 staat en de class main-navbar-wrapper-not-transparent niet in het boven gepakte navbar element zit.
    if(window.scrollY != 0 && navbar.classList.contains("main-navbar-wrapper-not-transparent") == false){
        //verwijder dan de main-navbar-wrapper-transparent class van de target element
        navbar.classList.remove("main-navbar-wrapper-transparent");
        //voeg de main-navbar-wrapper-not-transparent class toe aan de navbar zodat de css toegevoegd word die de navbar achtergrond een opacity van 1 geeft zodat het neon effect van de navbar weer zichtbaar is en de navbar niet meer 100% transparant is..
        navbar.classList.add("main-navbar-wrapper-not-transparent");
    //als de scrollY positie 0 is dus de gebruiker tot boven aan de pagina heeft gescrollt. verwijder dan de main-navbar-wrapper-not-transparent class zodat de navbar achtergrond een opacity van 0 krijgt en dus onzichtbaar/doorzichtig is.
    }else if(window.scrollY == 0){
        //verwijder de main-navbar-wrapper-not-transparent class
        navbar.classList.remove("main-navbar-wrapper-not-transparent");
        //voeg de main-navbar-wrapper-transparent class toe zodat de navbar achtergrond transparant wordt.
        navbar.classList.add("main-navbar-wrapper-transparent");
    }
});