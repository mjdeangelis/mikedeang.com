<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <!--
    Copyright (c) Mike DeAngleis | http://www.m.com
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="description" content="Front-end web developer with a passion for building elegant interfaces." />

    <title>Mike DeAngelis | Front End Developer</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animsition.min.css">
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/md.js" type="text/javascript"></script>
    <script src="js/jquery.animsition.min.js"></script>

    <!--Google Analytics-->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-55413692-3', 'auto');
      ga('send', 'pageview');

    </script>

</head>
<body>	
    <input type="checkbox" id="show-menu" role="button">
<div class="wrapper animsition" data-animsition-in="fade-in"
  data-animsition-in-duration="1000">
    
	<? include 'header.php'; ?>
        
	<main class="main-content">
		<div id="intro-image">
                    <img width="65%" height="65%" src="img/pitt-skyline.png" >
		</div>
		<div class="landing-text">
                    <h1><span class="thin">Hi, my name is </span><span class="emp">Mike DeAngelis.</span></h1>
		</div>
		<div class="sub-text">	
                    <p>I'm a Front End Developer who focuses on HTML, CSS, and Javascript.</p>
                    <p>Currently a Systems Analyst who loves learning about design, analytics, and anything web-related.</p>
		</div>
		<div class="info-text">
                    <h3>Feel feel to leave me a message <a class="transition" href="/contact">here</a></h3>
		</div>
	</main>

        <? include 'footer.php' ?>

</div>
<!--wrapper-->
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