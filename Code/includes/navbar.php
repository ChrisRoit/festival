<?php
    //een array met de namen van de paginas
    $pages = array("home","informatie","kaartjes");
    //pak de huidige pagina naam via een get request
    $current_page = $_GET["page"];
    //kijk of de get request variabel is ingesteld en dus bestaat
    if(!isset($current_page)){
        //als deze niet bestaat redirect dan terug naar de index pagina met de benodigde get request
        header("Location: index.php?page=home");
    }
    //kijk of de page get request var een van de paginas is die we hebben gemaakt.(We kijken hier in een ander if statement naar want we willen eerst weten of de page get request var uberhaupt is ingesteld voordat we er vergelijkingen mee gaan doen. Anders komt er een lelijke error op de pagina. Het is in dit geval dan beter om te redirecten)
    if(!in_array(strtolower($current_page),$pages)){
        //als deze pagina naam niet bestaat en dus niet in de pages array staat redirect dan ook terug naar de home pagina met de juiste page var data
        header("Location: index.php?page=home");
    }
?>

<div id="top-navbar">
    <nav>
        <div id="main-navbar-wrapper" class="navbar-flex">
            <div id="main-navbar-left" class="navbar-block navbar-flex">
                <ul class="main-navbar navbar-flex">
                    <li class="navbar-item navbar-flex"><a class="navbar-link navbar-flex <?php if($current_page == "home"){echo "active";} ?>" href="index.php?page=home">Home</a></li>
                    <li class="navbar-item navbar-flex"><a class="navbar-link <?php if($current_page == "informatie"){echo "active";} ?>" href="informatie.php?page=informatie">Informatie</a></li>
                </ul>
            </div>
            <div id="main-navbar-right" class="navbar-block navbar-flex">
                <ul class="main-navbar navbar-flex">
                    <li class="navbar-item navbar-flex"><a class="navbar-link <?php if($current_page == "kaartjes"){echo "active";} ?>" href="kaartjes.php?page=kaartjes">Kaartjes</a></li>
                </ul>
            </div>
        </div>
    </nav>
</div>