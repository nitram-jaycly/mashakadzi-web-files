<?php

if(isset($_POST['email'])) {



    // EDIT THE 2 LINES BELOW AS REQUIRED

    $email_to = "rwmaluleke14@gmail.com";

    $email_subject = "Your email subject line";





    function died($error) {

        // your error code can go here

        echo "We are very sorry, but there were error(s) found with the form you submitted. ";

        echo "These errors appear below.<br /><br />";

        echo $error."<br /><br />";

        echo "Please go back and fix these errors.<br /><br />";

        die();

    }



    // validation expected data exists



    if(!isset($_POST['first_name']) ||

        !isset($_POST['email']) ||

        !isset($_POST['telephone']) ||

        !isset($_POST['comments'])) {

        died('We are sorry, but there appears to be a problem with the form you submitted.');

    }



    $first_name = $_POST['first_name']; // required

    $email_from = $_POST['email']; // required

    $telephone = $_POST['telephone']; // not required

    $comments = $_POST['comments']; // required



    $error_message = "";

    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';

  if(!preg_match($email_exp,$email_from)) {

    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';

  }

    $string_exp = "/^[A-Za-z .'-]+$/";

  if(!preg_match($string_exp,$first_name)) {

    $error_message .= 'The First Name you entered does not appear to be valid.<br />';

  }

  if(strlen($comments) < 2) {

    $error_message .= 'The Comments you entered do not appear to be valid.<br />';

  }

  if(strlen($error_message) > 0) {

    died($error_message);

  }

    $email_message = "Form details below.\n\n";



    function clean_string($string) {

      $bad = array("content-type","bcc:","to:","cc:","href");

      return str_replace($bad,"",$string);

    }



    $email_message .= "First Name: ".clean_string($first_name)."\n";

    $email_message .= "Email: ".clean_string($email_from)."\n";

    $email_message .= "Telephone: ".clean_string($telephone)."\n";

    $email_message .= "Comments: ".clean_string($comments)."\n";





// create email headers

$headers = 'From: '.$email_from."\r\n".

'Reply-To: '.$email_from."\r\n" .

'X-Mailer: PHP/' . phpversion();

@mail($email_to, $email_subject, $email_message, $headers);

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kha2</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/animate.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">      
	<link href="css/main.css" rel="stylesheet">
	 <link href="css/responsive.css" rel="stylesheet">
	 <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    
  </head>
  <body class="homepage">   
	<header id="header">
        <nav class="navbar navbar-fixed-top" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="index.html"><b>Mashakadzi </b>Guest House</a>
                </div>
				
                <div class="collapse navbar-collapse navbar-right">
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about-us.html">About Us</a></li>
                        <li><a href="services.html">Services</a></li>
                        <li class="active"><a href="contact-us.html">Contact</a></li>                        
                    </ul>
                </div>
            </div><!--/.container-->
        </nav><!--/nav-->
		
    </header><!--/header-->
		
	<div class="map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2001.681592377456!2d30.723235729649538!3d-23.017783996191106!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMjPCsDAxJzA0LjAiUyAzMMKwNDMnMjcuNiJF!5e1!3m2!1sen!2sza!4v1518423280740" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe><!--/iframe-->
	</div>

<!- <section id="feature" >
        <div class="container">
           <div class="center wow fadeInDown">
                <p class="lead">Thank you for contacting us. We will be in touch with you very soon.</p>
            </div>   
        </div><!--/.container-->
    </section><!--/#feature-->
	
 <section id="bottom">
	
        <div class="container wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms">
			
            <div class="row">
                <div class="center">        
					<h2>How to Reach Us?</h2>
				</div> 

                <div class="features">
               
                    <div class="col-sm-5 col-sm-offset-1">
						<div class="form-group">
							<table>
								<tr>
									<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									City / Town</h2></td>
									<td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
									<td><h2>:</h2></td>
								</tr>
								<tr>
									<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Street Address</td>
									<td></td>
									<td><h2>:</h2></td>
								</tr>
								<tr>
									<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Phone Number</h2></td>
									<td></td>
									<td><h2>:</h2></td>
								</tr>
								<tr>
									<td><h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
									Email Address</h2></td>
									<td></td>
									<td><h2>:</h2></td>
								</tr>
							</table>
						</div>
                       
					</div><!--/.col-md-4-->

                    <!--div class="col-md-4 col-sm-6 wow fadeInDown" data-wow-duration="1000ms" data-wow-delay="600ms"-->
                    <div class="col-sm-5">
						<div class="form-group">
							<table>
								<tr>
									<td><h2>Malamulele</h2></td>
								</tr>
								<tr>
									<td><h2>Madonsi - Manele Road</h2></td>
								</tr>
								<tr>
									<td><h2>+27 83 774 2444</h2></td>
								</tr>
								<tr>
									<td><h2>rwmaluleke14@gmail.com</h2></td>
								</tr>
							</table> 
						</div>
                    </div>
                    
            </div><!--/.col-md-4-->
   
        </div>
    </section><!--/#bottom-->
	
	<div class="top-bar">
		<div class="container">
			<div class="row">
			    <div class="col-lg-12">
				   <div class="social">
						<ul class="social-share">
							<li><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li><a href="#"><i class="fa fa-linkedin"></i></a></li> 
							<li><a href="#"><i class="fa fa-dribbble"></i></a></li>
							<li><a href="#"><i class="fa fa-skype"></i></a></li>
						</ul>
				   </div>
                </div>
			</div>
		</div><!--/.container-->
	</div><!--/.top-bar-->
	
	<footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2015 <a target="_blank" href="http://bootstraptaste.com/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">bootstraptaste</a>. All Rights Reserved.
                </div>
                <!-- 
                    All links in the footer should remain intact. 
                    Licenseing information is available at: http://bootstraptaste.com/license/
                    You can buy this theme without footer links online at: http://bootstraptaste.com/buy/?theme=Gp
                -->
                <div class="col-sm-6">
                    <ul class="pull-right">
                        <li><a href="#">Home</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Faq</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->
	
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/jquery.isotope.min.js"></script>   
    <script src="js/wow.min.js"></script>
	<script src="js/main.js"></script>
  </body>
</html>

<?php

}

?>