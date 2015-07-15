<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <!--

    Copyright (c) Mike DeAngleis | http://www.mjdeangelis.com

    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>mike deangelis</title>

    <link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro' rel='stylesheet' type='text/css'>

    <!--[if (gt IE 8) | (IEMobile)]><!-->
    <link rel="stylesheet" href="css/style.css">
    <!--<![endif]-->
    <!--[if (lt IE 9) & (!IEMobile)]>
    <link rel="stylesheet" href="css/ie.css">
    <![endif]-->
    
    <!--Google Analytics-->
    <script>
  	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
 	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
 	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  	ga('create', 'UA-55413692-1', 'auto');
  	ga('send', 'pageview');
	</script>
	
</head>
<body>
	<input type="checkbox" id="show-menu" role="button">
<div class="wrapper">
	<header id="header">
		<h1 id="logo"><a href="index.php">mike deangelis</a></h1>
		<nav class="main-nav">
			<ul class="menu">
				<li><a href="contact.php">contact</a></li>
				<li><a href="blog.php">blog</a></li>
				<li><a href="portfolio.php">portfolio</a></li>
				<li><a href="about.php">about</a></li>
				<!--<li><a href="#">blog</a></li>-->
				<li><a style="border-bottom: solid #50b16b; color:white;" href="index.html">home</a></li>
			</ul>
		</nav>
		<label for="show-menu" class="show-menu"><!--<img src="img/nav-icon.png"/>--><div id="nav-btn"></div></label>
	</header>	
	<main id="main-content">
		<div id="intro-image">
			<img width="65%" height="65%" src="img/pitt-skyline.png" >
		</div>
		<div id="intro-text">
			<h1>Hi, my name is <span class="emphasize">Mike DeAngelis.</span></h1>
		</div>
		<div id="sub-text">	
			<h2>I'm a Front End Developer who focuses on HTML, CSS, and Javascript.</h2>
			<h2>Currently a Systems Analyst who loves learning about design, analytics, and anything web-related.</h2>
		</div>
		<div id="para-text">
			<h3>Feel feel to leave me a message <a href="/contact.php">here</a></h2>
		</div>
	</main>

<? include 'footer.php' ?>

</div>
<!--wrapper-->

<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
<script type="text/javascript">
	$('a[rel="external"]').attr('target', '_blank');
</script>
<script>
$(document).ready(function(){
   var url = window.location.href;
   var page = url.substr(url.lastIndexOf('/')+1);
   $('.menu a').removeClass('active');
   $('.menu a[href*="'+page+'"]').addClass('active');
   if (page === "") {
       $('.menu a[href*="'index.php'"]').addClass('active');
   }
 });
</script>

</body>
</html>