<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Contact - Howard Hermes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link rel="stylesheet" href="public/css/contactus.css?<?php echo time(); ?>" />
</head>

<body>
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
					<a class="nav-link active" href="contactus.php">Contact</a>
				</li>
			</ul>
		</div>
	</nav>
	<div class="container-fluid">
		<div class="row">
			<div class="col-sm">
				<div class="form-section">
					<h2 style="font-family: 'Noto Sans'; font-weight: 700; margin-bottom: 40px">Contact Us</h2>
					<p style="margin-bottom: 40px">
						Thank you for your interest in Howard Hermes Consulting. <br />
						Please fill out the form below to ask a question or to report a technical problem.
					</p>
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
			<div class="col-sm">
				<div class="banner-img">
					<img src="assets/img/M-22.jpg" alt="" style="max-width: 100%" />
				</div>
			</div>
		</div>
		<!-- (VI) social media and copyright -->
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
	<script src="js/wc.js"></script>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</body>

</html>

<?php
//create connection
// $con = mysqli_connect("localhost", "hhconsul_hhconsul", "K3G4yq1j7p", "hhconsul_test");
// if (mysqli_connect_errno()) {
//     echo "failed to connect!";
//     exit();
// } else {
//     echo "connection success";
// }
require_once 'hha/dbh.inc.php';

if (isset($_POST["submit"])) {
	$contactName = $_POST["name"];
	$contactEmail = $_POST["email"];
	$contactSubject = $_POST["subject"];
	$contactMssg = $_POST["messages"];
	$contactDate = date("Y-m-d");

	$sql = "INSERT into contact (name, email, subject, messages, mssg_date)
	VALUES ('$contactName', '$contactEmail', '$contactSubject', '$contactMssg', '$contactDate')";

	try {
		mysqli_query($con, $sql);
	} catch (Exception $e) {
		echo $e->getMessage();
	}
}
