<?php

    //$dsn = 'mysql:host=mars.iuk.hdm-stuttgart.de;dbname=u-fs096;port=3306'; //sobald das Projekt auf dem mars liegt, auf localhost ändern
    $dsn = 'mysql:host=localhost;dbname=u-fs096';
    $dbuser = 'fs096';
    $dbpw = 'sah3Nahbae';

    $db = new PDO($dsn, $dbuser, $dbpw);

?>
