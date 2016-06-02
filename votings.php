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


        <!-- Start Votings per foreach in Tabelle ausgeben -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <p class="überschrift">Bereits angelegte Votings</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                    <li><a href="#" data-toggle="modal" data-target="#live">Live schalten</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#beenden">Beenden</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" data-toggle="modal" data-target="#ergebnisse">Ergebnisse anzeigen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#" ata-toggle="modal" data-target="#löschen">Löschen</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Ende Votings per foreach in Tabelle ausgeben -->
        

        <!-- Start Voting per Formular einlesen -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-4 col-md-offset-4">
                    <form role="form">
                        <div class="form-group" role="form" method="get" action="">
                            <p class="überschrift">Neues Voting anlegen</p>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Voting" value="">
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
                        <h4 class="modal-title">Hier sehen sie die Ergebnisse ihres Votings grafisch dargestellt!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Grafische Darstellung.</p>
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
                        <h4 class="modal-title">Ihre Voting ist nun gelöscht!</h4>
                    </div>
                    <div class="modal-body">
                        <p>Gelöschte Votings können sie im Papierkorb wiederherstellen oder endgültig löschen.</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Schließen</button>
                    </div>
                </div>

            </div>
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