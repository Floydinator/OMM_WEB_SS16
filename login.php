<!-- Start Session -->
<?php session_start(); ?>
<!-- Ende Session -->


<!-- Start Include Dateien -->
<?php include ("includes/verbindung.php"); ?>
<!-- Ende Include Dateien -->


<!-- Start Login -->
<?php

    $name = $_POST['name'];
    $_SESSION['username'] = $name;
    $pw = $_POST['pw'];
    $pw = md5($pw);
    $login = false;

    if (isset($name) AND isset($_SESSION['username']) AND isset($pw) AND isset($login))
    {
        //<!-- Start Benutzertyp in Variable $typ speichern -->
        try
        {
            $abfr = $db->prepare('SELECT Typ
                                  FROM Benutzer
                                  WHERE Benutzername=:benutzername');
            $abfr->bindValue(':benutzername', $name, PDO::PARAM_STR);
            $abfr->execute();
            $typ = $abfr->fetch();
            $typ = $typ['Typ'];
            unset($abfr);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        //<!-- Ende Benutzertyp in Variable $typ speichern -->


        //<!-- Start Passwort aus der Datenbank in Variable $pwabfr speichern -->
        try
        {
            $abfr = $db->prepare('SELECT Passwort
                                  FROM Benutzer
                                  WHERE Benutzername=:benutzername');
            $abfr->bindValue(':benutzername', $name, PDO::PARAM_STR);
            $abfr->execute();
            $pwabfr = $abfr->fetch();
            $pwabfr = $pwabfr['Passwort'];
            unset($abfr);
        }
        catch(PDOException $e)
        {
            echo $e->getMessage();
        }
        //<!-- Ende Passwort aus der Datenbank in Variable $pwabfr speichern -->


        //<!-- Start Benutzertyp und Passwort abgleichen -->
        if ($typ == 0 AND $pwabfr == $pw)
        {
            $login = true;
            if ($login = true)
            {
                //echo "admin.php";
                header('Location: https://mars.iuk.hdm-stuttgart.de/~fs096/admin.php');
                //exit;
            }
        }
        elseif ($typ == 1 AND $pwabfr == $pw)
        {
            $login = true;
            if ($login = true)
            {
                //echo "vorlesungen.php";
                header('Location: https://mars.iuk.hdm-stuttgart.de/~fs096/vorlesungen.php');
                //exit;
            }
        }
        //<!-- Ende Benutzertyp und Passwort abgleichen -->

    }
    else
    {
        header('Location: ' . $_SERVER['HTTP_REFERER']);
    }

?>
<!-- Ende Login -->





<!-- --------------------------------------------------- PHP -> HTML ----------------------------------------------- -->





<!DOCTYPE html>

<html lang="de">





    <head>


        <title>Startseite</title>

        <meta charset="utf-8"/>

        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->


        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/login.css" rel="stylesheet" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
        <script src="https://use.fontawesome.com/8c154eb0d5.js"></script>
        <!-- Ende Custom CSS -->


    </head>





    <body>


        <!-- Anfang Header -->
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-message">
                            <h1>TeachHaus</h1>
                            <h3 class="abstand">Ihre Anwendung für schnelle Umfragen!</h3>
                            <hr class="intro-divider">


                            <!-- Anfang Login-Formular -->
                            <div class="row">
                                <div class="col-md-4 col-md-offset-4 col-sm-12">
                                    <div class="clearfix"></div>
                                    <p class="lead">Anmelden und sofort loslegen!</p>

                                    <form class="formular" role="form" method="POST" action="login.php">
                                        <div class="formular-eingabe">
                                            <input type="text" class="form-control" id="name" name="name" placeholder="Benutzername">
                                        </div>
                                        <div class="formular-eingabe">
                                            <input type="password" class="form-control" id="pw" name="pw" placeholder="Passwort">
                                        </div>
                                        <button id="button" type="submit" class="btn btn-danger"><span class="glyphicon glyphicon-share-alt" aria-hidden="true"></span> Login</button>
                                    </form>

                                </div>
                            </div>
                            <!-- Ende Login-Formular -->


                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Ende Header -->

        
        <!-- Start Features -->
        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Was ist TeachHaus?</h2>
                        <p class="lead">TeachHaus ist eine Web-Anwendung für Lehrer, Dozenten und jeden der schnell, kostenlos und
                            effizient Umfragen erstellen möchte. Mit TeachHaus können Sie Umfragen erstellen, löschen, live schalten und
                            am Ende grafisch auswerten lassen.</p>
                    </div>
                    <div class="col-md-5 col-md-offset-2 col-sm-6">
                        <img src="img/search.svg" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>


        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-push-6  col-sm-6">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Umfragen erstellen</h2>
                        <p class="lead">Mit TeachHaus können Sie ganz einfach und schnell Umfragen für ihre Schüler, Studenten oder
                            Freunde erstellen. Sie erstellen eine Frage und können bis zu vier Antwortmöglichkeiten wählen.</p>
                    </div>
                    <div class="col-md-5 col-sm-pull-6  col-sm-6">
                        <img src="img/todo.svg" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>


        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Umfragen live schalten</h2>
                        <p class="lead">Haben Sie eine Umfrage erstellt, können Sie diese live schalten, dass bedeutet die Umfrage
                            ist geöffnet und Personen können daran teilnehmen. Dies geschieht über einen automatisch generierten Link.</p>
                    </div>
                    <div class="col-md-5 col-md-offset-2 col-sm-6">
                        <img src="img/share.svg" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>


        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-push-6  col-sm-6"">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Ergebnisse präsentieren</h2>
                    <p class="lead">Ist die Umfrage beendet, können die Ergebnisse grafisch aufbereitet präsentiert werden. </p>
                </div>
                <div class="col-md-5 col-sm-pull-6  col-sm-6">
                    <img src="img/presentation.svg" alt=""/>
                </div>
            </div>
        </div>
        <!-- /.container -->
        </div>
        <!-- Ende Features -->


        <!-- Start Footer -->
        <?php include ("includes/footer.php"); ?>
        <!-- Ende Footer -->


    </body>





</html>