<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<link rel="icon" href="./assets/SIM logo.png" type="image/gif">
	<link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet"> 
	<link rel="stylesheet" type="text/css" href="bootstrap.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="contact_us_new.css">
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" style="background-color: #007F00;">
		<div class="container">
			<a class="navbar-brand" href="#"><img width="200" height="100" src="./assets/SIM logo.png" > Sowseeds</a>
			<!-- Hamburger -->
		  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
		    <span class="navbar-toggler-icon"></span>
		  </button>
		  <!-- Collapses navbar items into Hamburger -->
		  <div class="collapse navbar-collapse" id="navbarNav">
		  	<ul class="navbar-nav">
		    <li class="nav-item dropdown active">
			        <a class="nav-link dropdown-toggle" href="index.html" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
			          About Us<span class="sr-only">(current)</span>
			        </a>
			        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
			          <a class="dropdown-item" href="index.html">Our Purpose </a>
			          <a class="dropdown-item" href="our_pastor_new.html">Our Pastor</a>
			          <a class="dropdown-item" href="our_team.html">Our Team</a>
			          <a class="dropdown-item" href="our_values_new.html">Our Values</a>
			          <a class="dropdown-item" href="statement_of_faith_new.html">Statement of Faith</a>
			          <a class="dropdown-item" href="contact_us_new.php">Contact Us</a>
			          
			   </li>
		      <li class="nav-item">
		        <a class="nav-link" href="events_new.html">Events</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="mission_vision_new.html">Mission & Vision</a>
		      </li>
		     <li class="nav-item">
		        <a class="nav-link" href="audio_teachings.html">Audio Teachings</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="directions_new.html">Directions</a>
		      </li>
		      <li class="nav-item">
		        <a class="nav-link" href="#">Donations</a>
		      </li>
		    </ul>
			</div>
 			
 		</div>
	</nav>

	<div class="container">
		<!-- <img src="nature4.jpg" class="img-fluid" alt="Responsive image"> -->
		
		<div class="row">
			<div class="col-lg-12">
				<div id="content">
					<h1>Contact Us <i class="fa fa-phone"></i></h1>
				</div>
			</div>
		</div>
		<div class="jumbotron">
			<div class="row">

				<div class="col-sm-6">
					<div class="content1">
						<h3>Get In Touch </h3>
						<h4>Sowseeds International Ministries</h4>
						<p>Naa Sakua Circle, Accra</p>
						<p>(+233) 24-438-4937</p>
						<p>info@sowseeedsintlministries.com</p>
						<hr>
						
						
					</div>
				</div>
				<div class="col-sm-6">
					<div class="content1" id="service">
						<form>
						  <div class="form-group needs-validation" novalidate>
						  	<div class="form-row">
							    <div class="col-md-6 mb-3">
							      <label for="validationTooltip01">First name*</label>
							      <input type="text" class="form-control" id="validationTooltip01" placeholder="John" required>
							      <div class="valid-tooltip">
							        Looks good!
							      </div>
							    </div>
							    <div class="col-md-6 mb-3">
							      <label for="validationTooltip02">Last name*</label>
							      <input type="text" class="form-control" id="validationTooltip02" placeholder="Antwi" required>
							      <div class="valid-tooltip">
							        Looks good!
							      </div>
							    </div>
							  </div>
						    <label for="InputEmail1">Email address*</label>
						    <input type="email" class="form-control fix-rounded-right" id="InputEmail1" aria-describedby="emailHelp" placeholder="name@example.com" required>
						    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
						    <div class="valid-tooltip">
						        Looks good!
						     </div>
						  </div>
						  <div class="mb-3">
						    <label for="PhoneNum">Phone*</label>
						    <input type="text" class="form-control" id="PhoneNum" placeholder="+233 244384937 " required>
						    <div class="invalid-feedback">
						      Please enter a phone number.
						    </div>
						 </div>
						  <div class="custom-control custom-radio">
							  <input type="radio" id="customRadio1" name="customRadio" class="custom-control-input">
							  <label class="custom-control-label" for="customRadio1">Comment</label>
						</div>
						<div class="custom-control custom-radio">
							  <input type="radio" id="customRadio2" name="customRadio" class="custom-control-input">
							  <label class="custom-control-label" for="customRadio2">Question</label>
						</div>
						<div class="custom-control custom-radio">
							  <input type="radio" id="customRadio3" name="customRadio" class="custom-control-input">
							  <label class="custom-control-label" for="customRadio3">Report a problem with website</label>
						</div>
						<div class="custom-control custom-radio">
							  <input type="radio" id="customRadio4" name="customRadio" class="custom-control-input">
							  <label class="custom-control-label" for="customRadio4">None of the above (see the message below)</label>
						</div>
						<br>
						<div class="mb-3">
						    <label for="validationTextarea">Message*</label>
						    <textarea class="form-control" id="validationTextarea" placeholder="My message is...." required></textarea>
						    <div class="invalid-feedback">
						      Please enter a message in the textarea.
						    </div>
						 </div>
						  <button type="submit" class="btn btn-primary">Submit</button>
						</form>
						<hr>
					</div>
				</div>
			</div>
			
			
		</div>

			
	</div>
	
	<footer class="jumbotron" id="footer">
		<div class="container">
			<div class="row">

				<div class="col-sm-6">
					<div >
						<h4>Sowseeds International Ministries</h4>
						<p>Naa Sakua Circle, Accra</p>
						<p>(+233) 24-438-4937</p>
						<p>info@sowseeedsintlministries.com</p>
					</div>
				</div>
				<div class="col-sm-6">
					<div >
						<a href="https://web.facebook.com/Sowseeds-International-Ministries-109495494033767"><i class="fa fa-facebook-square fa-5x" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-sm-12">
					<p>Made by Richard Kafui Anatsui &copy; 2020. All rights reserved.</p>
				</div>
			</div>
		</div>
	</footer>
	
	<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
	<script type="text/javascript" src="bootstrap.min.js"></script>
</body>
</html>