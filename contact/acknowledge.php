<!DOCTYPE html>
  <?php if (isset($_POST['send'])){
    $to = 'jfcomboni@gmail.com';
    $subject = 'Message from my site';
    }
    $headers = "From: website@jfcomboni.com\r\n";
    $headers .= 'Content-Type text/plain; charset=utf-8';
    $email = filter_input(INPUT_POST, 'Email', FILTER_VALIDATE_EMAIL );
      if ($email){
        $headers .= "\r\nReply-To: $email";
      }
    $message ='FirstName: '.$_POST['FirstName']. "\r\n\r\n";
    $message .='LastName: '.$_POST['LastName']. "\r\n\r\n";
    $message .='LastName: '.$_POST['Phone']. "\r\n\r\n";
    $message .='Email: '.$_POST['Email']. "\r\n\r\n";
    $message .='Questions: '.$_POST['TextField'];
    $success = mail($to, $subject, $message , $headers);
   ?>
<html>
<head>
  <?php
		include '../Header.php';
	?>
<title>Acknowledge</title>
</head>
<body>
  <h1><img src="images/JFClogos.png" width="385" height="137" alt="logo"><span></span></h1>
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
  <?php if (isset($success) && $success) {?>
    <h1> Congratulation!</h1>
        Your information has been sent successfully.
  <?php } else { ?>
    <h1>Ops!</h1>
        Sorry, There was a problem sending your information.
  <?php } ?>
</body>
</html>
