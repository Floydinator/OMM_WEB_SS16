<!DOCTYPE html>
    
<html lang="de">
    
    <head>

        <title>Administration</title>

        <meta charset="utf-8"/>


        <!-- Start Bootstrap Einbindung -->

        <link href="css/bootstrap.min.css" rel="stylesheet">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <!-- Ende Bootstrap Einbindung -->


        <!-- Start Custom CSS -->

        <link href="css/landing-page.css" rel="stylesheet">
        <link type="text/css" rel="stylesheet" href="css/admin.css">

        <!-- Ende Custom CSS -->


        <?php include ("includes/verbindung.php"); ?>
        <?php include ("includes/navigation.php"); ?>

    </head>
        
    <body>


    <!-- Start Dozenten auslesen -->

        <section class="container text-center">
            <div class="row text-center">
                <ul id="dozenten">
                    <li>Dozent 1</li>
                    <li>Dozent 2</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                </ul>
            </div>
        </section>

    <!-- Ende Dozenten auslesen -->


    <!-- Start Dozenten auslesen neu -->

        <!-- Start Dozenten per SQL abfragen -->

            <?php

                //Auf die DB-Verbindung wird eine Methode eingesetzt, die einen String mit SQL akzeptiert und an die DB sendet.
                //Der Code wird in $stmt gespeichert
                try{
                    $abfr = $db->prepare('SELECT Benutzer.Benutzername
                                                  FROM Benutzer 
                                                  WHERE Benutzer.Typ=:Typ');
                    $abfr->bindValue(':Typ', 1, PDO::PARAM_INT);
                    $abfr->execute();
                    //Gibt das Ergebnis in Form eines mehrdimensionalen Arrays zurück und speichert es in der Variablen $erg
                    $erg = $abfr->fetchAll();
                    var_dump($erg);
                    //Abfrage schließen
                    unset($abfr);
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }

            ?>

        <!-- Ende Dozenten per SQL abfragen -->

        <!-- Start Dozenten per foreach in Tabelle ausgeben -->



        <!-- Ende Dozenten per foreach in Tabelle ausgeben -->


    <!-- Ende Dozenten auslesen neu -->


    <!-- Start Registrierung -->

        <div class="formular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <form action="" method="post">
                    <input type="text" size="30" maxlength="50" name="dozent" placeholder="Neuer Dozent"><br><br>
                    <input type="submit" value="Anlegen!">
                    </form>
                    </div>
                </div>
	        </div>
	    </div>

    <!-- Ende Registrierung -->


    </body>
    
</html>
