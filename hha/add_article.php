<?php
session_start();
if (!isset($_SESSION['uid'])) {
    header("location: admin-login.php");
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Add Article - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../public/css/login-signup.css?<?php echo time(); ?>" />
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

    <link href="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote-bs4.min.js"></script>
    <!-- <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script> -->
    <!-- <script src="https://cdn.tiny.cloud/1/1f512zox6c97yle7seslltdipr5s5ugtaujzd9ga7yljxbek/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <script>
        tinymce.init({
            selector: '#inputDesc'
        });
    </script> -->
    <div class="container-fluid">
        <form action="upload.inc.php" method="POST" enctype="multipart/form-data">
            <div class="row">
                <div class="col-sm" style="padding: 0px;">
                    <h4 style="font-family: 'Noto Sans'; font-weight: 700; margin: 30px">Add Article</h4>
                </div>
                <div class="col-sm d-flex align-items-center justify-content-end" style="padding: 0px;">
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
                            <input class="form-input" type="text" name="title" id="inputTitle" placeholder="Article title">
                            <label for="inputDate">Date published</label>
                            <input class="form-input" type="date" name="date" id="inputDate" style="padding-bottom: 20px;">
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
                    <textarea id="inputDesc" class="form-text-area" rows="20" type="text" name="desc" placeholder="Article description" oninput="countWord()"></textarea>
                    <script>
                        $('#inputDesc').summernote({
                            toolbar: [
                                // [groupName, [list of button]]
                                ["style", ["bold", "italic", "underline", "clear"]],
                                ["font", ["strikethrough", "superscript", "subscript"]],
                                ["fontsize", ["fontsize"]],
                                ["color", ["color"]],
                                ["para", ["ul", "ol", "paragraph"]]
                            ],
                            tabsize: 2,
                            height: 400
                        });
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
</body>

</html>

<?php

require_once 'dbh.inc.php';
