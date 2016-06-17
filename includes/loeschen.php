<!-- Start Voting in Papierkorb verschieben -->
<?php

    include ("verbindung.php");

    $name = $_GET["name"];

    $stmt = $db->prepare("UPDATE Voting
                          SET Papierkorb=:papierkorb
                          WHERE Votingname=:votingname");
    $stmt->bindValue(':papierkorb', 1, PDO::PARAM_INT);
    $stmt->bindParam(':votingname', $name, PDO::PARAM_STR);
    $stmt->execute();
    unset($stmt);

    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
<!-- Ende Voting in Papierkorb verschieben -->