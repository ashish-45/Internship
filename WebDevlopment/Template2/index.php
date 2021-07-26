<?php

include 'db.php';

use PHPMailer\PHPMailer\PHPMailer; 
use PHPMailer\PHPMailer\Exception; 

require 'vendor/autoload.php';

if(isset($_POST['submit']))
{
$name =  mysqli_real_escape_string($con,$_POST['name']);
$email = mysqli_real_escape_string($con,$_POST['email']);
$msg = mysqli_real_escape_string($con,$_POST['message']);

   $insertquery = "INSERT INTO `contact`(`name`,`email`,`message`) VALUES('$name','$email','$msg')";

   $iquery = mysqli_query($con,$insertquery);

   if($iquery){
    ?>
    <script>
        // alert("Inserted Successfully")
    </script>
    <?php
   }
   else
   {
    ?>
    <script>
        alert("Value Not Found")
    </script>
    <?php
   }


$mail = new PHPMailer(true); 

try { 
	$mail->SMTPDebug = 0;
	$mail->isSMTP();											 
	$mail->Host	 = 'smtp.gmail.com;';					 
	$mail->SMTPAuth = true;							 
	$mail->Username = 'harsalpatil512@gmail.com';				 
    $mail->Password = 'Harshal@5670';						 
	$mail->SMTPSecure = 'tls';							 
	$mail->Port	 = 587;

	$mail->setFrom('harsalpatil512@gmail.com', '');		 
	$mail->addAddress('harsalpatil512@gmail.com'); 
	$mail->addAddress('harsalpatil512@gmail.com', ''); 
	
	$mail->isHTML(true);								 
	$mail->Subject = 'Subject'; 
	$mail->Body = "Name is $name <br> Email is $email <br> Message is $msg"; 
	$mail->AltBody = 'Body in plain text for non-HTML mail clients'; 
	$mail->send();  
    ?>
        <script>
            alert("Message Send Successfully");
        </script>
    <?php
} catch (Exception $e) { 
	echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}"; 
}
}

?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
        integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700&display=swap" rel="stylesheet">
    <link rel="shortcut icon"
        href="https://cdn2.iconfinder.com/data/icons/mandatory-safety-signs/574/ISO_7010_M003-512.png"
        type="image/x-icon">
    <title>Template 2</title>
</head>

<body>
    <!-- Banner Section Start -->

    <section id="banner">
        <nav class="navbar navbar-expand-lg navbar-light shadow p-4">
            <a class="navbar-brand text-white" href="#" style="margin-right: 95px;"><i class="far fa-circle"></i>
                Noize</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <i class="fas fa-bars"></i>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Home <i class="far fa-chevron-down ml-2"
                                style="font-size: 10px;"></i></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Gallary</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">News</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Concerts</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Videos</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-white" href="#">Features <i class="far fa-chevron-down ml-2"
                                style="font-size:10px"></i></a>
                    </li>
                </ul>
                <div class="icons">
                    <i class="fab fa-twitter mr-2"></i>
                    <i class="fab fa-linkedin-in mr-2"></i>
                    <i class="fab fa-youtube mr-2"></i>
                    <i class="fab fa-instagram "></i>
                </div>
            </div>
        </nav>
        <div class="center">
            <p>FEEL THE<br> NOISE</p>
        </div>
    </section>


    <!-- Banner Section End -->

    <!-- Contact Section Start -->

    <section id="contact">
        <div class="row mt-5 mb-5">
            <div class="col-md-6">
                <div class="row text-white ">
                    <div class="col-6 ">
                        <div class="row ">
                            <div class="col-3  icon-fot">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="col-9 text-form-footer">
                                <h3 class="font-weight-bold">Find Us</h3>
                                <p>Mreylebon Rd,Merylebon London,NW1SH,UK</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3 icon-fot">
                                <i class="far fa-clock"></i>
                            </div>
                            <div class="col-9 text-form-footer">
                                <h3 class="font-weight-bold">Working Hour</h3>
                                <p style="display: inline;">Mon-Fri : 8AM-5PM</p>
                                <p>Sat-Sun : 8AM-2PM</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 ">
                        <div class="row">
                            <div class="col-3 icon-fot">
                                <i class="fas fa-phone-alt"></i>
                            </div>
                            <div class="col-9 text-form-footer">
                                <h3 class="font-weight-bold">Call Us</h3>
                                <p style="display: inline;">+123 456 7890</p>
                                <p>+123 456 7890</p>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-3 icon-fot">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="col-9 text-form-footer">
                                <h3 class="font-weight-bold">Write To Us</h3>
                                <p style="display: inline;">Office@noise.com</p>
                                <p>Press@noise.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <form method="post" action="">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="name" class="w-100 p-2" placeholder="Your Name..." required>
                        </div>
                        <div class="col">
                            <input type="email" name="email" class="w-100 p-2" placeholder="Your Email..." required>
                        </div>
                    </div>
                    <textarea class="w-100 p-2 mt-2" type="text" name="message" placeholder="Your Message..." rows="5" cols="50"></textarea><br />
                    <input class="btn btn-outline-danger btn-block text-white font-weight-bold mt-2" type="submit" name="submit" >
                </form>
            </div>
        </div>
    </section>

    <!-- Contact Section End -->


    <!-- Footer Section Start -->

    <section id="footer">
        <div style="max-width:100%;width:100%;height:500px;">
            <div id="embedmap-display" style="height:100%; width:100%;max-width:100%;">
                <iframe style="height:100%;width:100%;border:0;" frameborder="0"
                    src="https://www.google.com/maps/embed/v1/place?q=mumbai&key=AIzaSyBFw0Qbyq9zTFTd-tUY6dZWTgaQzuU17R8">
                </iframe>
            </div>
        </div>
        <div class="circles ">
            <div class="circle c1">
                <div class="circle c2">
                    <div class="circle c3">
                        <i class="far fa-circle"></i>
                    </div>
                </div>
            </div>
            <h2 class="text-white text-center ">Noize</h2>
        </div>
        <div class="footer-section">
            <p style="display: inline;">2020 Vernon street, San Diego</p>
            <p>760-707-4815 info@noize.com</p>
        </div>
        <div class="footer-logo">
            <i class="fab fa-twitter mr-2"></i>
            <i class="fab fa-linkedin-in mr-2"></i>
            <i class="fab fa-youtube mr-2"></i>
            <i class="fab fa-instagram "></i>
        </div>
        <div class="footer">
            <p class="copyright">MADE BY TRUE THEMES</p>
        </div>
    </section>

    <!-- Footer Section End -->


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.min.js"
        integrity="sha384-+YQ4JLhjyBLPDQt//I+STsc9iw4uQqACwlvpslubQzn4u2UU2UFM80nGisd026JF"
        crossorigin="anonymous"></script>
</body>

</html>