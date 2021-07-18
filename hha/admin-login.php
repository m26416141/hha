<!DOCTYPE html>
<html lang="en" style="height: 100%;">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <title>Admin - Howard Hermes</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="../public/css/login-signup.css?<?php echo time(); ?>" />
</head>

<body style="height: 100%;">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <div class="container-fluid" style="height: 100%;">
        <div class="row" style="height: 100%">
            <div class="col-sm-2 banner-img" style="padding: 0px">
                <img src="../assets/img/M-22.jpg" alt="" style="height: 100%; width: 100%; object-fit: cover" />
            </div>
            <div class="col-sm-10 login-form">
                <form action="login.inc.php" method="POST">
                    <p class="login-title" style="font-weight: 700; font-size: 30px; margin-bottom: 70px; color: #793775">Login to Howard Hermes Admin.</p>
                    <div class="form-group">
                        <label for="inputUsername">Username</label>
                        <input class="form-input" type="text" name="name" id="inputUsername" placeholder="Your username">
                    </div>
                    <div class="form-group">
                        <label for="inputPassword">Password</label>
                        <input class="form-input" type="password" name="password" id="inputPassword" placeholder="Your password">
                    </div>
                    <button type="submit" name="submit" class="btn btn-secondary button-submit">Log In</button>
                    <?php
                    if (isset($_GET['error'])) {
                        if ($_GET['error'] == 'emptyinput') {
                            echo '<p class="error-mssg">Please fill in all fields</p>';
                        }
                        if ($_GET['error'] == 'wronglogin') {
                            echo '<p class="error-mssg">Username does not exist</p>';
                        }
                        if ($_GET['error'] == 'wrongpassword') {
                            echo '<p class="error-mssg">Wrong password</p>';
                        }
                    }
                    ?>
                </form>
                <p class="login-copyright">&#169; <?php echo date("Y"); ?> Howard Hermes Consulting</p>
            </div>
        </div>
    </div>
</body>

</html>