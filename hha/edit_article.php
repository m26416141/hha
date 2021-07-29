<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location: admin-login.php");
}
require_once "dbh.inc.php";
$getArticleId = $_GET['newsid'];
$sql = "SELECT * FROM article WHERE article_id = $getArticleId";
$query_run = mysqli_query($con, $sql);
while ($row = mysqli_fetch_array($query_run)) {
    $title = $row['article_title'];
    $getDate = date_create($row['article_date']);
    $date = date_format($getDate, "d/m/Y");
    $desc = $row['article_content'];
    $img = $row['article_img'];
    echo '
    <!DOCTYPE html>
    <html lang="en">
    
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <title>Edit Article - Howard Hermes</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/login-signup.css?<?php echo time(); ?>" />
    </head>
    
    <body>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
        <div class="container-fluid">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm" style="padding: 0px;">
                        <h4 style="font-weight: 700; margin: 30px">Edit Article</h4>
                    </div>
                    <div class="col-sm" style="padding: 0px;">
                        <div style="float: right; padding-right: 30px">
                            <button id="btn-add-article" type="submit" name="submit" class="btn btn-primary">Save</button>
                        </div>
                        <div style="float: right; padding-right: 20px">
                            <button id="btn-add-article" class="btn btn-danger" type="delete" name="delete">Delete</button>
                        </div>
                    </div>
                    <div class="col-sm-12 logo-border" style="padding: 0px;"></div>
                </div>
                <div class="row">
                    <div class="col-sm-4">
                        <div class="col-sm-12">
                            <div class="form-add-careers">
                                <label for="inputTitle">Title</label>
                                <input class="form-input" type="text" name="title" id="inputTitle" placeholder="Article title" value="' . $title . '">
                                <label for="inputDate">Date published: ' . $date . '</label>
                                <input class="form-input" type="date" name="date" id="inputDate" style="padding-bottom: 20px;">
                                <img src="../assets/uploads/' . $img . '" alt="" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;">
                                <label for="inputImage">Upload image</label>
                                <input class="form-input" type="file" name="file" id="inputImage" placeholder="Select image">
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8" style="padding: 0px 30px;">
                        <div class="row">
                            <div class="col-sm-6">
                                <label for="inputDesc">Description</label>
                            </div>
                            <div class="col-sm-6">
                                <label style="float: right;"><span id="wcDisplay" style="font-weight: 100;">0</span></label>
                            </div>
                        </div>
                        <textarea id="inputDesc" class="form-text-area" rows="20" type="text" name="desc" placeholder="Article description" oninput="countWord()">' . $desc . '</textarea>
                        <script>
                            const cwords = document.getElementById("inputDesc");
                            const word_display = document.getElementById("wcDisplay");
    
                            function countWord() {
                                let text = cwords.value;
                                // text = text.trim();
                                const words = text;
                                word_display.innerText = words.length;
                            }
                        </script>
                    </div>
                </div>
            </form>
        </div>
        <!-- Modal -->
        <div class="modal fade" id="modal-delete-article" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content modal-details-content" style="border-radius: 0px; border: none;">
                    <div class="modal-header" style="border-top-left-radius: 0px; border-top-right-radius: 0px; border-bottom: 2px solid #f4f4f4;">
                        <div class="row">
                            <div class="col-sm-12" style="margin-bottom: 20px;">
                                <h5 class="modal-title" id="subject" style="font-weight: 700;">Delete article</h5>
                            </div>
                            <!-- <div class="col-sm-6" style="float: right;">
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="text-shadow: none; background-color: transparent; float: right;">
                                    <i class="bx bxs-x-circle"></i>
                                </button>
                            </div> -->
                            
                        </div>
                    </div>
                    <div class="modal-body" style="padding-top: 20px">
                        <p>Are you sure you want to delete this article?</p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">cancel</button>
                        <button type="delete" name="delete" class="btn btn-danger btn-block" style="margin: 0px; margin-left: 10px">Delete</button>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
    </html>
    
    ';
}
if (isset($_POST["delete"])) {
    $sql = "DELETE FROM article WHERE article_id = '$getArticleId'";
    if ($con->query($sql) === true) {
        echo '
            <script>
                alert("Delete success");
                location.replace(admin.php);
            </script>
        ';
    } else {
        echo 'delete failed';
    }
}
if (isset($_POST["submit"])) {
    // require_once 'dbh.inc.php';
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
    // $getArticleId = $_GET['newsid'];

    if (in_array($fileExt, $allowedFile)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileExt;
                if (move_uploaded_file($fileTmp, '../assets/uploads/' . $fileNameNew) === true) {
                    $sql = "UPDATE article SET article_title = '$arTitle', article_date = '$arDate', article_img = '$fileNameNew', article_content = '$arDescription' WHERE article_id = '$getArticleId'";
                    if ($con->query($sql) === true) {
                        // header("Location: edit_article.php?editarticlesuccess");
                        echo "edit success";
                    } else {
                        // header("Location: edit_article.php?editarticlefailed");
                        echo "edit failed";
                    }
                } else {
                    // header("Location: edit_article.php?uploadimagefailed");
                    echo "file is too big";
                }
            } else {
                echo "File is too big";
            }
        } else {
            echo "There was an error uploading your file";
        }
    } else {
        // echo "File type not supported";
        $sql = "UPDATE article set article_title = '$arTitle' WHERE article_id = '$getArticleId'";
        if ($con->query($sql) === true) {
            // header("Location: edit_article.php?editarticlesuccess");
            echo "edit success";
        } else {
            // header("Location: edit_article.php?editarticlefailed");
            echo "edit failed";
        }
    }
}
