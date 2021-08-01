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
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

        <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
        <link rel="stylesheet" href="../public/css/login-signup.css?<?php echo time(); ?>" />
    </head>
    
    <body>
        <div class="container-fluid">
            <form method="POST" enctype="multipart/form-data">
                <div class="row">
                    <div class="col-sm d-flex align-items-center" style="padding: 0px; display: flex">
                        <h4 style="font-weight: 700; margin: 30px">Edit Article</h4>
                        <span id="editS"></span>
                    </div>
                    <div class="col-sm d-flex align-items-center justify-content-end" style="padding: 0px;">
                        <div style="float: right; padding-right: 20px">
                            <button id="btn-add-article" class="btn btn-danger" type="delete" name="delete">Delete</button>
                        </div>
                        <div style="float: right; padding-right: 30px">
                            <button id="btn-add-article" type="submit" name="submit" class="btn btn-primary">Save</button>
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
                                <!-- <img src="../assets/uploads/' . $img . '" alt="" style="width: 100%; height: 200px; object-fit: cover; margin-bottom: 20px;"> -->
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
                            $("#inputDesc").summernote({
                                toolbar: [
                                    // [groupName, [list of button]]
                                    ["style", ["bold", "italic", "underline", "clear"]],
                                    ["font", ["strikethrough", "superscript", "subscript"]],
                                    ["fontsize", ["fontsize"]],
                                    ["color", ["color"]],
                                    ["para", ["ul", "ol", "paragraph"]],
                                    ["height", ["height"]]
                                ],
                                tabsize: 2,
                                height: 400
                            });
                        $("#inputDesc").summernote("fontSize", 18);
                        // $("#summernote").summernote("lineHeight", 20);
                        </script>
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
                // window.location.href = "load_news_details.php?newsid=" + articleId;
                window.location.href = "admin.php";
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

    $allowedTags = '<p><strong><em><u><h1><h2><h3><h4><h5><h6><img>';
    $allowedTags .= '<li><ol><ul><span><div><br><ins><del><b><a><font>';

    //other input
    $arTitle = $_POST["title"];
    $arDate = $_POST["date"];
    $arDesc = strip_tags(stripslashes($_POST["desc"]), $allowedTags);
    // $getArticleId = $_GET['newsid'];

    if (in_array($fileExt, $allowedFile)) {
        if ($fileError === 0) {
            if ($fileSize < 500000) {
                $fileNameNew = uniqid('', true) . "." . $fileExt;
                if (move_uploaded_file($fileTmp, '../assets/uploads/' . $fileNameNew) === true) {
                    $sql = "UPDATE article SET article_title = '$arTitle', article_date = '$arDate', article_img = '$fileNameNew', article_content = '$arDesc' WHERE article_id = '$getArticleId'";
                    if ($con->query($sql) === true) {
                        // header("Location: edit_article.php?editarticlesuccess");
                        echo "
                        <script>
                            document.getElementById('editS').style.visibility = 'visible';
                            document.getElementById('editS').innerHTML = 'Edit success';
                        </script>";
                    } else {
                        if (empty($arDate)) {
                            $sql = "UPDATE article SET article_title = '$arTitle', article_img = '$fileNameNew', article_content = '$arDesc' WHERE article_id = '$getArticleId'";
                            if ($con->query($sql)) {
                                echo "
                                <script>
                                    document.getElementById('editS').style.visibility = 'visible';
                                    document.getElementById('editS').innerHTML = 'Edit success';
                                </script>";
                            } else {
                                echo "
                                <script>
                                    document.getElementById('editS').style.visibility = 'visible';
                                    document.getElementById('editS').style.backgroundColor = '#dc3545';
                                    document.getElementById('editS').innerHTML = 'Edit failed';
                                </script>";
                            }
                        }
                    }
                } else {
                    // header("Location: edit_article.php?uploadimagefailed");
                    // echo "file is too big";
                    echo "
                    <script>
                        document.getElementById('editS').style.visibility = 'visible';
                        document.getElementById('editS').style.backgroundColor = '#dc3545';
                        document.getElementById('editS').innerHTML = 'There was an error uploading your file';
                    </script>";
                }
            } else {
                // echo "File is too big";
                echo "
                <script>
                    document.getElementById('editS').style.visibility = 'visible';
                    document.getElementById('editS').style.backgroundColor = '#dc3545';
                    document.getElementById('editS').innerHTML = 'File is too big';
                </script>";
            }
        } else {
            // echo "There was an error uploading your file";
            echo "
            <script>
                document.getElementById('editS').style.visibility = 'visible';
                document.getElementById('editS').style.backgroundColor = '#dc3545';
                document.getElementById('editS').innerHTML = 'There was an error uploading your file';
            </script>";
        }
    } else {
        // echo "File type not supported";
        if (empty($arDate)) {
            $sql = "UPDATE article set article_title = '$arTitle', article_content = '$arDesc' WHERE article_id = '$getArticleId'";
            if ($con->query($sql) === true) {
                // header("Location: edit_article.php?editarticlesuccess");
                echo "
                <script>
                    document.getElementById('editS').style.visibility = 'visible';
                    document.getElementById('editS').innerHTML = 'Edit success';
                </script>";
            }
        } else if (!empty($arDate)) {
            $sql = "UPDATE article set article_title = '$arTitle', article_date = '$arDate', article_content = '$arDesc' WHERE article_id = '$getArticleId'";
            if ($con->query($sql) === true) {
                // header("Location: edit_article.php?editarticlesuccess");
                echo "<script>
                document.getElementById('editS').style.visibility = 'visible';
                document.getElementById('editS').innerHTML = 'Edit success';
                </script>";
            }
        } else {
            // echo "edit failed";
            echo "
            <script>
                document.getElementById('editS').style.visibility = 'visible';
                document.getElementById('editS').style.backgroundColor = '#dc3545';
                document.getElementById('editS').innerHTML = 'Edit failed';
            </script>";
        }
    }
}
