<?php
// $con = mysqli_connect("localhost", "hhconsul_hhconsul", "K3G4yq1j7p", "hhconsul_test");
require_once 'dbh.inc.php';
$query = "TRUNCATE TABLE contact";
$truncateTable = mysqli_query($con, $query);
if ($truncateTable != false) {
    echo ("all rows deleted");
} else {
    echo ("delete failed");
}
