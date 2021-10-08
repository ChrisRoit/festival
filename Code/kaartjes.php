<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/navbar.css" />
        <link rel="stylesheet" href="css/footer.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/kaartjes.css" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" />
        <script src="js/scroll-detect.js"></script>
    </head>
    <body>
        
        
            <?php include "includes/navbar.php"; ?>
        
        
        
        <main id="main-content">
            <div class="parallax">
                <div class="shadow-background">
                    <div class="jumbotron-wrapper">
                        <div class="square">
                        <div class="content">
                        <div class="custom-jumbotron">
                            <div id="formulier-wrapper">
                                <form action="#" method="POST">
                                    <label>Naam</label>
                                    <div class="input-wrapper">
                                        <input class="standard-input" type="text" name="name" autocomplete="off" required/>
                                    </div>              
                                    <label>Adres</label>
                                    <div class="input-wrapper">
                                        <input class="standard-input" type="text" name="address" autocomplete="off" required />
                                    </div>
                                    <label>Email</label>
                                    <div class="input-wrapper">
                                        <input class="standard-input" type="email" name="email" autocomplete="off" required />
                                    </div>
                                    <label>Aantal Kaartjes</label>
                                    <div class="input-wrapper">
                                        <input class="standard-input" type="number" min=1 name="amount" autocomplete="off" reqruired />
                                    </div>
                                    <div class="input-wrapper">
                                        <?php 
                                            $choices = array("vrijdag","zaterdag","beide");
                                            foreach($choices as $choice){
                                                echo "<input type='radio' name='day' value='$choice'>" . ucfirst($choice) . "</input>";
                                            }
                                        ?>
                                    </div>
                                    <div>
                                        <button class="custom-button" type="submit">Koop</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    </div>
                    </div>
                </div>
            </div>
            
        </main>
                                

        <?php include "includes/footer.php" ?>
    </body>
</html>