<?php 
    $servername = "localhost";
    $username = "root";
    $password = "";
    $databasename = "uiu";
    $db = mysqli_connect($servername,$username,$password,$databasename);
    if (!$db) {
        die("Connection failed: " . mysqli_connect_error());
      }
?>