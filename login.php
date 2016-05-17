<!DOCTYPE html>

<html lang="de" xmlns="http://www.w3.org/1999/html">





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
        <!-- Ende Custom CSS -->


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
                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Benutzername">
                                    <input type="text" class="form-control" placeholder="Passwort">
                                </div>
                                <button type="submit" class="btn btn-default">Login</button>
                            </form>
                        </li>
                    </ul>
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Ende Navigation -->


        <!-- Anfang Header -->
        <div class="intro-header">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="intro-message">
                            <h1>TeachBox</h1>
                            <h3>Ihre Anwendung für schnelle Umfragen!</h3>
                            <hr class="intro-divider">
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Ende Header -->


        <!-- Anfang Page Content -->
        <!-- Anfang Teil 1 -->
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Was ist TeachBox?</h2>
                        <p class="lead">TeachBox ist eine Web-Anwendung für Lehrer, Dozenten und jeden der schnell, kostenlos und
                            effizient Umfragen erstellen möchte. Mit TeachBox können Sie Umfragen erstellen, löschen, live schalten und
                            am Ende grafisch auswerten lassen.</p>
                    </div>
                    <div class="col-md-5 col-md-offset-2 col-sm-6">
                        <img class="img-responsive" src="img/icon_1.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Ende Teil 1 -->


        <!-- Anfang Teil 2 -->
        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-push-6  col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Umfragen erstellen</h2>
                        <p class="lead">Mit TeachBox können Sie ganz einfach und schnell Umfragen für ihre Schüler, Studenten oder
                            Freunde erstellen. Sie erstellen eine Frage und können bis zu vier Antwortmöglichkeiten wählen.</p>
                    </div>
                    <div class="col-md-5 col-sm-pull-6  col-sm-6">
                        <img class="img-responsive" src="img/icon_2.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Ende Teil 2 -->


        <!-- Anfang Teil 3 -->
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-sm-6">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading">Umfragen live schalten</h2>
                        <p class="lead">Haben Sie eine Umfrage erstellt, können Sie diese live schalten, dass bedeutet die Umfrage
                            ist geöffnet und Personen können daran teilnehmen. Dies geschieht über einen automatisch generierten Link.</p>
                    </div>
                    <div class="col-md-5 col-md-offset-2 col-sm-6">
                        <img class="img-responsive" src="img/icon_3.png" alt="">
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Ende Teil 3 -->


        <!-- Anfang Teil 4 -->
        <div class="content-section-b">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 col-md-offset-1 col-sm-push-6  col-sm-6"">
                    <hr class="section-heading-spacer">
                    <div class="clearfix"></div>
                    <h2 class="section-heading">Ergebnisse präsentieren</h2>
                    <p class="lead">Ist die Umfrage beendet, können die Ergebnisse grafisch aufbereitet präsentiert werden. </p>
                </div>
                <div class="col-md-5 col-sm-pull-6  col-sm-6">
                    <img class="img-responsive" src="img/icon_4.png" alt="">
                </div>
            </div>
        </div>
        <!-- /.container -->
        </div>
        <!-- Ende Teil 4 -->


        <!-- Anfang Login-Formular -->
        <div class="content-section-a">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-12">
                        <hr class="section-heading-spacer">
                        <div class="clearfix"></div>
                        <h2 class="section-heading" id="login">Login</h2>
                        <p class="lead" id="überschrift">Anmelden und sofort loslegen!</p>
                        <form class="formular" role="form" method="post" action="anlegen.php">
                            <div class="formular-eingabe">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Benutzername" value="">
                            </div>
                            <div class="formular-eingabe">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Passwort" value="">
                            </div>
                            <button id="submit" type="submit" class="btn btn-primary">Login</button>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.container -->
        </div>
        <!-- Ende Login-Formular -->


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