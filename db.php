<?php
$hostname = "localhost";
$dbuser = "root";
$dbpassword = "";
$dbname = "cheatbook";
$conn = mysqli_connect($hostname, $dbuser, $dbpassword, $dbname);
if (!$conn) {
    die("Could not connect to database");
}
