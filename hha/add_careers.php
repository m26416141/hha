<?php
// $con = mysqli_connect("localhost", "hhconsul_hhconsul", "K3G4yq1j7p", "hhconsul_test");
require_once 'dbh.inc.php';
// if (mysqli_connect_errno()) {
//     echo "failed to connect!";
//     exit();
// } else {
//     echo "connection success";
// }
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $careersName = $_POST["name"];
    $careersDescription = $_POST["description"];
    $careersLocation = $_POST["locations"];
    $careersDate = $_POST["date"];

    $sql = "INSERT into careers (name_careers, description_careers, location_careers, date_careers) VALUES ('$careersName', '$careersDescription', '$careersLocation', '$careersDate')";

    try {
        // mysqli_query($con, $sql);
        if ($con->query($sql) == true) {
            echo " added";
        } else {
            echo " Failed";
        }
    } catch (Exception $e) {
        echo $e->getMessage();
    }
}

$con->close();
