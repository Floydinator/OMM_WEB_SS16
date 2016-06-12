<!-- Start Dozent in DB eintragen -->
<?php

    include ("verbindung.php");

    $typ = 1;
    $name = $_GET['name'];
    $email = $_GET['email'];
    $pw = rand();


    if (isset($name) AND isset($email))
    {
        $betreff = "Willkommen bei TeachBox!";
        $text = "Hallo,

        dein Benutzername lautet " . $name . " und dein Passwort ist " . $pw . "
        Log dich ein unter https://mars.iuk.hdm-stuttgart.de/~fs096/login.php

        Viele Grüße

        dein TeachBox Team";
        $absender = "From: TeachBox <fs096@hdm-stuttgart.de>";

        mail($email, $betreff, $text, $absender);

        $pw = md5($pw);

        try
        {
            $abfr = $db->prepare('INSERT INTO Benutzer (Typ, Benutzername, Passwort)
                                  VALUES (:typ, :name, :pw)');
            $abfr->bindParam(':typ', $typ, PDO::PARAM_STR);
            $abfr->bindParam(':name', $name, PDO::PARAM_STR);
            $abfr->bindParam(':pw', $pw, PDO::PARAM_STR);
            $abfr->execute();
            //var_dump($abfr->errorInfo());
            unset($abfr);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }

        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }
    else
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }


?>
<!-- Ende Dozent in DB eintragen -->
