<!doctype html>

<!--[if lt IE 7 ]> <html class="ie ie6 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. -->

<head id="www-sitename-com" data-template-set="html5-reset">
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">	
	<title>Flash Flood Print Studios &mdash; Tulsa, Oklahoma</title>	
	<meta name="title" content="Flash Flood Print Studios">
	<meta name="description" content="Beautiful limited-edition event posters, t-shirts and more, all designed and printed by hand in Tulsa, Oklahoma. Screen-printing studio rental, classes and workshops.">
	<meta name="google-site-verification" content="Q53MEZfogp7DHvDTAYA9tpJhJY7Lv1VPq0B8tD6xOho" />
	<meta name="author" content="Flash Flood Print Studios">
	<meta name="Copyright" content="Copyright Flash Flood Print Studios. All Rights Reserved.">
	<meta name="DC.title" content="Flash Flood Print Studios">
	<meta name="DC.creator" content="Michael J. Champlin">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="shortcut icon" href="_/img/favicon.ico">
	<link rel="apple-touch-icon" href="_/img/apple-touch-icon.png">	
	<link rel="stylesheet" href="_/css/style.css">
	<script src="_/js/modernizr-1.7.min.js"></script>
	<?php include '_/php/contactengine.php'; ?>
</head>

<body>

	<header>		
		<div class="logo middle">
			<img src="_/img/logo.png" class="middle" />
		</div>
	</header>

	<article id="upper">
		<div class="wrapper-inner middle">		
			<div id="left-column">
			<h1>Commercial</h1>
			<p>We create beautiful limited-edition event posters, t-shirts and more &mdash; all designed and printed <strong>by hand</strong> in Tulsa, Oklahoma.</p>
			<p>Our commercial print operation satisfies the needs of businesses and individuals looking for unparalleled design and quality. We handle jobs of all shapes and sizes on a wide variety of materials. Contact us for a custom quote.</p>
			</div>
			<div id="right-column">
				<h1>Community</h1>
				<p>We put the space, equipment, and expertise necessary to learn or continue printmaking in the hands of local artists and designers by offering studio rental, classes, workshops and community outreach programs.</p>
				<p>As leaders in a growing local printmaking community, we strive for a fun and creative environment &mdash; and <strong>we want you to join us.</strong></p>
			</div>		
			<div class="clear"></div>
			<img src="_/img/warning-logo.png" class="warning"/>
		</div>
	</article>
	
	<article id="lower">
		<section class="middle">
			<h2>Want to know more?</h2>
			<h3>Get in touch.</h3>			
		<div id="contactWrapper" role="form">
	
		<?php if(isset($hasError)) { //If errors are found ?>
			<p class="error">Please check if you've filled all the fields with valid information and try again. Thank you.</p>
		<?php } ?>

		<?php if(isset($emailSent) && $emailSent == true) { //If email is sent ?>
			<div class="success">
				<p><strong>Email Successfully Sent!</strong></p>
				<p>Thank you for using our contact form <strong><?php echo $name;?></strong>! Your email was successfully sent and we 'll be in touch with you soon.</p>
			</div>
		<?php } ?>

		<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>" id="contactform">
			<div class="stage clear">
				<input type="text" name="contactname" id="contactname" value="" class="required" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<input type="email" name="email" id="email" value="" class="required email" role="input" aria-required="true" />
			</div>

			<div class="stage clear">
				<textarea rows="8" name="message" id="message" class="required" role="textbox" aria-required="true"></textarea>
			</div>
								
			
			<input type="submit" value="Send Message" name="submit" id="submitButton" title="Click here to submit your message!" />
			<div class="clear"></div>
		</form>
		
	</div>
		
		
		</section>
		
		
		
		<section class="middle">
			<h2>Come say hello!</h2>
			<img src="_/img/map.gif" />
		</section>	
	</article> 

	
	<footer>
		<p>copyright 2012 flash flood <img src="_/img/warning-logo.png" class="warning" /> website by <a class="mjchamplin" href="http://mjchamplin.com">michael j. champlin</a></p>		
	</footer>

<!-- here comes the javascript -->

<!-- Grab Google CDN's jQuery. fall back to local if necessary -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.5.1/jquery.min.js"></script>
<script>window.jQuery || document.write("<script src='_/js/jquery-1.5.1.min.js'>\x3C/script>")</script>

<!-- Form Validation -->
<script src="http://ajax.microsoft.com/ajax/jquery.validate/1.7/jquery.validate.pack.js" type="text/javascript"></script>

<!-- this is where we put our custom functions -->
<script src="_/js/functions.js"></script>
<script>

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-33305330-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>

  

  
</body>
</html>