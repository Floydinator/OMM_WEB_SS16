<!-- Start Voting anlegen -->
<?php

    include ("verbindung.php");

    $name = $_GET['name'];

    if (isset($name))
    {
        try
        {
            $abfr = $db->prepare('INSERT INTO Voting (Votingname)
                                  VALUES (:name)');
            $abfr->bindParam(':name', $name, PDO::PARAM_STR);
            $abfr->execute();
            //var_dump($abfr->errorInfo());
            unset($abfr);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        header("Location: https://mars.iuk.hdm-stuttgart.de/~fs096/votings-anlegen.php?name=$name");
    }
    else
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


?>
<!-- Ende Voting anlegen -->