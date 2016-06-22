<!-- Start Gast Session -->
<?php

    session_set_cookie_params(3600);
    session_start();

?>
<!-- Ende Gast Session -->


<!-- Start Include Dateien -->
<?php include ("includes/verbindung.php"); ?>
<!-- Ende Include Dateien -->


<!DOCTYPE html>

<html lang="de">





    <head>


        <title>Danke</title>

        <meta charset="utf-8"/>


        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->


        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/danke.css" rel="stylesheet" type="text/css" media="screen">
        <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
        <link href='https://fonts.googleapis.com/css?family=Montserrat:700' rel='stylesheet' type='text/css'>
        <!-- Ende Custom CSS -->


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


            <div class="container">
                <section class="row  row-centered">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" id="maincontent">

                        <h1 class="überschrift">Danke für deine Teilnahme!</h1>
                        <p>Das Voting ist beendet</p>

                    </div>
                </section>
            </div>

        </div>


        <!-- Start Footer -->
        <?php include ("includes/footer.php"); ?>
        <!-- Ende Footer -->


    </body>





</html>