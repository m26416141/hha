<?php

function emptyInput($uname, $pwd)
{
    $result = false;
    if (empty($uname) || empty($pwd)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidUname($uname)
{
    $result = false;
    if (preg_match("/^[a-zA-Z-0-9]*$/", $uname)) {
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function unameExist($con, $uname)
{
    $stmt = $con->prepare("SELECT * FROM users WHERE users_uid = ?");
    $stmt->bind_param("s", $uname);
    $stmt->execute();
    $stmt->bind_result();
    $result_stmt = $stmt->get_result();
    if ($row = mysqli_fetch_assoc($result_stmt)) {
        return $row;
    } else {
        $result = false;
        return $result;
    }
    $stmt->close();
    $con->close();
    // $sql = "SELECT * FROM users WHERE users_uid = ?";
}

function loginUser($con, $uname, $pwd)
{
    $uidExists = unameExist($con, $uname);

    if ($uidExists === false) {
        header("location: admin-login.php?error=wronglogin");
        exit();
    }

    $pwdCorrect = $uidExists['users_pwd'];

    if ($pwd !== $pwdCorrect) {
        header("location: admin-login.php?error=wrongpassword");
        exit();
    } else if ($pwd === $pwdCorrect) {
        session_start();
        $_SESSION['uid'] = $uidExists["users_uid"];
        header("location: admin.php");
        exit();
    }
}
