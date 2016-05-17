<!DOCTYPE html>

<html lang="de">





    <head>
    
    
        <title>Studentenbereich</title>
    
        <meta charset="utf-8"/>
    
    
        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->
    
    
        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/studenten.css" rel="stylesheet" type="text/css" media="screen">
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
                </div>
                <!-- /.navbar-collapse -->
            </div>
            <!-- /.container -->
        </nav>
        <!-- Ende Navigation -->

        
        <!-- Start Frage auslesen -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <p class="überschrift">Frage</p>
                </div>
            </section>
        </div>
        <!-- Ende Frage auslesen -->

        
        <!-- Start Antworten in Tabelle auslesen -->
        <div class="container">
            <section class="row  row-centered">
                <div class="col-md-8 col-md-offset-2">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Antwort 1</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Antwort 2</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Antwort 3</label>
                            </div>
                        </li>
                        <li class="list-group-item">
                            <div class="radio">
                                <label><input type="radio" name="optradio">Antwort 4</label>
                            </div>
                        </li>
                    </ul>
                    <button type="submit" class="btn btn-primary btn-md" id="button">Absenden</button>
                </div>
            </section>
        </div>
        <!-- Ende Antworten in Tabelle auslesen -->
        

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