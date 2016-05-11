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


        <!-- Ende Include Dateien -->

            <?php include ("includes/verbindung.php"); ?>
            <?php include ("includes/navigation.php"); ?>
            <?php include ("includes/reg.php"); ?>

        <!-- Ende Include Dateien -->


    </head>
        
    <body>


    <!-- Start Dozenten auslesen neu -->

        <!-- Start Dozenten aus DB abfragen -->

            <br /><br /><br /><br /><br /><br />  <!-- Diese Formatierung muss nicht unbedignt korrekt sein, kannst es gerne korrigieren Flo -->

            <?php

                //Auf die DB-Verbindung wird eine Methode eingesetzt, die einen String mit SQL akzeptiert und an die DB sendet.
                //Der Code wird in $abfr gespeichert
                try
                {
                    $abfr = $db->prepare('SELECT Benutzername
                                          FROM Benutzer 
                                          WHERE Typ=:typ');
                    $abfr->bindValue(':typ', 1, PDO::PARAM_INT);
                    $abfr->execute();
                    //Gibt das Ergebnis in Form eines mehrdimensionalen Arrays zurück und speichert es in der Variablen $abfr
                    //fetch wird nur zum auslesen benötigt
                    $erg = $abfr->fetchAll();
                //var_dump($abfr->errorInfo());
                    //Abfrage schließen
                    unset($abfr);
                }
                catch(PDOException $e){
                    echo $e->getMessage();
                }

            ?>

        <!-- Ende Dozenten aus DB abfragen -->

        <!-- Start Dozenten per foreach in Tabelle ausgeben -->

            <div class="row  row-centered">
                <div class="col-md-2"></div>
                <div class="col-md-8">
                    <ul class="list-group">
                        <?php foreach ($erg AS $dozent): ?>
                        <li class="list-group-item"><?php echo $dozent['Benutzername']; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class="col-md-2"></div>
            </div>

        <!-- Ende Dozenten per foreach in Tabelle ausgeben -->

    <!-- Ende Dozenten auslesen neu -->


    <!-- Start Dozenten per Formular einlesen -->

        <br /><br /><br /><br /><br /><br />  <!-- Diese Formatierung muss nicht unbedignt korrekt sein, kannst es gerne korrigieren Flo -->

        <div class="container">

            <div class="row  row-centered">
                <div class="col-md-4"></div>
                <div class="col-md-4">

                    <form role="form">

                        <div class="form-group" role="form" method="get" action="reg.php">
                            <label for="name">Neuer Dozent</label>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Benutzername" value="<?php echo $_GET['name']; ?>">

                        </div>

                        <button type="submit" class="btn btn-primary btn-md">Anlegen</button>

                    </form>

                </div>
                <div class="col-md-4"></div>
            </div>

        </div>

    <!-- Ende Dozenten per Formular einlesen -->


    </body>
    
</html>
