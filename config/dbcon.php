<?php
define('DB_SERVER', "localhost:3332");
define('DB_USERNAME', "root");
define('DB_PASSWORD', "");
define('DB_DATABASE', "pos_syst");

$conn = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_DATABASE);
if(!$conn){
    die("connection failed " . mysqli_connect_error());
}
?>