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

                $firstname = $_POST['firstname'];
                $lastname = $_POST['lastname'];
                $age = $_POST['age'];
                $gender = $_POST['gender'];
                $description = $_POST['life-description'];

                $picture = $_FILES['picture']['name'];
                $storagelocation = "assets/images/uploads/" . $picture;

                if (move_uploaded_file($_FILES['picture']['tmp_name'] , $storagelocation)) {
                    $sqlInsert = "INSERT INTO person (First_Name , Last_Name , Gender, Description , photo) VALUES ('$firstname' , '$lastname' , '$gender' , '$description' , '$picture')"; 
                    $database = new Database();
                    $database->insertQuery($sqlInsert);
                }
                else{
                    $sqlInsert = "INSERT INTO person (First_Name , Last_Name , Gender, Description) VALUES ('$firstname' , '$lastname' , '$gender' , '$description')"; 
                    $database = new Database();
                    $database->insertQuery($sqlInsert);
                }                
            ?>

            <div class="center flex">
                <img src="assets/images/success.gif" alt="succesfull" class="relative checkWidth">
                <h2 class="responsiveText2 absolute">
                    Person successfully added.
                </h2>
            </div>

            <div>
                <nav class="flex column">
                    <ul class="center">
                        <li class="list margin">
                            <a href="login.php" class="navbutton buttonTekst">
                                Add another person
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