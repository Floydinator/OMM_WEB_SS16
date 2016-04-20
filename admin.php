<!DOCTYPE html>
    
<html lang="de">
    
    <head>

        <title>Administration</title>
        <?php include ("includes/head.php"); ?>
        <?php include ("includes/verbindung.php"); ?>
        <?php include ("includes/navigation.php"); ?>
        
    </head>
        
    <body>


    <!-- Start Dozenten auslesen -->

        <section class="container text-center">
            <div class="row text-center">
                <ul id="dozenten">
                    <li>Dozent 1</li>
                    <li>Dozent 2</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                    <li>Dozent 3</li>
                </ul>
            </div>
        </section>

    <!-- Ende Dozenten auslesen -->



    <!-- Start Registrierung -->

        <div class="formular">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                    <form action="" method="post">
                    <input type="text" size="30" maxlength="50" name="dozent" placeholder="Neuer Dozent"><br><br>
                    <input type="submit" value="Anlegen!">
                    </form>
                    </div>
                </div>
	        </div>
	    </div>

    <!-- Ende Registrierung -->


    </body>
    
</html>