<!-- Start Gast Session -->
<?php

    session_set_cookie_params(3600);
    session_start();

?>
<!-- Ende Gast Session -->


<!-- Start Include Dateien -->
<?php include ("verbindung.php"); ?>
<!-- Ende Include Dateien -->


<!-- Start Voting anlegen -->
<?php

    $id = $_POST['id'];
    $sid = $_POST['sid'];
    $antwort = $_POST['antwort'];

    if (isset($antwort))
    {
        try
        {
            $abfr = $db->prepare('INSERT INTO Ergebnis (SID, Vote, VotID)
                                  VALUES (:sid, :antwort, :votid)');
            $abfr->bindParam(':sid', $sid, PDO::PARAM_INT);
            $abfr->bindParam(':antwort', $antwort, PDO::PARAM_INT);
            $abfr->bindParam(':votid', $id, PDO::PARAM_INT);
            $abfr->execute();
            //var_dump($abfr->errorInfo());
            unset($abfr);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        header("Location: https://mars.iuk.hdm-stuttgart.de/~fs096/danke.php");
    }
    else
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


?>
<!-- Ende Voting anlegen -->