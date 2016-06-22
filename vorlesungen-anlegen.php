<!DOCTYPE html>

<html lang="de">





<head>


    <title>Dozentenbereich - Vorlesungen</title>

    <meta charset="utf-8"/>


    <!-- Start Bootstrap Einbindung -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
    <script src="js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Ende Bootstrap Einbindung -->


    <!-- Start Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet" media="screen">
    <link href="css/vorlesungen.css" rel="stylesheet" type="text/css" media="screen">
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
                                <a href="vorlesungen.php"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Vorlesungen</a>
                                <a href="votings.php"><span class="glyphicon glyphicon-tasks" aria-hidden="true"></span> Votings</a>
                                <a href="papierkorb.php"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Papierkorb</a>
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

    <?php $name = $_GET['name']; ?>

    <!-- Start Vorlesungen auslesen -->
    <!-- Start Vorlesungen aus DB abfragen -->
    <?php
    //Auf die DB-Verbindung wird eine Methode eingesetzt, die einen String mit SQL akzeptiert und an die DB sendet.
    //Der Code wird in $abfr gespeichert
    try
    {
        $abfr = $db->prepare('INSERT INTO Vorlesung(Vorlesungsname) VALUES (:Vorlesungsname');
        $abfr->bindValue(':Vorlesungsname', $name, PDO::PARAM_STR);
        $abfr->execute();
        $erg = $abfr->fetchAll();
        //var_dump($erg);
        unset($abfr);
    }
    catch(PDOException $e){
        echo $e->getMessage();
    }
    ?>





<!-- Start Footer -->
<?php include ("includes/footer.php"); ?>
<!-- Ende Footer -->


</body>





</html>