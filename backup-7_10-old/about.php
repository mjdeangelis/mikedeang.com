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
				<li><a style="border-bottom: solid #50b16b; color:white;" href="about.php">about</a></li>
				<!--<li><a href="#">blog</a></li>-->
				<li><a href="index.php">home</a></li>
			</ul>
		</nav>
		<label for="show-menu" class="show-menu"><!--<img src="img/nav-icon.png"/>--><div id="nav-btn"></div></label>
	</header>	
	<main id="main-content">
		<h1>About Me</h1>
		<div class="about-section">
			<p>I'm originally from Philadelphia but currently reside in Pittsburgh. </p>
			<p>I attended the University of Pittsburgh and graduated with a B.S. in Information Science, where I discovered my passion for the web and technology.</p>
			<p>A little about myself personally: Web Developer, Basketball fanatic, Aspiring world traveler, Fitness advocate, Technology lover.</p>
			<p>My current position is at UPMC (University of Pittsburgh Medical Center for those of you not in Western PA) as a systems analyst.</p>
			
			<img src="img/city-overview.jpg">
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