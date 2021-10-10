<?php 

    //nested associative array met alle namen van de shows voor zaterdag en zondag
    $shows = array("ZATERDAG" => array("16 Horsepower","2 Many DJS","3 Doors Down","30 Seconds to Mars","37 Stabwoundz","ADHD","Above & Beyond"),
                    "ZONDAG" => array("Admiral Freebee","Afro Celt Sound System","Alter Forever","Air Traffic","Alan Stivell","Alanis Morissette","Alien Ant Farm"));
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/footer.css" />
    <link rel="stylesheet" href="css/navbar.css" />
    <link rel="stylesheet" href="css/informatie.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
    <script type="text/javascript" src="js/scroll-detect.js"></script>
    <title>Document</title>
</head>
<body>
    <header>
        <?php include "includes/navbar.php"; ?>
    </header>
    <main>
        <div class="parallax">
            <div class="custom-shadow-overlay">
                <div id="page-wrapper">
                    <div id="content-wrapper">
                    <?php
                        //de standaard table layout waar de table geopened wordt.
                        $beginTableLayout = "<div class='table-container'><table class='custom-table'><tr><th>Naam Optreden</th><th>Naam Podium</th><th>Tijd</th></tr>";
                        //de html waar de table door wordt afgesloten
                        $eindTableLayout = "</table></div>";
                        //voor elke key,vale
                        foreach($shows as $day => $show){
                            //zet de standaard tijd wanneer shows beginnen op 5 uur.
                            $currentTime = 17.00;
                            //echo de dag(key)
                            echo("<h2 class='table-title'>" . strtoupper($day) ."</h2>");
                            //echo de standaard opening html van de table en de benodigde wrappers/containers
                            echo $beginTableLayout;
                            //voor elke show naam in de show array van de dag waar we ons op bevinden.
                            foreach($show as $currentShow){
                                //echo de table row met benodigde data voor de specieke show die op die dag afspeelt (show naam,podium naam en tijd)
                                echo("<tr><td>$currentShow</td><td>Podium 1</td><td>$currentTime.00 uur</td></tr>");
                                //increment de tijd met 1 (dus 1 uur)
                                $currentTime++;
                            }
                            //echo de html waar de table door wordt afgesloten.
                            echo $eindTableLayout;
                        }
                    ?>
                        <div id="bottom-pixel-pusher"></div>
                    </div>
                    <!--
                    <div class="table-container">
                        <table>
                            <tr>
                                <th>Naam Optreden</th>
                                <th>Naam Podium</th>
                                <th>Tijd</th>
                            </tr>
                        </table>
                    </div>-->
                </div>
            </div>
        </div>
    </main>
    <?php include "includes/footer.php"; ?>
</body>
</html>