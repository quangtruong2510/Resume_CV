<?php 
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'crud_php');

// Attempt to connect to MySQL db 
$link = mysqli_connect(DB_SERVER, DB_USERNAME,DB_PASSWORD,DB_NAME);
if($link === false){
    die("Error: COunt not connect ." . mysqli_connect_error());
}
?>
