<!DOCTYPE html>

<html lang="de">





    <head>


        <title>Ergebnisse</title>

        <meta charset="utf-8"/>


        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->


        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/ergebnisse.css" rel="stylesheet" type="text/css" media="screen">
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
                        <a class="navbar-brand topnav" id="brand"><span id="brand-glyphicon" class="glyphicon glyphicon-home" aria-hidden="true"></span> TeachHaus</a>
                    </div>
                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav navbar-right">
                            <li>
                                <form class="navbar-form navbar-right">
                                    <div class="form-group">
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


            <!-- Start Ergebnisse anzeigen -->
            <!-- Start Ergebnisse berechnen -->
            <?php
                $antwort = $_POST['antwort'];
                $teilnehmer = 0;
                $ant1 = 0;
                $ant2 = 0;
                $ant3 = 0;
                $ant4 = 0;

                if ($antwort == 1)
                {
                    $ant1 = $ant1+1;
                    var_dump($ant1);
                }
            ?>
            <!-- Start Ergebnisse berechnen -->


            <!-- Start Ergebnisse ausgeben -->
            <div class="container">
                <section class="row  row-centered">
                    <div class="col-md-8 col-md-offset-2" id="maincontent">

                        <h4 class="modal-title">Ergebnisse Ihres Votings</h4>
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
                </section>
            </div>
            <!-- Ende Ergebnisse ausgeben -->
            <!-- Ende Ergebnisse anzeigen -->


        </div>


        <!-- Start Footer -->
        <?php include ("includes/footer.php"); ?>
        <!-- Ende Footer -->


    </body>





</html>