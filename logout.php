
<?php

ob_start();

include('connection.php');  

session_start();

session_destroy();

$home_url = "http://localhost/university/";

header('Location: ' . $home_url);
?>