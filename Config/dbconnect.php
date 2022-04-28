//localhost can be altered as needed
//Edit user/password and database module to match your own (this can also be used when admin forgets password..obv)

<?php

$server = "localhost";
$user = "root";
$password = "";
$db = "RD_BioTech";

$conn = mysqli_connect($server,$user,$password,$db);

if(!$conn) {
    die("Connection Failed:".mysqli_connect_error());
}

?>
