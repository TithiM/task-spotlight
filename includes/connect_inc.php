<?php
    $dbhost='localhost';
    $dbuser='root';
    $dbpassword='';
    $database='project_db';
    $connect = mysqli_connect($dbhost, $dbuser, $dbpassword) or die("Connection Error: " .mysqli_error());
    mysqli_select_db($connect, $database) or die("Error conecting to database.");
 ?>
