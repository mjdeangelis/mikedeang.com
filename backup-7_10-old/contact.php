<!DOCTYPE html>
<html class="no-js">
<head>
    <meta charset="utf-8">
    <!--

    Copyright (c) Mike DeAngleis | http://www.mjdeangelis.com

    -->
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

    <title>Mike DeAngelis | Contact</title>

    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/animsition.min.css">
   
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
    <script src="js/md.js" type="text/javascript"></script>
    <script src="js/jquery.animsition.min.js"></script>
    <script src="js/controllers.js"></script>
    
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
<div class="wrapper animsition" ng-app="contactForm">

        <? include 'header.php' ?>
    
	<main class="main-content" >
		<!--<div id="intro-image">
			<img src="img/selfportrait.png" >
		</div>-->
		<div class="landing-text">
			<h1 class="thin">Thanks for your interest.</h1>
		</div>
		<h2>I'm available for contact on any of the below social media sites.</h2>
		<ul class="social-media sm-container">
                    <li>
                        <a class="facebook sml" href="https://www.facebook.com/mdeang2" rel="external"></a>
                    </li>
                    <li>
                        <a class="google sml" href="https://plus.google.com/+MichaelDeAngelis2/posts" rel="external"></a>
                    </li>
                    <li>
                        <a class="linkedin sml" href="https://www.linkedin.com/in/deangelismichael" rel="external"></a>
                    </li>
                    <li>
                        <a class="github sml" href="https://github.com/mjdeangelis" rel="external"></a>
                    </li>
                </ul>
		<h2>But who doesn't like a good ol' fashioned email?</h2>
                <div ng-controller="FormController">
                    <form class="css-form" name="contactForm" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" onsubmit="return FormValidation();" onchange="return FormValidation();">
			<?php echo $error_message;?>
			<ul class="contact-form">
		 		<li>
                                    <label for="name">Name</label>
                                    <input type="text" name="name" placeholder="your name" ng-model="form.name" required>
		 		</li>
		 		<li>
                                    <label for="email">E-mail</label>
                                    <input type="email" name="email" placeholder="your email" ng-model="form.email" required>
		 		</li>
		 		<li>
                                    <label for="message">Message</label>
                                    <input type=textarea" name="message" placeholder="your message" ng-model="form.message" ng-minlength="4" ng-maxlength="500" required></input>
		 		</li>
		 		<li>
    				<button name="submit" class="submit" type="submit" ng-click="submitted=true" ng-click="form.submitTheForm() ">Send me an email</button>
				</li>


	
<?php

if(isset($_POST['submit'])) {

	//set destination email and subject
    $email_to = "mjdeangelis@gmail.com";
    $email_subject = "mjdeangelis.com contact submission";
 
    function died($error) {
        //error code
        echo "Oops! There were some errors with your form. <br /><br />";
        echo $error."<br /><br />";
        die();
 
    }

    // validation expected data exists
    if(!isset($_POST['name']) || 
        !isset($_POST['email']) ||
        !isset($_POST['message'])) {
        died('oops! there were some errors with your form.');      
    }
 
    $name = $_POST['name']; // required
    $email_from = $_POST['email']; // required
    $message = $_POST['message']; // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The email address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$name)) {
    $error_message .= 'The name you entered does not appear to be valid.<br />';
  }
 
 
  if(strlen($message) < 2) {
    $error_message .= 'The message you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "Name: ".clean_string($name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "message: ".clean_string($message)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();

mail($email_to, $email_subject, $email_message); 
 
?>
 
 
 
<!-- success message -->
<h1>
Thanks for contacting me! I'll be in touch.
</h1>
 
<?php
}
?>

		 	</ul>
		</form>
            </div>        
	</main>
	
<? include 'footer.php'; ?>

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
 
 <script>
function fromValidation(){
    var name = document.getElementByName('name');
    var email = document.getElementByName('email');
    var message = document.getElementByName('message');
    
   if (name === "") {
        document.getElementById("name").className = document.getElementById("name").className + " error";  // this adds the error class
   }
   else {
        document.getElementById("name").className = document.getElementById("name").className.replace(" error", ""); // this removes the error class
   }
});

 </script>

</body>
</html>

