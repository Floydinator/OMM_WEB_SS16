<!-- Start Include Dateien -->
<?php include ("session.php"); ?>
<?php include ("verbindung.php"); ?>
<!-- Ende Include Dateien -->


<!-- Start Voting anlegen -->
<?php

    $name = $_POST['name'];
    $frage = $_POST['frage'];
    $ant1 = $_POST['ant1'];
    $ant2 = $_POST['ant2'];
    $ant3 = $_POST['ant3'];
    $ant4 = $_POST['ant4'];

    if (!($name == "") AND !($frage == "") AND !($ant1 == "") AND !($ant2 == ""))
    {
        try
        {
            $abfr = $db->prepare('INSERT INTO Voting (VorID, Votingname, Frage, Ant1, Ant2, Ant3, Ant4, Live, Papierkorb)
                                  VALUES (:vorid, :name, :frage, :ant1, :ant2, :ant3, :ant4, :live, :papierkorb)');
            $abfr->bindValue(':vorid', 1, PDO::PARAM_INT);   //Später ersetzen gegen den Wert aus der DB
            $abfr->bindParam(':name', $name, PDO::PARAM_STR);
            $abfr->bindParam(':frage', $frage, PDO::PARAM_STR);
            $abfr->bindParam(':ant1', $ant1, PDO::PARAM_STR);
            $abfr->bindParam(':ant2', $ant2, PDO::PARAM_STR);
            $abfr->bindParam(':ant3', $ant3, PDO::PARAM_STR);
            $abfr->bindParam(':ant4', $ant4, PDO::PARAM_STR);
            $abfr->bindValue(':live', 0, PDO::PARAM_INT);
            $abfr->bindValue(':papierkorb', 0, PDO::PARAM_INT);
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