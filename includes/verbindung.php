<?php

    $dsn = 'mysql:host=mars.iuk.hdm-stuttgart.de;dbname=u-fs096'; //sobald das Projekt auf dem mars liegt, auf localhost ändern
    $dbuser = 'fs096';
    $dbpw = 'sah3Nahbae';

    $db = new PDO($dsn, $dbuser, $dbpw);

?>
