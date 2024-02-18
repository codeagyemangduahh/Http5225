<?php
//$connect = mysqli_connect('localhost', 'root', 'root', 'HTTP225');
$connect= mysqli_connect('localhost', 'root','', 'phpCoding');
if(!$connect){
    die("Connection Failed: " . mysqli_connect_error()); 
}

?>