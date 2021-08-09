<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- <title> - Howard Hermes
    </title> -->
    <title>Article - Howard Hermes</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="../public/css/news.css?<?php echo time(); ?>" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <div class="container-fluid">
        <div id="news-row" class="row">
            <?php
            require_once 'dbh.inc.php';
            $getArticleId = $_GET['newsid'];
            $query = "SELECT * FROM article WHERE article_id = $getArticleId";
            $query_run = mysqli_query($con, $query);
            $check_article = mysqli_num_rows($query_run) > 0;

            if ($check_article) {
                while ($row = mysqli_fetch_array($query_run)) {
                    $title = $row['article_title'];
                    $getDate = date_create($row['article_date']);
                    $date = date_format($getDate, "d / m / Y");
                    $content = $row['article_content'];
                    $img = $row['article_img'];
                    // echo '
                    // <h4>' . $title . '</h4>
                    // <p>' . $date . '</p>
                    // <img src="assets/uploads/' . $img . '" alt="" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
                    // ';
                    // echo nl2br('<p>' . $content . '</p>');
                    echo '
                    
                    ';
                    echo '
                    <div class="col-sm-8">
                        <div id="news-title" class="col-sm-12">
                            <h4>' . $title . '</h4>
                        </div>
                        <div id="news-date" class="col-sm-12">
                            <p>' . $date . '</p>
                        </div>
                        <div id="news-img" class="col-sm-12">
                            <img src="../assets/uploads/' . $img . '" alt="" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    ';
                    echo nl2br('
                        <div id="news-desc" class="col-sm-12">
                            <p>' . $content . '</p>
                        </div>
                    </div>');
                }
            }
            echo '
            <div class="col-sm-4">
                <div id="edit-delete-article-col" class="col-sm-12">
                    <a id="button-edit" data-id="' . $getArticleId . '" class="btn btn-primary btn-block" target="_blank">Edit Article</a>
                </div>
            </div>';
            ?>
            <script>
                $('#button-edit').on('click', function(e) {
                    // alert($(this).data('id'));
                    var articleId = $(this).data('id');
                    // e.preventDefault();
                    var articleLink = "edit_article.php?newsid=" + articleId;
                    window.location.href = articleLink;
                });
            </script>
        </div>
    </div>
</body>

</html>