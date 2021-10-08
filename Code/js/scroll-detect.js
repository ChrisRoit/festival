
//voeg een event listener toe die kijkt of de gebruiker scrollt
document.addEventListener("scroll",function(e){
    //pak de bovenste navbar element
    navbar = document.getElementById("main-navbar-wrapper");
    //als de scrollY positie niet op 0 staat en de class main-navbar-wrapper-transparent niet in het boven gepakte navbar element zit.
    if(window.scrollY != 0 && navbar.classList.contains("main-navbar-wrapper-transparent") == false){
        //voeg de main-navbar-wrapper-transparent class toe aan de navbar zodat de css toegevoegd word die de navbar 100% transparant maakt.
        navbar.classList.add("main-navbar-wrapper-transparent");
    //als de scrollY positie 0 is dus de gebruiker tot boven aan de pagina heeft gescrollt. verwijder dan de main-navbar-wrapper-transparent class zodat het neon effect van de navbar weer zichtbaar is en de navbar niet meer 100% transparant is.
    }else if(window.scrollY == 0){
        navbar.classList.remove("main-navbar-wrapper-transparent");
    }
});