<!-- Start Include Dateien -->
<?php include ("verbindung.php"); ?>
<!-- Ende Include Dateien -->


<?php $name = $_GET["name"]; ?>


<!-- Start id auslesen -->
<?php

    try
    {
        $abfr = $db->prepare('SELECT VotID
                              FROM Voting
                              WHERE Votingname=:name');
        $abfr->bindValue(':name', $name, PDO::PARAM_STR);
        $abfr->execute();
        $id = $abfr->fetch();
        $id = $id['VotID'];
        unset($abfr);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

?>
<!-- Ende id auslesen -->


<!-- Start Votings in DB löschen -->
<?php

    try
    {
        $stmt3 = $db->prepare("DELETE FROM Ergebnis
                               WHERE VotID=:votid");
        $stmt3->bindValue(':votid', $id, PDO::PARAM_INT);
        $stmt3->execute();
        unset($stmt3);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

?>
<!-- Ende Votings in DB löschen -->


<!-- Start Voting Live schalten -->
<?php

    try
    {
        $stmt = $db->prepare("UPDATE Voting
                              SET Live=:live
                              WHERE Votingname=:votingname");
        $stmt->bindValue(':live', 1, PDO::PARAM_INT);
        $stmt->bindParam(':votingname', $name, PDO::PARAM_STR);
        $stmt->execute();
        unset($stmt);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    header("Location: https://mars.iuk.hdm-stuttgart.de/~fs096/live.php?name=$name&id=$id");

?>
<!-- Ende Voting Live schalten -->


