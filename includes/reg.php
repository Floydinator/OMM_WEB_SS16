<!-- Start Dozent in DB eintragen -->

    <?php

        try
        {
            $typ = 1;
            $name = $_GET['name'];
            $passwort = rand();

            //Neuen Dozenten anlegen
            $abfr = $db->prepare('INSERT INTO Benutzer (Typ, Benutzername, Passwort)
                                  VALUES (:typ, :benutzername, :passwort)');
            $abfr->bindParam(':typ', $typ, PDO::PARAM_STR);
            $abfr->bindParam(':benutzername', $name, PDO::PARAM_STR);
            $abfr->bindParam(':passwort', $passwort, PDO::PARAM_STR);
            $abfr->execute();
            //var_dump($abfr->errorInfo());
            unset($abfr);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }

        header('Location: ' . $_SERVER['HTTP_REFERER']);

    ?>

<!-- Ende Dozent in DB eintragen -->
