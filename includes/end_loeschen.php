<!-- Start Voting endgültig löschen -->
<?php

    include ("verbindung.php");

    $name = $_GET["name"];

    try
    {
        $stmt3 = $db->prepare("DELETE FROM Voting
                               WHERE Votingname=:name");
        $stmt3->bindParam(':name', $name, PDO::PARAM_STR);
        $stmt3->execute();
        unset($stmt3);
    }
    catch(PDOException $e)
    {
        echo $e->getMessage();
    }

    header('Location: ' . $_SERVER['HTTP_REFERER']);

?>
<!-- Ende Voting endgültig löschen -->
