<?php
$connect = mysqli_connect('localhost', 'root', '', 'phpCoding');

// Check Connection
if (!$connect) {
    die("Connection Failed:" . mysqli_connect_error());
}
// echo "Connected Successfully!!!";
