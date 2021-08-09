<!DOCTYPE html>
<html lang="en">

<?php
require_once 'hha/dbh.inc.php';
$getArticleId = $_GET['newsid'];
$query = "SELECT * FROM article WHERE article_id = $getArticleId";
$query_run = mysqli_query($con, $query);
$check_article = mysqli_num_rows($query_run) > 0;

if ($check_article) {
    while ($row = mysqli_fetch_array($query_run)) {
        $title = $row['article_title'];
        // $getDate = date_create($row['article_date']);
        // $date = date_format($getDate, "d / m / Y");

        $getDate = date_create($row['article_date']);
        $date = date_format($getDate, "m/d/Y");
        $date2 = date_format($getDate, "l, d M Y");
        $dateToTime = strtotime($date);
        $diff = time() - $dateToTime;
        $day_diff = floor($diff / 86400);
        $dateDisplay;
        if ($day_diff == 0) {
            if ($diff < 60) $dateDisplay = 'Just now';
            else if ($diff < 120) $dateDisplay = '1 minute ago';
            else if ($diff < 3600) $dateDisplay = strval(floor($diff / 60)) . ' minutes ago';
            else if ($diff < 7200) $dateDisplay = '1 hour ago';
            else if ($diff < 86400) {
                $strDiff = strval(floor($diff / 3600));
                // $dateDisplay = $strDiff . ' hours ago';
                $dateDisplay = 'Today';
            }
        } else if ($day_diff < 2) {
            $dateDisplay = 'Yesterday';
        } else if ($day_diff < 7) $dateDisplay = $day_diff . ' days ago';
        else if ($day_diff < 31) $dateDisplay = ceil($day_diff / 7) . ' weeks ago';
        else if ($day_diff < 60) $dateDisplay = 'last month';

        $content = $row['article_content'];
        $img = $row['article_img'];
        // echo '
        // <h4>' . $title . '</h4>
        // <p>' . $date . '</p>
        // <img src="assets/uploads/' . $img . '" alt="" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
        // ';
        // echo nl2br('<p>' . $content . '</p>');
        echo '
        <head>
            <meta charset="UTF-8" />
            <meta http-equiv="X-UA-Compatible" content="IE=edge" />
            <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
            <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
            <!-- <title> - Howard Hermes
            </title> -->
            <title>' . $title . ' - Howard Hermes</title>
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
            <link rel="preconnect" href="https://fonts.gstatic.com" />
            <link rel="stylesheet" href="public/css/news-details.css?<?php echo time(); ?>" />
            <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet">
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
                <div id="news-row" class="row d-flex justify-content-center">
            ';

        echo '
        <div id="news-title" class="col-sm-8">
                <h4>' . $title . '</h4>
        </div>
        <div class="col-sm-8 logo-border" style="padding: 0px;"></div>
        <div class="col-sm-8" style="padding: 0px">
            <div id="news-date" class="col-sm-12" style="padding: 0px">
                <p>' . $date2 . '</p>
            </div>
            <div id="news-img" class="col-sm-12" style="padding: 0px">
                <img src="assets/uploads/' . $img . '" alt="" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
            </div>
        ';
        echo nl2br('
            <div id="news-desc" class="col-sm-12" style="padding: 0px">
                <p>' . $content . '</p>
            </div>
        </div>');
        echo '
        <!-- <div id="news-contact" class="col-sm-4">
            <p>Got any question?</p>
            <div class=" col-sm" style="background-image: linear-gradient(130deg, #380139 70%, #b17abd); text-align: center; padding: 70px 0px 70px 0px;">
                <div class="row justify-content-sm-center details-row-get-in-touch">
                    <div class="col-sm" style="color: white; font-size: 20px;">
                        <p style="color: white; font-weight: 200"><a class="border-link" href="contactus.php">Get in touch</a> with us or</p>
                        <a class="border-link location" href="location.php">find our office</a>
                    </div>
                </div>
            </div>
        </div> -->
        ';
    }
}
?>
</div>
<div class="row row-how"">
            <div class=" col-sm" style="background-image: linear-gradient(130deg, #380139 70%, #b17abd); text-align: center; padding: 70px 40px 70px 40px;">
    <p style="color: white; font-family: 'Noto Sans'; font-size: 40px; font-weight: 700; margin-bottom: 20px;">How can we help you?</p>
    <div class="row justify-content-sm-center row-get-in-touch">
        <div class="col-sm" style="color: white; font-size: 20px;">
            <p style="color: white; font-weight: 200"> <a class="border-link" href="contactus.php">Get in touch</a> with us or <a class="border-link location" href="location.php">find our office</a></p>
        </div>
    </div>
</div>
</div>
<div class="row end-page-info">
    <div class="col-sm bottom-logo" style="display: flex; align-items: center; padding: 0px">
        <img src="assets/img/1x/logo-crop.png" height="70" alt="Howard Hermes Logo" style="margin-top: 20px" />
    </div>
    <div class="col-sm-6 bottom-link-full">
        <div class="bottom-link">
            <div class="col-link">
                <a href="contactus.php" style="color: black;">Contact</a>
            </div>
            <div class="col-link">
                <a href="location.php" style="color: black;">Location</a>
            </div>
        </div>
        <div class="bottom-social" style="margin-top: 40px;">
            <div class="col-social-media">
                <a href="#">
                    <img src="assets/img/facebook.png" alt="" style="
                                height: 20px;
                                filter: invert(100%);
                                display: block;
                                margin-left: auto;
                                margin-right: auto;">
                </a>
            </div>
            <div class="col-social-media">
                <a href="https://instagram.com/howardhermes?utm_medium=copy_link">
                    <img src="assets/img/instagram.png" alt="" style="
                                height: 20px; 
                                filter: invert(100%); 
                                display: block;
                                margin-left: auto;
                                margin-right: auto;">
                </a>
            </div>
            <div class="col-social-media">
                <a href="https://www.linkedin.com/company/howardhermesconsulting">
                    <img src="assets/img/linkedin.png" alt="" style="
                                height: 20px; 
                                filter: invert(100%); 
                                display: block;
                                margin-left: auto;
                                margin-right: auto;">
                </a>
            </div>
        </div>
    </div>
    <div class="col-sm-12 bottom-copyright">
        <hr style="background-color: black" />
        <p style="margin-bottom: 40px">&#169; 2021 Howard Hermes Consulting</p>
    </div>
</div>
</div>
<script>
    var scroll1 = window.pageYOffset;
    var nav = document.querySelector("nav");
    window.onscroll = function() {
        var scroll2 = window.pageYOffset;
        if (scroll1 > scroll2) {
            document.querySelector("nav").style.top = "0";
            nav.classList.remove("bg-light");
            nav.style.backgroundColor = "white";
        } else {
            document.querySelector("nav").style.top = "-100px";
            nav.classList.add("bg-light");
            nav.style.backgroundColor = "white";
        }
        scroll1 = scroll2;
    };
</script>
</body>

</html>