<?php
    $hostname = "localhost";
    $username = "root";
    $password =  "";
    $databaseName = "77261113";
    $connection = mysqli_connect($hostname, $username, $password, $databaseName) or die (mysqli_error($connection));
?>