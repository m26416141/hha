<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Services - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="public/css/services.css?<?php echo time(); ?>" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
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
                    <a class="nav-link active" href="services.php">Services</a>
                </li>
                <li class="nav-item dropdown">
                    <!-- <a class="nav-link active" href="news.php">News</a> -->
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
        <?php
        require_once 'hha/dbh.inc.php';
        $getservicesID = $_GET['servicesid'];
        $query = "SELECT * FROM services where services_id = $getservicesID";
        $query_run = mysqli_query($con, $query);
        $check_services = mysqli_num_rows($query_run) > 0;
        if ($check_services) {
            while ($row = mysqli_fetch_array($query_run)) {
                $title = $row['services_title'];
                $content = $row['services_content'];
                $img = $row['services_img'];
                $imgstatus = $row['services_img_status'];
                $services = $row['services_name'];

                if ($title == null || $content == null || $img == null) {
                    echo '
                    <div class="row" id="row-no-jobs" style="padding: 0px; margin: 80px 40px 110px;">
                        <div class="col-sm-12" style="padding: 0px; text-align: center">
                            <h4 style="font-weight: 700; margin-bottom: 40px;">Sorry there is no event available this time</h4>
                            <p style="margin-bottom: 40px;">Thank you for your interest about our services at Howard Hermes Consulting.<br>Currently we do not have any ' . $services . ' event available.</p>
                        </div>
                    </div>
                ';
                } else {
                    echo '
                    <div class="row d-flex justify-content-center row-service-content">
                        <div class="col-sm-8" style="align-items: center; padding: 0px">
                            <div id="news-title" class="col-sm-12">
                                <h2 style="font-weight: 700; font-size: 50px">' . $title . '</h2>
                                <div class="col-sm-12 logo-border" style="padding: 0px; margin: 40px 0px 20px 0px"></div>
                            </div>';
                    if ($imgstatus == 1) {
                        echo '
                                <div id="news-img" class="col-sm-12">
                                    <img src="assets/uploads/' . $img . '" alt="" style="width: 100%; display: block; margin-left: auto; margin-right: auto;">
                                </div>';
                    } else if ($imgstatus == 2) {
                        echo '
                                <div id="services-media" class="col-sm-12">
                                    <iframe src="' . $img . '" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="margin-bottom: 20px;"></iframe>
                                </div>
                                ';
                    }
                    echo '
                            <div id="news-desc" class="col-sm-12" style="margin-top: 40px">
                                ' . $content . '
                                <div class="col-sm-12 logo-border" style="padding: 0px; margin: 40px 0px 20px 0px"></div>
                            </div>
                            <div class="row" style="padding: 70px 16px 100px">
                                <div class="col-sm-12">
                                    <div style="text-align: center; padding: 40px; margin-bottom: 20px">
                                        <p style="color: black; font-family: "Noto Sans"; font-size: 40px; font-weight: 700; margin-bottom: 20px;"><b style="border-bottom: 2px solid #793775">Book Your Seat!</b></p>
                                        <p style=" color: black; margin: 0px">Limited to 50 Participant</p>
                                    </div>
                                </div>
                                <div id="div-form" class="col-sm-6">
                                    <a id="btn-form" class="btn btn-block" href="https://bit.ly/RegCPORHowardHermes"><b>Book Now</b></a>
                                </div>
                                <div id="div-info" class="col-sm-6">
                                    <a id="btn-info" class="btn btn-block" href="https://wa.me/6281230983619">Information</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    ';
                }
            }
        } else {
        }
        ?>
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
        <div class="col-sm-6 hh-img" style=" display: flex; align-items: center; padding: 0px;">
            <img src="assets/img/1x/logo-crop.png" height="70" alt="Howard Hermes Logo" style="margin-top: 20px;">
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
    </div>
    <div class="row bottom-copyright">
        <div class="col-sm" style="padding: 0px;">
            <hr style="background-color: black;">
            <p class="copyright-text" style="margin-bottom: 40px;">&#169; 2021 Howard Hermes Consulting</p>
        </div>
    </div>
    <div class="fab-add" id="fab">
        <i class='bx bx-message-add' style="font-size: 40px; display: block; margin-left: auto; margin-right: auto; color: #793775; cursor: pointer;"></i>
        <!-- <a href="#" onclick="toogleAddCareers()">hai</a> -->
        <script>
            document.getElementById("fab").addEventListener("click", function() {
                console.log("button clicked");
                var rotated = false;
                var action = document.querySelector('.row-form-add');
                action.classList.toggle('fab-active');
                var action_fab = document.querySelector('.fab-add');
                action_fab.classList.toggle('fab2-active');
            });
        </script>
    </div>
    <div class="row-form-add row">
        <div class="col-sm-12">
            <div class="form-add-careers">
                <h4 style="font-family: 'Noto Sans'; font-weight: 700; margin-bottom: 30px">Messages</h4>
                <form method="POST">
                    <label for="inputName">Name</label>
                    <input class="form-input" type="text" name="name" id="inputName" placeholder="Your name">
                    <label for="inputEmail">Email</label>
                    <input class="form-input" type="text" name="email" id="inputEmail" placeholder="Your email">
                    <label for="inputSubject">Subject</label>
                    <input class="form-input" type="text" name="subject" id="inputSubject" placeholder="Your subject">
                    <div class="row">
                        <div class="col-sm-6">
                            <label for="inputMessages">Messages</label>
                        </div>
                        <div class="col-sm-6">
                            <label style="float: right;"><span id="wcDisplay" style="font-weight: 100;">0</span> / 200</label>
                        </div>
                    </div>
                    <textarea id="inputMessages" class="form-text-area" rows="10" maxlength="200" type="text" name="messages" id="inputMessages" placeholder="Your messages" oninput="countWord()"></textarea>
                    <!-- <input type="submit" name="submit"> -->
                    <button type="submit" name="submit" class="btn-block button-submit">Submit</button>
                </form>
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