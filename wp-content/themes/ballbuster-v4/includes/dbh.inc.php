<?php
$Servername = "localhost";
$dBUsername = "root";
$dBPassword = "root";
$dBName = "ballbuster";
$conn = mysqli_connect($Servername, $dBUsername, $dBPassword, $dBName);
if (!$conn) {
  die("Connection failed: ".mysqli_connect_error());
}
