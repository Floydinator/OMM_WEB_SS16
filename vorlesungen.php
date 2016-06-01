<!DOCTYPE html>

<html lang="de">





    <head>


        <title>Dozentenbereich - Vorlesungen</title>

        <meta charset="utf-8"/>


        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->


        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/vorlesungen.css" rel="stylesheet" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Patua+One' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Roboto:700' rel='stylesheet' type='text/css'>
        <!-- Ende Custom CSS -->


        <!-- Start Include Dateien -->
        <?php include ("includes/verbindung.php"); ?>
        <!-- Ende Include Dateien -->


    </head>





    <body>


        <div id="full">
        
        <!-- Start Navigation -->
        <nav class="navbar navbar-default topnav" role="navigation">
            <div class="container topnav">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand topnav" id="brand"><span class="glyphicon glyphicon-home" aria-hidden="true"></span> TeachBox</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-right">
                                <div class="form-group">
                                    <a><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Vorlesungen</a>
                                    <a href="votings.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Votings</a>
                                    <a href="votings-anlegen.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Votings anlegen</a>
                                    <a href="papierkorb.php"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Papierkorb</a>
                                    <a href="login.php" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a>
                                </div>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Ende Navigation -->

        
        <!-- Start Vorlesungen auslesen -->
        <!-- Start Vorlesungen aus DB abfragen -->
        <?php
        //Auf die DB-Verbindung wird eine Methode eingesetzt, die einen String mit SQL akzeptiert und an die DB sendet.
        //Der Code wird in $abfr gespeichert
        try
        {
            $abfr = $db->prepare('SELECT Vorlesung.Vorlesungsname
                                  FROM Vorlesung, Benutzer
                                  WHERE Benutzer.Benutzername=:benutzername');
            $abfr->bindValue(':benutzername', 'Hausmann', PDO::PARAM_STR);
            $abfr->execute();
            $erg = $abfr->fetchAll();
            //var_dump($erg);
            unset($abfr);
        }
        catch(PDOException $e){
            echo $e->getMessage();
        }
        ?>
        <!-- Ende Vorlesungen aus DB abfragen -->


        <!-- Start Vorlesungen per foreach in Tabelle ausgeben -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <p class="überschrift">Bereits angelegte Vorlesungen</p>
                    <ul class="list-group">
                            <li class="list-group-item">Vorlesung 1
                                <div class="dropdown pull-right">
                                    <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
                                        <span class="caret"></span>
                                    </button>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#">Löschen</a></li>
                                    </ul>
                                </div>
                            </li>
                            <li class="list-group-item"></li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Start Dozenten per foreach in Tabelle ausgeben -->
        <!-- Ende Vorlesungen auslesen -->

        
        <!-- Start Vorlesung per Formular einlesen -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-4 col-md-offset-4"> 
                    <form role="form">
                        <div class="form-group" role="form" method="get" action="">
                            <p class="überschrift">Neue Vorlesung anlegen</p>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Vorlesung" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-md" id="button">Anlegen</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- Ende Vorlesung per Formular einlesen -->
        
        </div>    


        <!-- Start Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <p class="copyright small">&copy; 2016 Erich Keller, Lukas Vogelmann, Florian Schönberger</p>
                    </div>
                </div>
            </div>
        </footer>
        <!-- Ende Footer -->


    </body>





</html>