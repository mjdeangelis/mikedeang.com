<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <!--
    Copyright (c) Mike DeAngleis | http://www.mikedeang.com
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Mike DeAngelis | About</title>

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
    
    <!-- animsition CSS -->
    <link rel="stylesheet" href="css/animsition.min.css">

    <!-- vendor js -->
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>

    <!-- animsition js -->
    <script src="js/jquery.animsition.min.js"></script>
    <script src="js/md.js" type="text/javascript"></script>
	
</head>
<body>
	<input type="checkbox" id="show-menu" role="button">
<div class="wrapper animsition">
	
        <? include 'header.php' ?>
    
	<main class="main-content about">
            <div class="header-center">
                <h1>About</h1>
            </div>
            <div class="section-box table">
                <div class="about-summary table-cell">
                    <h2 class="header">I'm a Front End Developer based out of Pittsburgh, PA.</h2>
                    <div class="sub-head">
                        <p>I love creating beautiful interfaces and the creative process around building websites and web applications.</p>
                    </div>
                    <p></p>
                </div>     
                <div class="table-cell">
                    <figure class="image-frame">
                        <img src="img/city-overview.jpg">
                    </figure>
                </div>
            </div>
            <div class="section-box table skills">
                <h2>My Skills</h2>
                <ul class="chart">
                    <li class="axis">
                        <div class="label">Master</div>
                        <div class="label">Intermediate</div>
                        <div class="label">Novice</div>
                        <div class="label">I dabble</div>
                    </li>
                    <li class="bar red p-90">
                        <div class="skill">HTML</div>
                    </li>
                    <li class="bar blue p-90">
                        <div class="skill">CSS</div>
                    </li>
                    <li class="bar green p-80">
                        <div class="skill">Javascript</div>
                    </li>
                    <li class="bar yellow p-70">
                        <div class="skill">WordPress</div>
                    </li>
                    <li class="bar orange p-20">
                        <div class="skill">AngularJS</div>
                    </li>
                </ul>
            </div>
            
<!--		<div class="about-section">
                    <p>I'm originally from Philadelphia but currently reside in Pittsburgh. </p>
                    <p>I attended the University of Pittsburgh and graduated with a B.S. in Information Science, where I discovered my passion for the web and technology.</p>
                    <p>A little about myself personally: Web Developer, Basketball fanatic, Aspiring world traveler, Fitness advocate, Technology lover.</p>
                    <p>My current position is at UPMC (University of Pittsburgh Medical Center for those of you not in Western PA) as a systems analyst.</p>
                    
		</div>-->
	</main>

        <? include 'footer.php' ?>

</div>
<!--wrapper-->

<script>
$(document).ready(function(){
   var url = window.location.href;
   var page = url.substr(url.lastIndexOf('/')+1);
   $('.menu a').removeClass('active');
   $('.menu a[href*="'+page+'"]').addClass('active');
 });
 </script>

</body>
</html>