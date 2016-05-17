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
        <link href="css/votings-anlegen.css" rel="stylesheet" type="text/css" media="screen">
        <!-- Ende Custom CSS -->
    
    
        <!-- Start Include Dateien -->
        <?php include ("includes/verbindung.php"); ?>
        <!-- Ende Include Dateien -->
    
    
    </head>
    

    <body>
    
    
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
                    <a class="navbar-brand topnav" id="brand">TeachBox</a>
                </div>
                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav navbar-right">
                        <li>
                            <form class="navbar-form navbar-right" role="search">
                                <a href="vorlesungen.php">Vorlesungen</a>
                                <a href="votings.php">Votings</a>
                                <a href="papierkorb.php">Papierkorb</a>
                                <a href="login.php" class="btn btn-info" role="button">Logout</a>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Ende Navigation -->

        
        <!-- Start Frage und Antworten per Formular einlesen -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <form role="form" id="formular">
                        <div class="form-group" role="form" method="get" action="">
                            <p class="überschrift">Neues Voting anlegen</p>
                            <input type="text" class="form-control" id="name" name="name" placeholder="Frage" value="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Antwort 1" value="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Antwort 2" value="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Antwort 3" value="">
                            <input type="text" class="form-control" id="name" name="name" placeholder="Antwort 4" value="">
                        </div>
                        <button type="submit" class="btn btn-primary btn-md" id="button">Anlegen</button>
                    </form>
                </div>
            </section>
        </div>
        <!-- Ende Frage und Antworten per Formular einlesen -->


        <!-- Start Footer -->
        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <ul class="list-inline">
                            <li>
                                <a href="vorlesungen.php">Vorlesungen</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="votings.php">Votings</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a class="active">Votings anlegen</a>
                            </li>
                            <li class="footer-menu-divider">&sdot;</li>
                            <li>
                                <a href="papierkorb.php">Papierkorb</a>
                            </li>
                        </ul>
                    </div>
                </div>
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