<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel="stylesheet" href="css/footer.css" />
        <link rel="stylesheet" href="css/style.css" />
        <link rel="stylesheet" href="css/kaartjes.css" />
    </head>
    <body>
        <header>
            <?php include "includes/navbar.php"; ?>
        </header>
        <main id="main-content">
            <div class="jumbotron-wrapper">
                <div class="custom-jumbotron">
                    <section id="formulier-wrapper">
                        <form action="#" method="POST">
                            <label>Naam</label>
                            <div class="input-wrapper">
                                <input class="standard-input" type="text" name="name" required/>
                            </div>              
                            <label>Adres</label>
                            <div class="input-wrapper">
                                <input class="standard-input" type="text" name="address" required />
                            </div>
                            <label>Email</label>
                            <div class="input-wrapper">
                                <input class="standard-input" type="email" name="email" required />
                            </div>
                            <label>Aantal Kaartjes</label>
                            <div class="input-wrapper">
                                <input class="standard-input" type="number" min=1 name="amount" reqruired />
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
                    </section>
                </div>
            </div>
        </main>
        

        <?php include "includes/footer.php" ?>
    </body>
</html>