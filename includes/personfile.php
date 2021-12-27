<?php
    $personID = $_GET["Person_ID"];
    //var_dump($personID);

    $sqlInsert = "(select * from person where Person_ID = '$personID')";
    $database = new Database();
    $persoon = $database->getQuery($sqlInsert);
    //var_dump($persoon[0]["First_Name"]);

    $voornaam = $persoon[0]["First_Name"];
    $achternaam = $persoon[0]["Last_Name"];
    $gender = $persoon[0]["Gender"];
    $description = $persoon[0]["Description"];
    $id = $persoon[0]["Person_ID"];
    $picture = $persoon[0]["photo"];
    if ($picture == "") {
        $picture = "person-icon.jpg";
    }
    ?>

    <div class="center">
        <div class="voornaam nameSize">
            <h2>
                <?php echo $voornaam; ?>
            </h2>
        </div>

        <img src="assets/images/uploads/<?php echo $picture ?>" alt="profile picture" class="profileWidth"/>

        <div class="general-info responsiveText beschrijvingsveld">
            <p class="volledigeNaam">
                <span class="bold">Full name:</span> <?php echo $voornaam . " " . $achternaam; ?>
            </p>
            <p class="geslacht">
                <span class="bold">Gender:</span> <?php echo $gender; ?>
            </p>
            <p class="beschrijving">
                <span class="bold">Description:</span><br/> 
                <?php echo $description; ?>
            </p>
            
        </div>
    </div>
    