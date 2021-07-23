<?php

if (isset($_POST["submit"])) {
    $uname = $_POST["name"];
    $pwd = $_POST["password"];
    require_once 'dbh.inc.php';
    require_once 'functions.inc.php';

    if (emptyInput($uname, $pwd) !== false) {
        header("location: admin-login.php?error=emptyinput");
        exit();
    }
    // if (invalidUname($uname) !== false) {
    //     header("location: ../admin-login.php?error=invalidusername");
    //     exit();
    // }
    // if (invalidPwd($pwd) !== false) {
    //     header("location: ../admin-login.php?error=invalidpassword");
    //     exit();
    // }
    loginUser($con, $uname, $pwd);
} else {
    header("location: admin-login.php");
    exit();
}
