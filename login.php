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
            ?>

            <form method="POST" action="success.php" enctype="multipart/form-data" class="padding">
                <label for="form-firstname" class="responsiveText">
                        Firstname:
                </label>
                <br/>
                <input type="text" name="firstname" class="inputWidth" id="form-firstname" required/>
                
                <br/>
                <label for="form-lastname" class="responsiveText">
                        Lastname:
                </label>
                <br/>
                <input type="text" name="lastname" id="form-lastname" class="inputWidth" required/>

                <br/>

                <div>
                    <label for="form-picture" class="responsiveText">
                        Profile picture: (optional)
                    </label>
                    <br/>
                    <input type="file" id="form-picture" name="picture" accept="image/*" class="responsiveText lettertype">
                </div>


                <div>
                    <label for="form-gender" class="responsiveText">
                        Gender:
                    </label>
                    <br/>
                    <select name="gender" id="form-gender" class="inputWidth responsiveText lettertype">
                        <option value="Male">
                            Male
                        </option>

                        <option value="Female">
                            Female
                        </option>

                        <option value="Gender X">
                            x
                        </option>
                        
                    </select>               
                </div>

                <div>
                    <label for="form-life-description" class="responsiveText">
                        Description:
                    </label>
                    <br/>
                    <textarea id="form-life-description" name="life-description" required></textarea>
                </div>

                <input type="submit" value="Create account" class="responsiveText"/>
            </form>
        </div>
    </body>
</html>