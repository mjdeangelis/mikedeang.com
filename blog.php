<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <!--
    Copyright (c) Mike DeAngleis | http://www.mikedeang.com
    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Mike DeAngelis | Blog</title>

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

	<main class="main-content">
                <div class="header-center">
                    <h1>Blog</h1>
                </div>
                
		<!--<h1 class="coming-soon">first blog post coming soon! </h1>-->
		<h2><? include 'dbConnect.php' ?></h2>
		
                
                <div class="blog">
                <?php
                    $sql = "SELECT postID, postTitle, postDesc, postCont, postDate FROM mikedeang.blog_posts;";
                    $result = mysqli_query($conn, $sql);

                    if (mysqli_num_rows($result) > 0) {
                        // output data of each row
                        while($row = mysqli_fetch_assoc($result)) {
                            echo '
                            <article class="blog-container">
                                <h1 class="blog-title">'.$row["postTitle"].'</h1>
                                <p class="blog-details">' .$row["postDesc"]. '</p>
                                <p class="blog-content">' . $row["postCont"]. '</p>
                            </article>
                            ';

                        }
                    } else {
                        echo '<img width="10%" height="10%" src="/img/gears.png" />';
                    }
                 
                ?>
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
 </script>

</body>
</html>