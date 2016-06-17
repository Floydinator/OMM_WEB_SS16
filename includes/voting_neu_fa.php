<!-- Start Voting anlegen -->
<?php

    include ("verbindung.php");

    $name = $_POST['name'];
    $frage = $_POST['frage'];
    $ant1 = $_POST['ant1'];
    $ant2 = $_POST['ant2'];
    $ant3 = $_POST['ant3'];
    $ant4 = $_POST['ant4'];

    if (isset($name) AND isset($frage) AND isset($ant1) AND isset($ant2) AND isset($ant3) AND isset($ant4))
    {
        try
        {
            $abfr = $db->prepare('UPDATE Voting
                                  SET Frage = :frage, Ant1 = :ant1, Ant2 = :ant2, Ant3 = :ant3, Ant4 = :ant4
                                  WHERE Votingname = :name');
            $abfr->bindParam(':frage', $frage, PDO::PARAM_STR);
            $abfr->bindParam(':ant1', $ant1, PDO::PARAM_STR);
            $abfr->bindParam(':ant2', $ant2, PDO::PARAM_STR);
            $abfr->bindParam(':ant3', $ant3, PDO::PARAM_STR);
            $abfr->bindParam(':ant4', $ant4, PDO::PARAM_STR);
            $abfr->bindParam(':name', $name, PDO::PARAM_STR);
            $abfr->execute();
            //var_dump($abfr->errorInfo());
            unset($abfr);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        header('Location: https://mars.iuk.hdm-stuttgart.de/~fs096/votings.php');
    }
    else
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


?>
<!-- Ende Voting anlegen -->