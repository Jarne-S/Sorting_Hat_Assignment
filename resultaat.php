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

                $nextID = $personID +1;
                $vote = $_POST["house"];
                //var_dump($vote);

                $max = $database->getQuery("(select max(Person_ID) from person)");
                $totaalAantalPersonen = $max[0]["max(Person_ID)"];

                $sqlAddVote = "INSERT INTO votes (House_ID , Person_ID) VALUES ('$vote' , '$personID')";
                $database->insertQuery($sqlAddVote);
                
                $sqlGryffindorAverage = "(select count(*) from votes where (House_ID = 1) && (Person_ID = '$personID'))" ;
                $gryffindorData = $database->getQuery($sqlGryffindorAverage);
                $gryffindorVotes = $gryffindorData[0]["count(*)"];

                $sqlHufflepuffAverage = "(select count(*) from votes where (House_ID = 2) && (Person_ID = '$personID'))" ;
                $hufflepuffData = $database->getQuery($sqlHufflepuffAverage);
                $hufflepuffVotes = $hufflepuffData[0]["count(*)"];

                $sqlRavenclawAverage = "(select count(*) from votes where (House_ID = 3) && (Person_ID = '$personID'))" ;
                $ravenclawData = $database->getQuery($sqlRavenclawAverage);
                $ravenclawVotes = $ravenclawData[0]["count(*)"];

                $sqlSlytherinAverage = "(select count(*) from votes where (House_ID = 4) && (Person_ID = '$personID'))" ;
                $slytherinData = $database->getQuery($sqlSlytherinAverage);
                $slytherinVotes = $slytherinData[0]["count(*)"];

                $totalVotes = $gryffindorVotes + $hufflepuffVotes + $ravenclawVotes + $slytherinVotes;

                $gryffindorAverage = round(($gryffindorVotes / $totalVotes)*100 , 0);;
                $hufflepuffAverage = round(($hufflepuffVotes / $totalVotes)*100 , 0);
                $ravenclawAverage = round(($ravenclawVotes / $totalVotes)*100 , 0);
                $slytherinAverage = round(($slytherinVotes / $totalVotes)*100 , 0);

                if ($nextID > $totaalAantalPersonen) {
                    ?>
                    <form method="POST" action="the-end.php">
                        <div class="flex space_evenly">
                            <button type="button" class="width voteButton buttonTekst gryffindor houseLogo nohover lettertype">
                                <?php echo $gryffindorAverage ?>% Gryffindor!
                            </button>

                            <button type="button" class="width voteButton buttonTekst hufflepuff houseLogo nohover lettertype">
                                <?php echo $hufflepuffAverage ?>% Hufflepuff!
                            </button>
                        </div>
                        

                        <div class="flex space_evenly margin">
                            <button type="button" class="width voteButton buttonTekst ravenclaw houseLogo nohover lettertype">
                                <?php echo $ravenclawAverage ?>% Ravenclaw!
                            </button>

                            <button type="button" class="width voteButton buttonTekst slytherin houseLogo nohover lettertype">
                                <?php echo $slytherinAverage ?>% Slytherin!
                            </button>
                        </div>
                        
                        <div class="flex margin">
                            <button type="submit" class="next_end voteButton buttonTekst lettertype">
                                The end
                            </button>
                        </div>
                    </form>
                    <?php
                }
                else{
                    ?>
                    <form method="POST" action="sorting.php?Person_ID=<?php echo $nextID; ?>">
                        <div class="flex space_evenly">
                            <button type="button" class="width voteButton buttonTekst gryffindor houseLogo nohover lettertype">
                                <?php echo $gryffindorAverage ?>% Gryffindor!
                            </button>

                            <button type="button" class="width voteButton buttonTekst hufflepuff houseLogo nohover lettertype">
                                <?php echo $hufflepuffAverage ?>% Hufflepuff!
                            </button>
                        </div>

                        <div class="flex space_evenly margin">
                            <button type="button" class="width voteButton buttonTekst ravenclaw houseLogo nohover lettertype">
                                <?php echo $ravenclawAverage ?>% Ravenclaw!
                            </button>

                            <button type="button" class="width voteButton buttonTekst slytherin houseLogo nohover lettertype">
                                <?php echo $slytherinAverage ?>% Slytherin!
                            </button>
                        </div>
                        
                        <div class="flex margin">
                            <button type="submit" class="next_end voteButton buttonTekst lettertype">
                                Go to the next person
                            </button>
                        </div>
                        
                    </form>
                <?php
                }
            ?>
        </div>
    </body>
</html>