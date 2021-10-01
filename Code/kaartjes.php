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
        <main>
            <section id="formulier-wrapper">
                <form action="#" method="POST">
                    <label>Naam</label>
                    <div>
                        <input class="standard-input" type="text" name="name" required/>
                    </div>              
                    <label>Adres</label>
                    <div>
                        <input class="standard-input" type="text" name="address" required />
                    </div>
                    <label>Email</label>
                    <div>
                        <input class="standard-input" type="email" name="email" required />
                    </div>
                    <label>Aantal Kaartjes</label>
                    <div>
                        <input class="standard-input" type="number" name="amount" reqruired />
                    </div>
                    <div>
                        <?php 
                            $choices = array("vrijdag","zaterdag","beide");
                            foreach($choices as $choice){
                                echo "<input type='radio' name='day' value='$choice'>" . ucfirst($choice) . "</input>";
                            }
                        ?>
                    </div>
                    <div>
                        <button type="submit">Koop</button>
                    </div>
                </form>
            </section>
        </main>
        

        <?php include "includes/footer.php" ?>
    </body>
</html>