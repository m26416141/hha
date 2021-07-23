<?php

if (isset($_POST["submit"])) {
    require_once 'dbh.inc.php';
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileTmp = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $fileType = $_FILES['file']['type'];

    $fileGetExt = explode('.', $fileName); //seperate the file name and extension
    $fileExt = strtolower(end($fileGetExt)); //actual file extension

    $allowedFile = array('jpg', 'jpeg', 'png');

    if (in_array($fileExt, $allowedFile)) {
        if ($fileError === 0) {
            if ($fileSize < 50000) {
                $fileNameNew = uniqid('', true) . "." . $fileExt;
                $fileDestination = "uploads/" . $fileNameNew;
                if (move_uploaded_file($fileTmp, '../assets/uploads/' . $fileNameNew) === true) {
                    header("Location: add_article.php?uploadsuccess");
                } else {
                    header("Location: add_article.php?uploadfailed");
                }
            } else {
                echo "File is too big";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        echo "File type not supported";
    }
}
