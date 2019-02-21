<?php

$dbServername = getenv('IP');
$dbUsername = getenv('C9_USER');
$dbPassword = "";
$dbName = "zadatak";

$conn = mysqli_connect($dbServername, $dbUsername, $dbPassword, $dbName);

 