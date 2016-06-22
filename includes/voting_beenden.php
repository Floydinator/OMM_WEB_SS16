<!-- Start Include Dateien -->
<?php include ("session.php"); ?>
<?php include ("verbindung.php"); ?>
<!-- Ende Include Dateien -->

<!-- Start Voting beenden -->
<?php

    $name = $_GET["name"];
    $stmt = $db->prepare("UPDATE Voting
                          SET Live=:live
                          WHERE Votingname=:votingname");
    $stmt->bindValue(':live', 0, PDO::PARAM_INT);
    $stmt->bindParam(':votingname', $name, PDO::PARAM_STR);
    $stmt->execute();
    unset($stmt);

    header('Location: https://mars.iuk.hdm-stuttgart.de/~fs096/votings.php');

?>
<!-- Ende Voting beenden -->
