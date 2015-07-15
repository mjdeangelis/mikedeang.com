<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <!--

    Copyright (c) Mike DeAngleis | http://www.mikedeang.com

    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Mike DeAngelis | Portfolio</title>

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
<div class="wrapper animsition">
    
	<? include 'header.php' ?>
    
	<main class="main-content">
		<!--<h1 class="coming-soon">coming soon...</h1>-->
                <div class="header-center">
                    <h1>Portfolio</h1>
                </div>
                <div class="table">
                    <div class="table-cell">
                        <figure class="image-frame grey">
                            <a href="http://www.steingartfoodsafetyconsulting.com" rel="external"><img src="/img/steingart.png" /></a>
                        </figure>
                        <h3 class="porfolio-title"><a href="http://www.steingartfoodsafetyconsulting.com" rel="external">Steingart Food Safety Consulting</a></h3>
                    </div>
                    <div class="table-cell">
                        <figure class="image-frame grey">
                            <a href="http://www.pittsburghzoo.org/PlanYourVisit/InteractiveMap" rel="external"><img src="/img/zoo-interactive-map.png" /></a>
                        </figure>
                        <h3 class="porfolio-title"><a href="http://www.pittsburghzoo.org/PlanYourVisit/InteractiveMap" rel="external">Pittsburgh Zoo Interactive Map</a></h3>
                    </div>
                    <div class="table-cell">
                        <figure class="image-frame grey">
                            <a href="http://www.upmchealthplan.com/individuals/learn/" rel="external"><img src="/img/individuals.png" /></a>
                        </figure>
                        <h3 class="porfolio-title"><a href="http://www.upmchealthplan.com/individuals/learn/" rel="external">UPMC Health Plan Individuals</a></h3>
                    </div>
                </div>
                <div class="table">
                    <div class="table-cell">
                        <figure class="image-frame grey">
                            <a href="http://www.epziltech.com" rel="external"><img src="/img/epzil.png" /></a>
                        </figure>
                        <h3 class="porfolio-title"><a href="http://www.epziltech.com" rel="external">Epzil Tech</a></h3>
                    </div>
                    <div class="table-cell">
                        <figure class="image-frame grey">
                            <a href="http://www.pittultimate.org/" rel="external"><img src="/img/pitt-ultimate.png" /></a>
                        </figure>
                        <h3 class="porfolio-title"><a href="http://www.pittultimate.org/" rel="external">Pitt Ultimate Frisbee</a></h3>
                    </div>
                    <div class="table-cell">
                        <figure class="image-frame grey">
                            <a href="http://www.lizziecamlinirving.com" rel="external"><img src="/img/lizzie.png" /></a>
                        </figure>
                        <h3 class="porfolio-title"><a href="http://www.lizziecamlinirving.com" rel="external">Lizzie Camlin-Irving Music</a></h3>
                    </div>
                </div>             
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
 
 $("figure.image-frame.grey").hover(function() {
    $(this).next().toggleClass("porfolio-title a:hover");
});
 </script>
 
</body>
</html>