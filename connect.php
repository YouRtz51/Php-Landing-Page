<?php
$server="localhost";
$user="root";
$pwd="";
$database="Kraut";

$conn=mysqli_connect("$server","$user","$pwd","$database");

if(!$conn){
    die("Error Establishing A Database Connection ".mysqli_connect_error());
}
?>