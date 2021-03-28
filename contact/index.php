<!DOCTYPE html>
<html>
<head>
	<?php
		include '../Header.php';
	?>
<title>Contact Me</title>
</head>

<body>
	<!-- Contact form -->
	<div class="container-fluid">
	<h1><img src="images/JFClogos.png" width="385" height="137" alt="logo"><span>Contact Me</span></h1>
	<div id="wrapper">
			<div id="menu">
						<ul class="bmenu">
								<li><a href="../index.php">Home</a></li>
								<li><a href="../gallery/index.php">Gallery</a></li>
								<li><a href="../web/index.php">Websites</a></li>
								<li><a href="../about/index.php">About Me</a></li>
								<li><a href="../contact/index.php">Contact Info</a></li>
						</ul>
				</div>
        <div id="content">
        <div id="innercontent1">
        	<h2><span>Email</span></h2>
					<form class="needs-validation" novalidate= "" action="/echo" method="POST" id="myForm">
						<div class="form-group">
						  <div class="form-row">
						      <label for="validation01">First Name: </label>
						      <input type="text" class="form-control" id="validation01" name= "FirstName" minlength="3" maxlength="12"  placeholder="First Name" required>
						      <div class="valid-feedback">
						        Looks good!
						      </div>
									<div class= invalid-feedback>
									Invalid entry... Try Again!
									</div>
								</div>
							<div class= "form-row">
								<label for=validation02>Last Name: </label>
								<input type="text" class= "form-control"  id= "validation02" name="lastname" minlength="3" maxlength="12" placeholder = "Last Name " pattern="[A-Za-z]{3,30}" required>
								<div class ="valid-feedback">
									Looks Good!
								</div>
								<div class= invalid-feedback>
								Invalid entry... Try Again!
								</div>
							</div>
							<div class= "form-row">
								<label for = "validation03"> Phone Number: </label>
								<input type="tel" id="phone"  class= "form-control" id= "validation03" name="phone" placeholder="000-00-0000"  maxlength="12" pattern='^\+?\d{0,13}' required>
								<div class="valid-feedback">
									Looks Good!
								</div>
								<div class= invalid-feedback>
									Invalid entry... Try Again!
								</div>
							</div>
							<div class= "form-row">
								<label for = "validation04"> Email: </label>
								<input type= "email" class= "form-control" id="validation4" placeholder="name@example.com" name="email"
								pattern="^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$" required>
								<div class="valid-feedback">
									Looks Good!
								</div>
								<div class= invalid-feedback>
								Invalid entry... Try Again!
								</div>
								<small id="emailHelp" class="form-text text-muted"> your information will never be shared.</small>
							</div>
							<div class= "form-row">
								<label for = "validation05"> Questions?</label>
	            	<textarea rows="4" cols="40"  class= "form-control" placeholder="Type Your Message here.... " required></textarea>
								<div class="valid-feedback">
									Looks Good!
								</div>
								<div class= invalid-feedback>
								Invalid entry... Try Again!
								</div>
							</div><br>
						</div>
						<button type="submit" class="btn btn-outline-light">Send Email</button>

          </form>
        </div><!-- /innercontent1 -->
        <div id="innercontent2">
        	<h2><span>Social Media</span></h2>
            <ul>
                <li><a href="https://www.linkedin.com/in/felipe-comboni-2b988a3b/"target="_blank"><img src="images/linkedin_logo.png"  width="50" height="50" alt="linkedin">
                <p> Connect with me on LinkedIn</p></a></li>

				<!--<li><a href="https://plus.google.com/u/0/+JuanFelipeComboni"target="_blank"><img src="images/googleplus-icon.png"  width="50" height="50" alt="googlePlus">
                <p> Connect with me on Google</p></a></li>
				<li><a href="https://www.facebook.com/JuanFelipeComboni"target="_blank"><img src="images/facebook-logo.png"target="_blank" width="50" height="50" alt="facebook">
                <p>Connect with me on Facebook</p></a></li>

                <li><a href="https://twitter.com/jfcomboni" target="_blank"><img src="images/twitter-bird-light-logo.png"  width="50" height="50" alt="twitter">
                <p>Connect with me on Twitter</p></a></li> -->
            </ul>
        </div><!-- /innercontent2 -->
        </div><!-- /content -->
        <p class="info"> Juan Felipe Comboni | © Copyright 2013 - Present | JFCinc.</p>
    </div>
    </div>
</body>
</html>
