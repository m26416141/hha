<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1.0" /> -->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
	<title>Howard Hermes</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous" />
	<!-- add icon link -->
	<!-- <link rel="icon" href="/assets/img/1x/favicon.ico" type="image/x-icon"> -->
	<link rel="icon" href="favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
	<link rel="preconnect" href="https://fonts.gstatic.com" />
	<!-- <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&display=swap" rel="stylesheet" /> -->
	<link rel="stylesheet" href="public/css/home.css?<?php echo time(); ?>" />
	<link href='https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css' rel='stylesheet'>
</head>

<body>
	<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
	<!-- <script src="js/wc.js"></script> -->
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
					<a class="nav-link active" href="index.php">Who We Are
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
					<a class="nav-link" href="contactus.php">Contact</a>
				</li>
				<!-- <li class="nav-item dropdown">
						<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> Dropdown </a>
						<div class="dropdown-menu" aria-labelledby="navbarDropdown">
							<a class="dropdown-item" href="#">Action</a>
							<a class="dropdown-item" href="#">Another action</a>
							<div class="dropdown-divider"></div>
							<a class="dropdown-item" href="#">Something else here</a>
						</div>
					</li> -->
			</ul>
			<!-- <form class="form-inline my-2 my-lg-0">
					<input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" />
					<button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
				</form> -->
		</div>
	</nav>
	<!-- (i) home page content -->
	<div class="container-fluid">
		<!-- (I) intro part 1 -->
		<div class="row row-introduction">
			<div class="col-sm-12 col-introduction" style="background-color: white">
				<div class="content-1-introduction">
					<div class="intro-moto" style="flex-grow: 0;">Strategy</div>
					<div class="intro-separator"></div>
					<div class="intro-moto" style="flex-grow: 0">Solution</div>
					<div class="intro-separator"></div>
					<div class="intro-moto" style="flex-grow: 0;">Sustainability</div>
					<div class="intro-separator"></div>
					<!-- <p>Strategy<br />Solution<br />Sustainability</p>-->
				</div>
			</div>
			<div class="col-sm-12" style="padding: 0px; margin-top: 100px; margin-bottom: 100px;">
				<img src="assets/img/M-19.jpg" alt="" style="max-width: 100%;">
			</div>
			<div class="col-sm-12 col-introduction-2" style="background-color: white; margin: 10px 0px 30px 0px;">
				<hr style="background-color: black; margin: 0px 100px 40px 100px" />
				<p style="color: #380139; font-weight: 700; font-size: 30px;">Who We Are</p>
				<p class="intro-definition" style="font-weight: 200; font-size: 15px; margin: 20px 20px 50px 20px">
					To transform organization into Excelent Organization by partnering <br />with our clients to build Mindful Leadership across all platforms.
				</p>
			</div>
		</div>
		<!-- (II) intro part 2 -->
		<div class="row row-introduction-2">
			<div class="col-sm-6 col-intro-2-pict" style="background-color: wheat">
				<img class="intro-2-img" src="assets/img/M-26.jpg" alt="" />
			</div>
			<div class="col-sm-6 col-intro-2-desc" style="background-image: linear-gradient(130deg, #380139 50%, #b17abd)">
				<p class="section-heading" style="color: white; font-weight: 700; padding-bottom: 20px">Our History</p>
				<p class="section-content" style="color: white; padding-bottom: 20px; font-size: 17px;">
					Being present in today's disruptive era, where things are shifting rapidly, requires us to be agile. Not only that, the organic nature of the organization, consisting of many
					mindsets that come from each member of the organization, results in a fragmented organization focus. <br /><br />
					Organization with a fragmented focus will not be able to survive the long term, therefore, Howard Hermes, was founded to help organizations stay focused on carrying out a
					planned and measured transformations.
				</p>
				<!-- <a class="our-history-link" href="#" style="color: #b17abd;">Explore our insights on organization &rarr;</a> -->
			</div>
		</div>
		<!-- (III) intro part 3 -->
		<div class="row row-corporate-value" style="align-items: center;">
			<!-- <div class="col-sm-3" style="width: 100%">
					<h4 style="font-weight: 700">CORPORATE VALUE</h4>
				</div>
				<div class="col-sm-9"><hr style="background-color: black" /></div> -->
			<div class="intro-moto" style="flex-grow: 0; font-size: 30px;">Corporate Value</div>
			<div class="intro-separator"></div>
		</div>
		<div class="row row-corporate-value-item">
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<div>
							<img class="card-img-top" src="assets/img/M-34.jpg" alt="" style="height: 200px; width: 100%; object-fit: cover; margin-bottom: 40px" />
						</div>
						<div class="value-img">
							<img src="assets/img/M-01.png" alt="" style="
                                height: 100px;
                                display: block;
                                margin-left: auto;
                                margin-right: auto;">
						</div>
						<h4 class="card-title" style="margin-bottom: 30px; font-weight: 700">1 Vision</h4>
						<p>To become a company that is respected in various bussiness fields known to make positive impacts on shareholders, the environment and the nation.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="assets/img/M-38.jpeg" alt="" style="height: 200px; width: 100%; object-fit: cover; margin-bottom: 40px" />
						<div class="value-img">
							<img src="assets/img/M-02.png" alt="" style="
                                height: 100px;
                                display: block;
                                margin-left: auto;
                                margin-right: auto;">
						</div>
						<h4 class="card-title" style="margin-bottom: 30px; font-weight: 700">1 Heart</h4>
						<p>Working with the right attitude, manner and response.</p>
					</div>
				</div>
			</div>
			<div class="col-sm-4">
				<div class="card">
					<div class="card-body">
						<img class="card-img-top" src="assets/img/M-37.jpeg" alt="" style="height: 200px; width: 100%; object-fit: cover; margin-bottom: 40px" />
						<div class="value-img">
							<img src="assets/img/M-03.png" alt="" style="
                                height: 100px;
                                display: block;
                                margin-left: auto;
                                margin-right: auto;">
						</div>
						<h4 class="card-title" style="margin-bottom: 30px; font-weight: 700">1 Spark</h4>
						<p>Spark over changes and unyielding attitude. Always trying to countless failure. Striving for new approach to unsuccessful attempts.</p>
					</div>
				</div>
			</div>
		</div>
		<!-- (IV) intro part 4 -->
		<div class="row row-about-us">
			<div class="col-sm-6 col-intro-2-desc" style="background-color: #f2f2f2; padding-bottom: 120px">
				<p style="color: black; font-family: 'Noto Sans'; font-weight: 700; font-size: 50px; padding-bottom: 40px">What we believe</p>
				<p style="color: black; font-weight: 300; margin-bottom: 40px">
					We believe that each organization is an ecosystem made up of human beings with different and unique mindsets. Each of will bring different impacts and changes to the
					organization from time to time.
				</p>
			</div>
			<div class="col-sm-6" style="padding: 0px">
				<img class="intro-2-img" src="assets/img/M-31.jpg" alt="" style="object-position: -20px" />
			</div>
		</div>
		<div class="row row-about-us">
			<div class="col-sm-6" style="padding: 0px">
				<img class="intro-2-img" src="assets/img/M-30.jpg" alt="" />
			</div>
			<div class="col-sm-6 col-intro-2-desc" style="background-color: #f2f2f2; padding-bottom: 120px">
				<p style="color: black; font-family: 'Noto Sans'; font-weight: 700; font-size: 50px; padding-bottom: 40px">Our working approach</p>
				<p style="color: black; font-weight: 100; margin-bottom: 40px">
					We work strategically and agile to unlock the highest optimal point in both personal and professional life of each people in the organization. With the ultimate goal to have
					the organization running automatically hand in hand towards a sustainable change as a competitiveness of the organization.
					<br />
					<br />
					We assist your company to implements rapid transformation through Organizational Excellence method with Leadership, Behaviour and Agility System over 6 to maximum 12 months
					course of time.
					<br />
					<br />
					Your organization will achieve a state where it has organizational assets maximised in dimension; human assets, customer assets, operational assets and financial asset to reach
					a measurable organizational mission.
				</p>
			</div>
		</div>
		<div class="row row-about-us">
			<div class="col-sm-6 col-intro-2-desc" style="background-color: #f2f2f2; padding-bottom: 120px">
				<p style="color: black; font-family: 'Noto Sans'; font-weight: 700; font-size: 50px; padding-bottom: 40px">Our goals</p>
				<p style="color: black; font-weight: 100; margin-bottom: 40px">
					To improve Organizational Performance<br />
					To achive Organizational Effectiveness and Sustainability <br>
					To increase cooperation and collaboration between employees <br>
					To improve Organizational Behaviour <br>
					To improve Organizational Problem-solving <br>
					To encourage dexterity for faster change <br>
					To balance Organizational Life through mindfulness <br>
					To strenghten Corporate Value and Organizational Culture <br>
					To sharpen vision and mission metrics
				</p>
				<a class="about-us-link" href="services.php">Get services &rarr;</a>
			</div>
			<div class="col-sm-6" style="padding: 0px">
				<img class="intro-2-img" src="assets/img/M-29.jpg" alt="" />
			</div>
		</div>
		<div class="row row-about-us">
			<div class="col-sm-6" style="padding: 0px">
				<img class="intro-2-img" src="assets/img/M-27.jpg" alt="" />
			</div>
			<div class="col-sm-6 col-intro-2-desc" style="background-color: #f2f2f2; padding-bottom: 120px">
				<p style="color: black; font-family: 'Noto Sans'; font-weight: 700; font-size: 50px; padding-bottom: 40px">Join Howard Hermes</p>
				<p style="color: black; font-weight: 300; margin-bottom: 40px">
					Come to Howard Hermes to do the best work, <br>
					with the best teams and truly be at your best.
				</p>
				<!--<div style="margin-bottom: 15px;">-->
				<!--	<a class="about-us-link" href="#">Careers &rarr;-->
				<!--	</a>-->
				<!--</div>-->
				<a class="about-us-link" href="careers.php">Search and apply &rarr;</a>
			</div>
		</div>
		<!-- (V) intro part 5 -->
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
	<!-- (VI) social media and copyright -->
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
	<!-- (i) end of home page content -->
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
	<!-- <script src="/js/navbar-scroll.js"></script> -->
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
	<script>
		var scroll1 = window.pageYOffset;
		var nav = document.querySelector('nav');
		window.onscroll = function() {
			var scroll2 = window.pageYOffset;
			if (scroll1 > scroll2) {
				document.querySelector('nav').style.top = "0";
				nav.classList.remove('bg-light');
				nav.style.backgroundColor = "white";
			} else {
				document.querySelector('nav').style.top = "-100px";
				nav.classList.add('bg-light');
				nav.style.backgroundColor = "white";
			}
			scroll1 = scroll2
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
