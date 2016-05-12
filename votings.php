<!DOCTYPE html>

<html lang="de">

<head>
    <title>Dozentenbereich - Votings</title>

    <meta charset="utf-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Start Bootstrap Einbindung -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
    <!-- Ende Bootstrap Einbindung -->

    <!-- Start Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet" media="screen">
    <link href="css/vorlesungen.css" rel="stylesheet" type="text/css" media="screen">
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
                        <a href="#">Vorlesungen</a>
                        <a href="#">Voting anlegen</a>
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

<!-- Start Dozenten per foreach in Tabelle ausgeben -->
<div class="container">
    <section class="row  row-centered">
        <div class="col-md-8 col-md-offset-2"> <!--  Die Anzahl der Bootstrapspalten muss immer 12 sein -->
            <label for="name">Bereits angelegte Votings</label>
            <ul class="list-group">
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item">Voting 1 <button type="submit" class="btn btn-primary btn-md pull-right">Löschen</button></li>
                <li class="list-group-item"></li>
            </ul>
        </div>
    </section>
</div>
<!-- Ende Dozenten per foreach in Tabelle ausgeben -->

<!-- Start Dozenten per Formular einlesen -->
<div class="container">
    <section class="row  row-centered">
        <div class="col-md-4 col-md-offset-4"> <!--  Die Anzahl der Bootstrapspalten muss immer 12 sein -->
            <form role="form">
                <div class="form-group" role="form" method="get" action="reg.php">
                    <label for="name">Neues Voting anlegen</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Voting" value="">
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
                <ul class="list-inline">
                    <li>
                        <a href="#">Vorlesungen</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a class="active">Votings</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#">Votings anlegen</a>
                    </li>
                    <li class="footer-menu-divider">&sdot;</li>
                    <li>
                        <a href="#contact">Contact</a>
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