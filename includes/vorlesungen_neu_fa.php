<!-- Start Vorlesung anlegen -->

    <?php



    include ("verbindung.php");

    $name = $_GET['name'];

      
    
    try
    {
        $abfr = $db->prepare ('INSERT INTO Vorlesung(BID, Vorlesungsname)
                               VALUES (:bid, :name)');
        $abfr->bindValue(':bid', 1, PDO::PARAM_INT);
        $abfr->bindParam(':name', $name, PDO::PARAM_STR);
        $abfr->execute();
        //var_dump($erg);
        unset($abfr);

    }
    catch(PDOException $e){
        echo $e->getMessage();
    }

    header('Location: https://mars.iuk.hdm-stuttgart.de/~fs096/vorlesungen.php');
    ?>
<!-- Ende Vorlesung anlegen -->


