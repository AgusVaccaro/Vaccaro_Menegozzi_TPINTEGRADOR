<?php
function conectar(){
    $host="localhost";
    $user="root";
    $pass="";

    $bd="stockropa";

    $con=mysqli_connect($host,$user,$pass);

    mysqli_select_db($con,$bd);

    return $con;
}


$myqsli = new mysqli("localhost", "root", "", "stockropa");

if ($myqsli->connect_errno) {
    echo "Fallo al conectar a MySQL: (" . $myqsli->connect_errno . ") " . $mysqli->connect_error;

}



