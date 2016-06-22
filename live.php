<!-- Start Include Dateien -->
<?php include ("includes/session.php"); ?>
<?php include ("includes/verbindung.php"); ?>
<!-- Ende Include Dateien -->


<!DOCTYPE html>

<html lang="de">





    <head>
    
    
        <title>Live</title>
    
        <meta charset="utf-8"/>
    
    
        <!-- Start Bootstrap Einbindung -->
        <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
        <script src="js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Ende Bootstrap Einbindung -->
    
    
        <!-- Start Custom CSS -->
        <link href="css/landing-page.css" rel="stylesheet" media="screen">
        <link href="css/live.css" rel="stylesheet" type="text/css" media="screen">
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
        
        
            <!-- Start Link anzeigen -->
        
            <?php

                $name = $_GET["name"];
                $id = $_GET["id"];

            ?>
        
        
            <!-- Start Link ausgeben -->
            <div class="container">
                <section class="row  row-centered">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 col-xs-8 col-xs-offset-2" id="maincontent">
        
                      <h1 class="überschrift">Ihre Umfrage ist live!</h1>
                      <p>Über den folgenden Link können Personen daran teilnehmen:</p>
                      <p><a href="https://mars.iuk.hdm-stuttgart.de/~fs096/studenten.php?id=<?php echo $id; ?>" target="_blank">https://mars.iuk.hdm-stuttgart.de/~fs096/studenten.php?id=<?php echo $id; ?></p>
        
                    </div>
                </section>
            </div>
            <!-- Ende Link ausgeben -->
            <!-- Ende Link anzeigen -->


            <!-- Start Liveschaltung auslesen -->
            <?php

            try
            {
                $abfr = $db->prepare('SELECT Live
                                      FROM Voting
                                      WHERE VotID=:id');
                $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                $abfr->execute();
                $live = $abfr->fetch();
                $live = $live['Live'];
                unset($abfr);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }
            ?>
            <!-- Ende Liveschaltung auslesen -->


            <!-- Start Liveschaltung prüfen -->
            <?php if ($live == 1)
            { ?>
                <!-- Start Frage anzeigen -->
                <!-- Start Frage auslesen -->
                <?php

                try
                {
                    $abfr = $db->prepare('SELECT Frage
                                              FROM Voting
                                              WHERE VotID=:id');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->execute();
                    $erg = $abfr->fetch();
                    //var_dump($erg);
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
                ?>
                <!-- Ende Frage auslesen -->


                <!-- Start Frage ausgeben -->
                <div class="container">
                    <section class="row  row-centered">
                        <div class="col-md-8 col-md-offset-2">
                            <p class="überschrift"><?php echo $erg['Frage']; ?></p>
                        </div>
                    </section>
                </div>
                <!-- Ende Frage ausgeben -->
                <!-- Ende Frage anzeigen -->


                <!-- Start mögliche Antworten in Tabelle anzeigen -->
                <!-- Start mögliche Antwort 1 auslesen -->
                <?php

                try
                {
                    $abfr = $db->prepare('SELECT Ant1
                                              FROM Voting
                                              WHERE VotID=:id');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->execute();
                    $erg1 = $abfr->fetch();
                    $erg1 = $erg1['Ant1'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
                ?>
                <!-- Ende mögliche Antwort 1 auslesen -->


                <!-- Start mögliche Antwort 2 auslesen -->
                <?php

                try
                {
                    $abfr = $db->prepare('SELECT Ant2
                                              FROM Voting
                                              WHERE VotID=:id');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->execute();
                    $erg2 = $abfr->fetch();
                    $erg2 = $erg2['Ant2'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
                ?>
                <!-- Ende mögliche Antwort 2 auslesen -->


                <!-- Start mögliche Antwort 3 auslesen -->
                <?php

                try
                {
                    $abfr = $db->prepare('SELECT Ant3
                                              FROM Voting
                                              WHERE VotID=:id');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->execute();
                    $erg3 = $abfr->fetch();
                    $erg3 = $erg3['Ant3'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
                ?>
                <!-- Ende mögliche Antwort 3 auslesen -->


                <!-- Start mögliche Antwort 4 auslesen -->
                <?php

                try
                {
                    $abfr = $db->prepare('SELECT Ant4
                                              FROM Voting
                                              WHERE VotID=:id');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->execute();
                    $erg4 = $abfr->fetch();
                    $erg4 = $erg4['Ant4'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }
                ?>
                <!-- Ende mögliche Antwort 4 auslesen -->


                <!-- Start Begrenzung der Antwortmöglichkeiten -->
                <?php
                //<!-- Start 2 Antwortmöglichkeiten -->
                if (($erg4 == "") AND ($erg3 == ""))
                { ?>

                    <div class="container">
                        <section class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form role="form">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="1" checked="checked"><?php echo $erg1; ?></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="2"><?php echo $erg2; ?></label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-primary btn-md" id="button">Absenden</button>
                                </form>
                            </div>
                        </section>
                    </div>

                <?php }
                //<!-- Ende 2 Antwortmöglichkeiten -->


                //<!-- Start 3 Antwortmöglichkeiten -->
                elseif ($erg4 == "")
                { ?>

                    <div class="container">
                        <section class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form role="form">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="1" checked="checked"><?php echo $erg1; ?></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="2"><?php echo $erg2; ?></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="3"><?php echo $erg3; ?></label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-primary btn-md" id="button">Absenden</button>
                                </form>
                            </div>
                        </section>
                    </div>

                <?php }
                //<!-- Ende 3 Antwortmöglichkeiten -->


                //<!-- Start 4 Antwortmöglichkeiten -->
                else
                { ?>

                    <div class="container">
                        <section class="row">
                            <div class="col-md-8 col-md-offset-2">
                                <form role="form">
                                    <ul class="list-group">
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="1" checked="checked"><?php echo $erg1; ?></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="2"><?php echo $erg2; ?></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="3"><?php echo $erg3; ?></label>
                                            </div>
                                        </li>
                                        <li class="list-group-item">
                                            <div class="radio">
                                                <label><input type="radio" name="antwort" value="4"><?php echo $erg4; ?></label>
                                            </div>
                                        </li>
                                    </ul>
                                    <button type="submit" class="btn btn-primary btn-md" id="button">Absenden</button>
                                </form>
                            </div>
                        </section>
                    </div>

                <?php } ?>
                <!-- Ende 4 Antwortmöglichkeiten -->
                <!-- Ende Begrenzung der Antwortmöglichkeiten -->
                <!-- Ende mögliche Antworten in Tabelle anzeigen -->
            <?php } ?>
            <!-- Ende Liveschaltung prüfen -->

        
        </div>
        
        
        <!-- Start Footer -->
        <?php include ("includes/footer.php"); ?>
        <!-- Ende Footer -->
    
    
    </body>





</html>