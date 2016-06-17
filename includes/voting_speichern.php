<!-- Start Voting anlegen -->
<?php

    include ("verbindung.php");

    $id = $_POST['id'];
    $antwort = $_POST['antwort'];

    if (isset($antwort))
    {
        try
        {
            $abfr = $db->prepare('INSERT INTO Ergebnis (Vote, VotID)
                                  VALUES (:antwort, :votid)');
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