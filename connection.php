<?php
$servername="localhost";
$username="root";
$pass="";
$dbname="akshay";
$con=mysqli_connect($servername,$username,$pass,$dbname);
if($con)
{
    echo"Connection Established..";
}
else
{
    die("Connection fail Coz of ".mysqli_connect_error());
}
?>

