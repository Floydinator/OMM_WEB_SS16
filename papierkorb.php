<!DOCTYPE html>

<html lang="de">





    <head>
    
    
        <title>Dozentenbereich - Papierkorb</title>
    
        <meta charset="utf-8"/>
    
    
        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->
    
    
        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/papierkorb.css" rel="stylesheet" type="text/css" media="screen">
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
                                <a href="votings.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Votings</a>
                                <a href="votings-anlegen.php"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Votings anlegen</a>
                                <a><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Papierkorb</a>
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
        

        <!-- Start gelöschte Votings per foreach in Tabelle ausgeben -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <p class="überschrift">Gelöschte Votings</p>
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="btn-group">
                                <button type="button" class="btn btn-default">Voting 1</button>
                                <button type="button" class="btn btn-primary dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="caret"></span>
                                    <span class="sr-only">Toggle Dropdown</span>
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
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
                                <ul class="dropdown-menu">
                                    <li><a href="#">Wiederherstellen</a></li>
                                    <li role="separator" class="divider"></li>
                                    <li><a href="#">Endgültig löschen</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </section>
        </div>
        <!-- Ende gelöschte Votings per foreach in Tabelle ausgeben -->


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