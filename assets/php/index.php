<?php
$localhost="localhost"; 
$root="root"; 
$password="";
$database="school"; 

$conection=new mysqli($localhost, $root, $password, $database);

if ($conection->connect_error) {
    die("Connect error. Try again.". $conection->connect_error);
}
?>