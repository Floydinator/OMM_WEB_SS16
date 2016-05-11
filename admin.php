<!DOCTYPE html>

<html lang="de">

<head>
    <title>Administration</title>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Start Bootstrap Einbindung -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Ende Bootstrap Einbindung -->

    <!-- Start Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet" media="screen">
    <link href="css/admin.css" rel="stylesheet" type="text/css" media="screen">
    <!-- Ende Custom CSS -->

    <!-- Start Include Dateien -->
    <?php include ("includes/verbindung.php"); ?>
    <?php include ("includes/reg.php"); ?>
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
                    <a href="login.html">Logout</a>
                </li>
            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<!-- Ende Navigation -->

<!-- Start Dozenten aus DB abfragen -->

<?php

//Auf die DB-Verbindung wird eine Methode eingesetzt, die einen String mit SQL akzeptiert und an die DB sendet.
//Der Code wird in $abfr gespeichert
try
{
    $abfr = $db->prepare('SELECT Benutzername
                                    FROM Benutzer 
                                    WHERE Typ=:typ');
    $abfr->bindValue(':typ', 1, PDO::PARAM_INT);
    $abfr->execute();
    //Gibt das Ergebnis in Form eines mehrdimensionalen Arrays zurück und speichert es in der Variablen $abfr
    //fetch wird nur zum auslesen benötigt
    $erg = $abfr->fetchAll();
    //var_dump($abfr->errorInfo());
    //Abfrage schließen
    unset($abfr);
}
catch(PDOException $e){
    echo $e->getMessage();
}

?>
<!-- Ende Dozenten aus DB abfragen -->

<!-- Start Dozenten per foreach in Tabelle ausgeben -->
<div class="container">
<section class="row  row-centered">
    <div class="col-md-8 col-md-offset-2">
        <label for="name">Bereits angelegte Dozenten</label>
        <ul class="list-group">
            <?php foreach ($erg AS $dozent): ?>
                <li class="list-group-item"><?php echo $dozent['Benutzername']; ?></li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>
</div>
<!-- Ende Dozenten per foreach in Tabelle ausgeben -->

<!-- Start Dozenten per Formular einlesen -->
<div class="container">
    <section class="row  row-centered">
        <div class="col-md-4 col-md-offset-4">
            <form role="form">
                <div class="form-group" role="form" method="get" action="reg.php">
                    <label for="name">Neuen Dozent anlegen</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Benutzername" value="<?php echo $_GET['name']; ?>">
                </div>
                <button type="submit" class="btn btn-primary btn-md">Anlegen</button>
            </form>
        </div>
    </section>
</div>
<!-- Ende Dozenten per Formular einlesen -->

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

<!-- jQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script> <!-- Die Fehlermeldung kann ignoriert werden -->
<!-- javascript -->
<script src="bootstrap-3.3.6-dist/js/bootstrap.min.js"></script>
</body>

</html>
