<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="assets/css/style.css" rel="stylesheet" type="text/css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Dancing+Script&display=swap" rel="stylesheet">
        <title>Document</title>
    </head>
    <body>
        <div class="content lettertype">
            <?php
                include_once "includes/header.php";
                include "database/index.php";
                include "includes/personfile.php";
            ?>
            
            <form method="POST" action="resultaat.php?Person_ID=<?php echo $personID; ?>">
                <div class="flex space_evenly">
                    <button type="submit" name="house" value="1" class="width voteButton buttonTekst gryffindor houseLogo lettertype">
                        Gryffindor
                    </button>

                    <button type="submit" name="house" value="2" class="width voteButton buttonTekst hufflepuff houseLogo lettertype">
                        Hufflepuff
                    </button>
                </div>
                
                <div class="flex space_evenly margin">
                    <button type="submit" name="house" value="3" class="width voteButton buttonTekst ravenclaw houseLogo lettertype">
                        Ravenclaw
                    </button>

                    <button type="submit" name="house" value="4" class="width voteButton buttonTekst slytherin houseLogo lettertype">
                        Slytherin
                    </button>
                </div>
            </form> 
        </div>
    </body>
</html>