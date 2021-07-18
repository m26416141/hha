<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Location - Howard Hermes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" href="public/css/location.css?<?php echo time(); ?>" />
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
		<div class="row row-location">
			<div class="col-sm-6 col-location-details" style="background-image: linear-gradient(130deg, #380139 50%, #b17abd)">
				<div style="margin-left: 80px; margin-right: 80px">
					<h2 style="margin-bottom: 70px; font-family: 'Noto Sans'; font-weight: 700; font-size: 40px">Our Office Location</h2>
					<h6 style="text-transform: uppercase; font-family: 'Noto Sans'; font-weight: 700; margin-bottom: 20px">Head Office</h6>
					<p style="margin-bottom: 10px; font-weight: 200">Jakarta : PT Howard Hermes Indonesia<br />Wisma GKBI Floor 39, Jl. Jend. Sudirman Jakarta - Indonesia</p>
					<a href="#" id="LinkMapJkt" onclick="loadJakarta()" style="color: white; font-family: 'Noto Sans'; font-weight: 700; text-decoration: none">Find us on Maps &rarr;</a>
					<br />
					<p style="margin-top: 40px; margin-bottom: 10px; font-weight: 200">Surabaya : PT Howard Hermes Indonesia<br />Jalan Dharmahusadha Indah 55 Surabaya - Indonesia</p>
					<a href="#" id="LinkMapSby" onclick="loadSurabaya()" style="color: white; font-family: 'Noto Sans'; font-weight: 700; text-decoration: none">Find us on Maps &rarr;</a>
				</div>
			</div>
			<div class="col-sm-6" style="padding: 0px">
				<iframe id="loadPlace" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.420037426814!2d112.7706218612!3d-7.273801059222218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa2f95de1e2d%3A0x498c56bba196e7e!2sJl.%20Raya%20Dharma%20Husada%20Indah%20No.55%2C%20Mulyorejo%2C%20Kec.%20Mulyorejo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060115!5e0!3m2!1sen!2sid!4v1620625422672!5m2!1sen!2sid" style="border: 0; width: 100%;" allowfullscreen="" loading="lazy"></iframe>
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
		const cwords = document.getElementById("inputMessages");
		const word_display = document.getElementById("wcDisplay");

		function countWord() {
			let text = cwords.value;
			// text = text.trim();
			const words = text;
			word_display.innerText = words.length;
		}
	</script>
	<!-- <script type="text/javascript" src="/js/navbar-scroll.js"></script> -->
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
	<script>
		function loadJakarta() {
			document.getElementById("loadPlace").src =
				"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d15865.397455414168!2d106.80505432689411!3d-6.217575596427167!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f74728ff4317%3A0x6d1995fb4925165d!2sWisma%20GKBI!5e0!3m2!1sen!2sid!4v1620713022427!5m2!1sen!2sid";
			document.getElementById("LinkMapSby").style.color = "white";
			document.getElementById("LinkMapJkt").style.color = "#b17abd";
		}

		function loadSurabaya() {
			document.getElementById("loadPlace").src =
				"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7915.420037426814!2d112.7706218612!3d-7.273801059222218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dd7fa2f95de1e2d%3A0x498c56bba196e7e!2sJl.%20Raya%20Dharma%20Husada%20Indah%20No.55%2C%20Mulyorejo%2C%20Kec.%20Mulyorejo%2C%20Kota%20SBY%2C%20Jawa%20Timur%2060115!5e0!3m2!1sen!2sid!4v1620625422672!5m2!1sen!2sid";
			document.getElementById("LinkMapSby").style.color = "#b17abd";
			document.getElementById("LinkMapJkt").style.color = "white";
		}
	</script>
</body>

</html>
<?php
//create connection
// $con = mysqli_connect("localhost", "hhconsul_hhconsul", "K3G4yq1j7p", "hhconsul_test");
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
