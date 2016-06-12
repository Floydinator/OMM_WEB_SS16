<?php
#Der Sessioncheck wird am Anfang der Loginseite eingefügt sogar vor dem HTML

session_start();

echo session_id();
?>
