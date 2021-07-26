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
    <link rel="stylesheet" href="public/css/news.css?<?php echo time(); ?>" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <!-- navigation bar -->
    <nav class="navbar sticky-top navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="index.php">
            <img src="assets/img/1x/logo-crop.png" height="40" class="d-inline-block align-top" alt="" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="index.php">Who We Are
                        <!-- <span class="sr-only">(current)</span> -->
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link active" href="news.php">News</a> -->
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        News
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="news.php">Article</a>
                        <a class="dropdown-item" href="#">Agenda</a>
                        <!-- <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a> -->
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="careers.php">Careers</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contactus.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>
    <div class="container-fluid">
        <div id="news-row" class="row">
            <!-- <div class="col-sm-8">
                <div id="news-title" class="col-sm-12">
                    <h4>This is a title</h4>
                </div>
                <div id="news-date" class="col-sm-12">
                    <p>2021-07-21</p>
                </div>
                <div id="news-img" class="col-sm-12">
                    <img src="assets/uploads/60fc10475d2de3.76269085.jpg" alt="" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                </div>
                <div id="news-desc" class="col-sm-12">
                    <p>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris dapibus finibus purus ac placerat. Aenean at facilisis dolor. Sed aliquam cursus erat. Cras tincidunt velit nibh. Etiam eu turpis consequat, sagittis leo a, imperdiet urna. Cras accumsan lectus nec lacinia vestibulum. Nullam varius iaculis velit quis pulvinar. Nam suscipit ac risus in pulvinar. Nulla eleifend enim lacus, et fringilla libero sagittis quis. Donec feugiat luctus nunc ut feugiat. Curabitur laoreet, nulla eget auctor tincidunt, ligula diam egestas nisl, vitae interdum elit turpis eu magna. Maecenas tristique sem vel quam porttitor tempus. Aenean viverra a sapien ac laoreet. Phasellus erat orci, ultricies eu viverra non, pretium ut ex. Praesent sed nisi quis risus efficitur volutpat ullamcorper sed felis. Cras nec nisi velit.

                        Fusce enim ipsum, iaculis vel risus nec, vulputate dapibus turpis. In feugiat sollicitudin eros non luctus. Ut ac congue ante. Aenean venenatis felis sit amet sollicitudin lacinia. Vivamus sed malesuada dolor, ut volutpat enim. Curabitur ullamcorper dolor neque, non pulvinar ante rhoncus quis. Duis ut dui hendrerit, rutrum diam vitae, ornare felis. In est enim, placerat at ipsum ultrices, interdum laoreet enim. Duis vel arcu velit. Morbi in ante in risus faucibus viverra.

                        Sed sed nulla sit amet sem semper pretium. Nunc faucibus odio a scelerisque suscipit. Ut luctus erat dui, in luctus sapien euismod in. Nulla bibendum nisi ultrices tellus interdum, et volutpat mauris sagittis. Pellentesque tincidunt tellus efficitur efficitur porttitor. Phasellus iaculis orci libero, non dictum arcu lobortis ut. Maecenas tempus sapien eu purus semper iaculis. Suspendisse non feugiat nulla. Quisque ac nibh eget elit egestas lobortis vel ac quam. Suspendisse id ante lacinia, accumsan odio sit amet, mattis nisl. Morbi finibus, nunc ut blandit aliquet, lacus sapien fringilla nunc, et tincidunt risus lacus non diam. Aenean quis ultricies velit, at rutrum urna.
                    </p>
                </div>
            </div> -->
            <?php
            require_once 'hha/dbh.inc.php';
            $getArticleId = $_GET['newsid'];
            $query = "SELECT * FROM article WHERE article_id = $getArticleId";
            $query_run = mysqli_query($con, $query);
            $check_article = mysqli_num_rows($query_run) > 0;

            if ($check_article) {
                while ($row = mysqli_fetch_array($query_run)) {
                    $title = $row['article_title'];
                    $date = $row['article_date'];
                    $content = $row['article_content'];
                    $img = $row['article_img'];
                    // echo '
                    // <h4>' . $title . '</h4>
                    // <p>' . $date . '</p>
                    // <img src="assets/uploads/' . $img . '" alt="" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
                    // ';
                    // echo nl2br('<p>' . $content . '</p>');
                    echo '
                    <div class="col-sm-8">
                        <div id="news-title" class="col-sm-12">
                            <h4>' . $title . '</h4>
                        </div>
                        <div id="news-date" class="col-sm-12">
                            <p>' . $date . '</p>
                        </div>
                        <div id="news-img" class="col-sm-12">
                            <img src="assets/uploads/' . $img . '" alt="" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                        </div>
                    ';
                    echo nl2br('
                        <div id="news-desc" class="col-sm-12">
                            <p>' . $content . '</p>
                        </div>
                    </div>');
                }
            }
            ?>
            <div class="col-sm-4">

            </div>
        </div>
    </div>
</body>

</html>