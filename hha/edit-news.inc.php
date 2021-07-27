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

    //other input
    $arTitle = $_POST["title"];
    $arDate = $_POST["date"];
    $arDescription = $_POST["desc"];
    $getArticleId = $_GET['newsid'];

    if (in_array($fileExt, $allowedFile)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileExt;
                if (move_uploaded_file($fileTmp, '../assets/uploads/' . $fileNameNew) === true) {
                    $sql = "UPDATE article SET article_title = $arTitle, article_date = $arDate, article_content = $arDescription, article_img = $fileNameNew WHERE article_id = $getArticleId";
                    if ($con->query($sql) === true) {
                        header("Location: add_article.php?editarticlesuccess");
                    } else {
                        header("Location: add_article.php?editarticlefailed");
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
