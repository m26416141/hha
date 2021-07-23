<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Article - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link rel="stylesheet" href="public/css/news.css?<?php echo time(); ?>" />
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
        <div class="row">
            <div id="news-info-title" class="col-sm-12">
                <h4>Latest Updates</h4>
            </div>
        </div>
        <div id="news-row" class="row">
            <div id="news-info-item" class="col-sm-4">
                <div class="card">
                    <div class="card-body">
                        <div class="card-media">
                            <a>
                                <img src="assets/img/M-10.png" alt="" style="height: 100px; display: block; margin-left: auto; margin-right: auto;">
                            </a>
                        </div>
                        <h4 id="news-card-title" class="card-title news-card-title" style=" font-weight: 700">OPIS</h4>
                        <p id="news-card-content" style="font-weight: 300;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In sed quam convallis, lacinia eros sit amet, dapibus lectus. Quisque ac ipsum ac eros ullamcorper mattis ac ut tortor. Maecenas sit amet tempus turpis, sit amet porta tellus. Duis sit amet rutrum justo. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. In hac habitasse platea dictumst. Aliquam et condimentum ipsum. Phasellus lacinia tempor laoreet. Sed molestie sagittis consectetur. Aenean tempor risus et mauris consectetur, a sodales ante pulvinar. Vivamus mattis lorem sed mi sollicitudin, non ultrices neque maximus. Curabitur in pharetra orci. In sodales cursus magna ac venenatis.</p>
                        <a class="about-us-link" style="text-decoration: none;" href="" data-target=" #modalOpis" data-toggle="modal">Details &rarr;</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>