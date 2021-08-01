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

    $allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
    $allowedTags .= '<li><ol><ul><span><div><br><ins><del><b><a><font>';

    //other input
    $arTitle = $_POST["title"];
    $arDate = $_POST["date"];
    // $arDescription = $_POST["desc"];
    $arDesc = strip_tags(stripslashes($_POST["desc"]), $allowedTags);
    // echo $arDesc;

    if (in_array($fileExt, $allowedFile)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileExt;
                if (move_uploaded_file($fileTmp, '../assets/uploads/' . $fileNameNew) === true) {
                    $sql = "INSERT into article (article_title, article_date, article_content, article_img) VALUES ('$arTitle', '$arDate', '$arDesc', '$fileNameNew')";
                    if (mysqli_query($con, $sql) === true) {
                        header("Location: add_article.php?uploadarticlesuccess");
                    } else {
                        header("Location: add_article.php?uploadarticlefailed");
                    }
                } else {
                    header("Location: add_article.php?uploadimagefailed");
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
