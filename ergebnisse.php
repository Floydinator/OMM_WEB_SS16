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

            <?php $name = $_GET["name"]; ?>

            <!-- Start id auslesen -->
            <?php

                try
                {
                    $abfr = $db->prepare('SELECT VotID
                                          FROM Voting
                                          WHERE Votingname=:name');
                    $abfr->bindValue(':name', $name, PDO::PARAM_STR);
                    $abfr->execute();
                    $id = $abfr->fetch();
                    $id = $id['VotID'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }

            ?>
            <!-- Ende id auslesen -->

<br >

            <!-- Start Teilnehmerzahl auslesen -->
            <?php

                try
                {
                    $abfr = $db->prepare('SELECT COUNT(*) AS Summe
                                          FROM Ergebnis
                                          WHERE VotID=:id');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->execute();
                    $sum = $abfr->fetch();
                    $sum = $sum['Summe'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }

            ?>
            <!-- Ende Teilnehmerzahl auslesen -->


            <!-- Start Summe Antwort 1 auslesen -->
            <?php

                try
                {
                    $abfr = $db->prepare('SELECT COUNT(*) AS Ant1
                                          FROM Ergebnis
                                          WHERE VotID=:id
                                          AND Vote=:ant1');
                    $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                    $abfr->bindValue(':ant1', 1, PDO::PARAM_INT);
                    $abfr->execute();
                    $ant1 = $abfr->fetch();
                    $ant1 = $ant1['Ant1'];
                    unset($abfr);
                }
                catch(PDOException $e)
                {
                    echo $e->getMessage();
                }

            ?>
            <!-- Ende Summe Antwort 1 auslesen -->


            <!-- Start Summe Antwort 2 auslesen -->
            <?php

            try
            {
                $abfr = $db->prepare('SELECT COUNT(*) AS Ant2
                                      FROM Ergebnis
                                      WHERE VotID=:id
                                      AND Vote=:ant2');
                $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                $abfr->bindValue(':ant2', 2, PDO::PARAM_INT);
                $abfr->execute();
                $ant2 = $abfr->fetch();
                $ant2 = $ant2['Ant2'];
                unset($abfr);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

            ?>
            <!-- Ende Summe Antwort 2 auslesen -->


            <!-- Start Summe Antwort 3 auslesen -->
            <?php

            try
            {
                $abfr = $db->prepare('SELECT COUNT(*) AS Ant3
                                      FROM Ergebnis
                                      WHERE VotID=:id
                                      AND Vote=:ant3');
                $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                $abfr->bindValue(':ant3', 3, PDO::PARAM_INT);
                $abfr->execute();
                $ant3 = $abfr->fetch();
                $ant3 = $ant3['Ant3'];
                unset($abfr);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

            ?>
            <!-- Ende Summe Antwort 3 auslesen -->


            <!-- Start Summe Antwort 4 auslesen -->
            <?php

            try
            {
                $abfr = $db->prepare('SELECT COUNT(*) AS Ant4
                                      FROM Ergebnis
                                      WHERE VotID=:id
                                      AND Vote=:ant4');
                $abfr->bindValue(':id', $id, PDO::PARAM_INT);
                $abfr->bindValue(':ant4', 4, PDO::PARAM_INT);
                $abfr->execute();
                $ant4 = $abfr->fetch();
                $ant4 = $ant4['Ant4'];
                unset($abfr);
            }
            catch(PDOException $e)
            {
                echo $e->getMessage();
            }

            ?>
            <!-- Ende Summe Antwort 4 auslesen -->


            <!-- Start Ergebnisse berechnen -->
            <?php
                $erg1 = round(100 / $sum * $ant1);
                $erg2 = round(100 / $sum * $ant2);
                $erg3 = round(100 / $sum * $ant3);
                $erg4 = round(100 / $sum * $ant4);
            ?>
            <!-- Ende berechnen -->


            <!-- Start Ergebnisse ausgeben -->
            <div class="container">
                <section class="row  row-centered">
                    <div class="col-md-8 col-md-offset-2" id="maincontent">

                        <h4 class="modal-title">Ergebnisse Ihres Votings</h4>
                        <p>Antwort 1</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $erg1; ?>"; aria-valuemin="0" aria-valuemax="100" style=" min-width: 2em; width: <?php echo $erg1; ?>%;">
                                <?php echo $erg1; ?>%
                            </div>
                        </div>

                        <p>Antwort 2</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $erg2; ?>" aria-valuemin="0" aria-valuemax="100" style=" min-width: 2em; width: <?php echo $erg2; ?>%;">
                                <?php echo $erg2; ?>%
                            </div>
                        </div>

                        <p>Antwort 3</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $erg3; ?>" aria-valuemin="0" aria-valuemax="100" style=" min-width: 2em; width: <?php echo $erg3; ?>%;">
                                <?php echo $erg3; ?>%
                            </div>
                        </div>

                        <p>Antwort 4</p>
                        <div class="progress">
                            <div class="progress-bar" role="progressbar" aria-valuenow="<?php echo $erg4; ?>" aria-valuemin="0" aria-valuemax="100" style="min-width: 2em; width: <?php echo $erg4; ?>%;">
                                <?php echo $erg4; ?>%
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