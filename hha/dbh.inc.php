<?php
$serverName = "localhost";
$serverUser = "hhconsul_hhconsul";
$serverPwd = "K3G4yq1j7p";
$serverDb = "hhconsul_test";
$con = mysqli_connect("localhost", "root", "", "test");
// $con = mysqli_connect($serverName, $serverUser, $serverPwd, $serverDb);

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
