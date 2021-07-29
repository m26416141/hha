<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Agenda - Howard Hermes</title>
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
        <h4 id="news-info-title" style="align-items: center; text-align: center">This Month Agenda</h4>
        <!-- <div class="row">
            <div id="news-info-title" class="col-sm-12" st>
                <h4>Latest Updates</h4>
            </div>
        </div> -->
        <div id="agenda-row" class="row">
            <div class="col-sm-12">
                <img src="https://i1.wp.com/css-tricks.com/wp-content/uploads/2020/07/calendar-month-view-previous-past-months.png?resize=1000%2C666&ssl=1" alt="imgAgenda" style="object-fit: contain; width: 100%; height: 100%">
            </div>
        </div>
        <h4 style="align-items: center; text-align: center; margin: 100px 0px; font-size: 20px"><a class="border-link" href="M-22.jpg" download="Month Agenda" style="color: #793775; text-align: center; align-items: center; font-size: 20px; font-weight: 700">Save</a> this agenda to your device</h4>
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