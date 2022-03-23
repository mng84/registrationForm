<?php
// Database information
$db_name = "2022_registration_form";
$db_user = "root";
$db_pass = "root";
$db_host = "localhost";

// Create db connection
$connection = mysqli_connect($db_host, $db_user, $db_pass, $db_name );

// Check connection
if (!$connection) {
  die("Connection failed: " . mysqli_connect_error());
}


?>