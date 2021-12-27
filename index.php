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
                include_once "includes/gif.php";
            ?>

            <div>
                <nav class="flex column">
                    <ul class="center">
                        <li class="list">
                            <a href="login.php" class="navbutton buttonTekst">
                                Add a person
                            </a>
                        </li>
                        
                        <li class="list margin">
                            <a href="sorting.php?Person_ID=1" class="navbutton buttonTekst">
                                Put a person into a house
                            </a>
                        </li>
                    </ul> 
                </nav>
            </div>
        </div>
    </body>
</html>