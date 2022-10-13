<?php
$myqsli = new mysqli("localhost", "root", "", "stockropa");

if ($myqsli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $myqsli->connect_errno . ") " . $mysqli->connect_error;

}

?>