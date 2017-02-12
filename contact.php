
<!DOCTYPE html>
<html>

<head>

		<title>Jordan Mike | Contact</title>

	<!-- Meta Zone -->
	<meta charset="utf-8">
	<meta name="description" content="Jordan Mike, typical dutch plants." />
	<meta name="keywords" content="Jordan Mike, typical dutch plants.">
	<meta name="robots" content="index, follow, all" />
	<meta name="author" content="Jordan Mike">
	<meta name="publisher" content="Jordan Mike">
	<meta name="geo.placename" content="Amsterdam">
	<meta name="geo.region" content="NL">
	<meta name="google" content="notranslate" />

	<!-- Viewport -->
	<meta name="viewport" content="initial-scale=1, user-scalable=no">
	<meta name="apple-mobile-web-app-capable" content="yes" />
	<meta name="apple-mobile-web-app-status-bar-style" content="black" />
	<meta name="apple-mobile-web-app-title" content="Jordan Mike">

	<!-- Favicon -->
	<link rel="shortcut icon" type="image/png" href="img/favicon.png"/>

	<!-- CSS Stylesheets -->
	<link rel="stylesheet" href="css/style.css">

	<!-- Font -->
	<link href='https://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Javascript -->
	<script type="text/javascript" src="js/main.js"></script>

</head>
<body id="page">

	<header>
		<div id="wrap">
		  	<a href="index.html" title="Home"><img class="logo" src="img/logo.png" alt="Logo"/></a>
		    <nav id="nav">
		      <ul>
		        <li><a href="index.html" title="Home">Home</a></li>
		        <li><a href="menu.html" title="Menu">Menu</a></li>
		        <li><a href="gallery.html" title="Gallery">Gallery</a></li>
		        <li><a class="selected" href="contact.html" title="Contact">Contact</a></li>
		        <li><a href="https://www.instagram.com/" title="Instagram" target="_blank"/><img class="instagram-header-icon" src="img/instagram-header-icon.png" alt="Instagram Icon"></a></li>
		      </ul>
		    </nav>
		</div>
	</header>

	<div class="hero-image-contact">
	</div>

	<div class="main">

			<?php 
				$action=$_REQUEST['action']; 
				if ($action=="")
				{ 
			?> 

			<form  action="" method="POST" enctype="multipart/form-data"> 

			<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus Nulla consequat massa quis enim.</p>

			<p>Lorem ipsum dolor sit amet <a href="tel:0629165924" title="Direct call">(0031)6-29165924</a> adipiscing elit. Aenean commodo ligula eget dolor. Aenean magnis dis parturient massa. Cum sociis natoque <a href="mailto:info@jordanmike.nl" title="Direct mail">info@jordanmike.nl</a> penatibus et magnis dis parturient montes, nascetur ridiculus mus Nulla consequat massa quis enim.</p>

			    <input type="hidden" name="action" value="submit"> 
			    <input name="name" type="text" value="" size="30" placeholder="First- and lastname"/><br> 
			    <input name="email" type="text" value="" size="30" placeholder="E-mail"/><br> 
			    <input name="phone" type="text" value="" size="30" placeholder="Phone"/><br> 
			    <input name="subject" type="text" value="" size="30" placeholder="Subject"/><br> 
			    <textarea name="message" rows="7" cols="30" placeholder="Message"></textarea><br> 
			    <input type="submit" value="Send"/> 
		    </form> 

			<?php 
				    }  
				else 
				    { 
				    $name=$_REQUEST['name'];
				    $email=$_REQUEST['email'];
				    $phone=$_REQUEST['phone'];
				    $subject=$_REQUEST['subject'];
				    $message=$_REQUEST['message']; 
				    if (($name=="")||($email=="")||($phone=="")||($message=="")) 
				        { 
				        echo "<p>Lorem ipsum dolar</br>sit amet, consectetuer </p>"; 
				        } 
				    else{         
				        $from="From: $name<$email>\r\nReturn-path: $email";  
				        $subject="$subject"; 
				        mail("info@jordanmike.nl", $subject, 
				"$message 

				From: 	$name

				Phonenumber: 	$phone

				E-mail:		$email", $from);
				        echo "<p>Lorem ipsum dolar</br>sit amet, consectetuer </p>"; 
				        } 
				    }   
			?>

		</div>
	</div>

	<footer>
		<p>&copy; 2016 Jordan Mike</p>
	</footer>

</body>
</html>