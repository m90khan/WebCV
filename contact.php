<?php
// Check for empty fields
if(empty($_POST['cf_name']) || empty($_POST['cf_email']) || empty($_POST['cf_message']) || !filter_var($_POST['cf_email'], FILTER_VALIDATE_EMAIL)) {
  http_response_code(500);
  exit();
}

$name = strip_tags(htmlspecialchars($_POST['cf_name']));
$email = strip_tags(htmlspecialchars($_POST['cf_email']));
$message = strip_tags(htmlspecialchars($_POST['cf_message']));

// Create the email and send the message
$to = "hello@khanweb.site"; // Add your email address inbetween the "" replacing yourname@yourdomain.com - This is where the form will send a message to.
$subject = "Website Contact Form:  $name";
$body = "You have received a new message from your website contact form.\n\n"."Here are the details:\n\nName: $name\n\nEmail: $email\n\nMessage:\n$message";
$header = "From: noreply@khanweb.site\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$header .= "Reply-To: $email";

if(!mail($to, $subject, $body, $header))
  http_response_code(500);

  $success = mail ($to, $subject, $message, $header);

?>
<!doctype html>
<html lang="en" class="no-js">
<head>
<!-- Global site tag (gtag.js) - Google Analytics -->
<!-- <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-4946886-2"></script> -->
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-4946886-2');
</script>

	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="images/logo-k.png">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link href="https://fonts.googleapis.com/css?family=Lato|Roboto" rel="stylesheet">

<!-- font awesome -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
<!-— twitter card tags additive with the og: tags -->

<title>Khan Mohsin - Contact - Lets Talk</title>
	<link rel="stylesheet" href="css\reset.css"> <!-- CSS reset -->
	<link rel="stylesheet" href="css\style.css"> <!-- Resource style -->
	<script src="js\modernizr.js"></script> <!-- Modernizr -->
</head>
<body>

<!-- Page preloader -->
<div id="hola">
        <div id="preloader">
  <img src="images\preload_logo.png" alt="">
</div>
</div>
<main>
<div class="cd-index cd-main-content">
<div class="heady">
<div class="logo"><a href="index.html"><img src="images\logo-k.png" alt="logo"></a></div>
<div class="navitems">
		<div class="navcolumn">
		<h2>About</h2>
		<a class="cd-btn" href="index.html#top" data-type="page-transition">Home</a>
    <p>My Story</p>

	</div>
  <div class="navcolumn">
    <h2>Work</h2>
    <a class="cd-btn" href="bonito.html#top" data-type="page-transition">Bonito</a>
    <a class="cd-btn" href="gymworks.html#top" data-type="page-transition">GymWorks</a>
    <a class="cd-btn" href="robox.html#top" data-type="page-transition">RoboX</a>
   <a class="viewall cd-btn " href="portfolio.html#top" data-type="page-transition">View All</a>
  </div>
  <div class="navcolumn">
    <h2>Blog</h2>
    <a class="cd-btn" href="blog.html" target="_blank">Tech Talks</a>
  </div>
	<div class="navcolumn">
		<h2>Contact</h2>
		<a class="cd-btn" href="contact.html" target="_blank">Let's Talk</a>
	</div>
	</div>
<div class="bubbleback"></div>
<div class="bubble"></div>
<div class="bubble-wrap">
<div class="bar first"></div>
<div class="bar second"></div>
<div class="bar third"></div>
</div>

</div>
	<a class="leftylink cd-btn" href="about.html" data-type="page-transition">About Me</a>
	<a class="rightylink cd-btn" href="contact.html" target="_blank">Contact Me</a>
	<div class="footleft"><p>© Khan Mohsin 2019</p></div>
	<div class="footright">
    <a href="https://dribbble.com/khanx" target="_blank"><img src="images\Dribbble.png" width="" height="" alt=""></a>
    <a href="https://www.behance.net/m90khanb58f" target="_blank"><img src="images\behance.png" width="" height="" alt=""></a>

    <a href="https://twitter.com/m90khan" target="_blank"><img src="images\Twitter.png" width="" height="" alt=""></a>
    <a href="https://www.linkedin.com/in/khanmohsinx/" target="_blank"><img src="images\linkedin.png" width="" height="" alt=""></a></div>
	<div class="leftbar"></div>
<div class="rightbar"></div>	<div class="planewrap2"><img src="images\plane.png" width="100%" alt=""></div>
	<div class="wrapper abouter">


<?php
if (isset($success) && $success){ ?>
<div class="abouttext2"><h2>Thank You</h2>
    <p>Your Message has been received</p></div>
<?php } else { ?>
<div class="abouttext2"><h2>Oppsy</h2>
    <p>Something Went Wrong. Please Try Again</p>
    <div>  <a class="viewall cd-btn hideme" href="portfolio.html#top" data-type="page-transition"><h1>View All Projects</h1></a></div>
</div>
<?php } ?>


</div>
</main>
<div class="cd-cover-layer"></div>
<div class="cd-loading-bar"></div>
<script src="js\jquery-2.1.1.js"></script>
<script src="js\main.js"></script> <!-- Resource jQuery -->
<script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/velocity/1.2.3/velocity.ui.min.js'></script>
<script src='https://s3-us-west-2.amazonaws.com/s.cdpn.io/2542/in-view.min.js'></script>
<script src="js\preloader.js"></script>
<script src="js\blob.js"></script>
<script src="js\wordz.js"></script>
<script src="js\index.js"></script>
<script src="js\plane.js"></script>
</body>
</html>
