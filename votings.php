<!DOCTYPE html>

<html lang="de">





    <head>


        <title>Dozentenbereich - Votings</title>

        <meta charset="utf-8"/>


        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->


        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/votings.css" rel="stylesheet" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
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
                    <a class="navbar-brand topnav" id="brand"><span id="brand-glyphicon" class="glyphicon glyphicon-home" aria-hidden="true"></span> TeachBox</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-right">
                                <a href="vorlesungen.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Vorlesungen</a>
                                <a><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Votings</a>
                                <a href="votings-anlegen.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Votings anlegen</a>
                                <a href="papierkorb.php"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Papierkorb</a>
                                <a href="login.php" class="btn btn-danger" role="button"><span class="glyphicon glyphicon-off" aria-hidden="true"></span> Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Ende Navigation -->


        <!-- Start Votings auslesen -->
        <!-- Start Votings aus DB abfragen -->
        <?php
            //Auf die DB-Verbindung wird eine Methode eingesetzt, die einen String mit SQL akzeptiert und an die DB sendet.
            //Der Code wird in $abfr gespeichert
            try
            {
                $abfr = $db->prepare('SELECT Votingname
                                      FROM Voting
                                      WHERE Papierkorb=:papierkorb');
                $abfr->bindValue(':papierkorb', 0, PDO::PARAM_INT);
                $abfr->execute();
                $erg = $abfr->fetchAll();
                //var_dump($erg);
                unset($abfr);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
        ?>
        <!-- Ende Votings aus DB abfragen -->


        <!-- Start Votings per foreach in Tabelle ausgeben -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <p class="überschrift">Bereits angelegte Votings</p>
                    <ul class="nav nav-pills nav-stacked" id="pills">

                        <?php foreach ($erg AS $voting): ?>
                            <li class="dropdown">
                                <a class="dropdown-toggle" data-toggle="dropdown" href="#"><?php echo $voting['Votingname']; ?>
                                    <span class="caret"></span></a>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li><a href="includes/loeschen.php?name=<?php echo $voting['Votingname']; ?>">Löschen</a></li>
                                </ul>
                            </li>
                        <?php endforeach; ?>

                    </ul>
                </div>
            </section>
        </div>
        <!-- Ende Votings per foreach in Tabelle ausgeben -->
        <!-- Ende Votings auslesen -->
        

        <!-- Start Voting per Formular einlesen -->
        <div class="container" id="formular">
            <section class="row  row-centered">
                <div class="col-md-4 col-md-offset-4">
                    <form role="form" method="GET" action="includes/voting_neu.php">
                        <div class="form-group">
                            <p class="überschrift">Neues Voting anlegen</p>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Votingname">
                        </div>
                        <button type="submit" class="btn btn-primary btn-md" id="button">Anlegen</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- Ende Voting per Formular einlesen -->


        </div>


        <!-- Modal -->
        <div id="live" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ihre Umfrage ist nun live!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Unter diesem Link können Personen daran teilnehmen:</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div id="beenden" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ihre Umfrage ist nun geschlossen!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Es können keine weiteren Personen teilnehmen.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div id="ergebnisse" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Hier sehen Sie die Ergebnisse Ihres Votings grafisch dargestellt!</h4>
                    </div>
                    <div class="modal-body">

                        <p>Antwort 1</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style=" min-width: 2em; width: 60%;">
                                60%
                            </div>
                        </div>

                        <p>Antwort 2</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100" style=" min-width: 2em; width: 0%;">
                                0%
                            </div>
                        </div>

                        <p>Antwort 3</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="90" aria-valuemin="0" aria-valuemax="100" style=" min-width: 2em; width: 90%;">
                                90%
                            </div>
                        </div>

                        <p>Antwort 4</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: 25%;">
                                25%
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Modal -->
        <div id="löschen" class="modal fade" role="dialog">
            <div class="modal-dialog">

                <!-- Modal content-->
                <div class="modal-content">
                    <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title">Ihr Voting ist nun gelöscht!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Gelöschte Votings können Sie im Papierkorb wiederherstellen oder endgültig löschen.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                    </div>
                </div>

            </div>
        </div>


        <!-- Start Footer -->
        <?php include ("includes/footer.php"); ?>
        <!-- Ende Footer -->


    </body>





</html>