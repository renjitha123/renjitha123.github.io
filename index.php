

<?php


require 'php-mailer/mail/PHPMailerAutoload.php'; 
require 'php-mailer/class.phpmailer.php';
require 'php-mailer/mail/class.smtp.php';
if(isset($_POST['contact_submit'])) 
{
	
		
			$name = $_POST['cn_name'];
			
			$email = $_POST['cn_email'];
			$phone = $_POST['cn_phone'];
			$message = $_POST['cn_message'];
			
			//$subject = $_POST['subject'];
			
			
			$body  = '<div style="font-family:Arial,Helvetica,sans-serif; line-height:18px;">
					 <p>Dear Admin,</p>
					 <p>You have received an enquiry from <b>'.$name.'</b>. Contact him/her immediately.</p>
					 
					 <table width="600" border="0" cellpadding="0" cellspacing="0">
			  <tbody><tr>
				<td align="left" valign="top" bgcolor="#FFFFFF"><table width="100%" border="0" cellpadding="0" cellspacing="0" style="border:1px solid #b02a22">
				  <tbody><tr style="">
					<td align="left" valign="top" background="" bgcolor="#FFFFFF"><table width="100%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td width="100%" align="left" valign="top" colspan="2" style="text-align:center; background: #FFF; padding: 2%; border-bottom:1px solid #b02a22;"><h2 style="color: #87209a;">AK Concepts</h2></td>
						
					  </tr>
					</tbody></table></td>
				  </tr>
				  <tr>
					<td height="22" align="center" valign="top" bgcolor="#FFFFFF"><table width="92%" border="0" cellspacing="0" cellpadding="0">
					  <tbody><tr>
						<td height="14" align="left" valign="middle">&nbsp;</td>
					  </tr>
					  <tr>
						<table align="center" width="500px" cellpadding="5">
							<thead style="color: #fff;
    background-color: #87209a;">
							<tr><th colspan="2"><h3>Enquiry</h3></th></tr>
							</thead>
							<tbody style="background-color:#eee">
							
							<tr><th> Message</th><td>'.$message.'</td></tr>
							<tr><th>Sender Name</th><td>'.$name.'</td></tr>
							<tr><th>Sender Email</th><td>'.$email.'</td></tr>
							<tr><th>Sender Mobile No</th><td>'.$phone.'</td></tr>
							
							
							</tbody>
							</table>
					  </tr>
					  
					   <tr>
						<td align="left" valign="top">&nbsp;</td>
					  </tr>
					  <tr>
						<td align="left" valign="top">&nbsp;</td>
					  </tr>
					  
					   <tr>
						<td style="border-top:1px solid #b02a22; padding:10px; text-align:center;">&nbsp;</td>
						
					  </tr>
					 
					  
					  <tr>
					  <td align="center" valign="top" style="font-family:Tahoma;font-size:12px;font-weight:normal;color:#333333;text-decoration:none"><strong>AK Concepts, All rights reserved.</strong></td>
					  </tr>
					
					  <tr>
						<td align="left" valign="top">&nbsp;</td>
					  </tr>
					</tbody></table></td>
				  </tr>
				  
				  <tr>
					<td align="left" valign="middle">&nbsp;</td>
				  </tr>
				  
				  
				</tbody></table></td>
			  </tr>
			</tbody></table>'; 
				
		
		   //$from_email	 =	$email;
	
	$subject="Order";
	
	$mail = new PHPMailer;
	
	
	
	$mail->IsSMTP();                                      // Set mailer to use SMTP
	 $mail->Host = 'ssl://smtp.gmail.com';                 // Specify main and backup server
	  $mail->Port = 465;                                // Set the SMTP port
	  $mail->SMTPAuth = true;                               // Enable SMTP authentication
	   $mail->Username = 'ranjithabnair@gmail.com';           // SMTP username
	  $mail->Password = 'myfamily4';                  // SMTP password
	  $mail->SMTPSecure = 'ssl';                            // Enable encryption, 'ssl' also accepted
	 
	  $mail->setFrom('ranjithabnair@gmail.com');

	  $mail->FromName = 'AK Concepts';
	
	  $mail->AddAddress('ranjithabnair@gmail.com');  // Add a recipient
	  
	  $mail->IsHTML(true);                                  // Set email format to HTML
	  
	  $mail->Subject = $subject;
	  $mail->Body    = $body;
	  $mail->AltBody = '';

	
	
	
	
	
	
	
	
	
	//$mail->IsSMTP();        
	                              // Set mailer to use SMTP
	//$mail->Host =  'md-in-34.webhostbox.net';                  // Specify main and backup server ranzdonbella@sg2nwvpweb065.shr.prod.sin2.secureserver.net
	//$mail->Port = 465;                                    // Set the SMTP port
	//$mail->SMTPAuth = true;                               // Enable SMTP authentication
	//$mail->Username = 'techsofttest@gmail.com';   
	//$mail->Password = 'testpwd1234';                  //E7D1.)lO4JNf SMTP password
   // $mail->SMTPSecure = 'ssl';// Enable encryption, 'ssl' also accepted
	//$mail->setFrom('techsofttest@gmail.com');			 

	//$mail->FromName = 'Berries N Cherries';
	//$mail->AddAddress('ranjithabnair@gmail.com');
	////$mail->ClearReplyTos();
	//$mail->addReplyTo($email);
	
	//$mail->SMTPDebug  = 2;	  
	//$mail->IsHTML(true);                                  // Set email format to HTML
	//$mail->Subject = $subject;
	//$mail->Body    = $body;
	//$mail->AltBody = '';
	//$uploadfile = 	tempnam(sys_get_temp_dir(), sha1($_FILES['file']['name']));
	//$filename   =	$_FILES['file']['name'];
	//if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile)) {
		//$mail->addAttachment($uploadfile, $filename);
	//}
	//$mail->AddAttachment( $full_path);
	if(!$mail->Send()) {
		
			  echo 'Message was not sent.';
		     echo 'Mailer error: ' . $mail->ErrorInfo;
			  exit();
		
	}
	else{
		
		$msg= "You will be contacted soon.";
		      $_SESSION["sess_Msg"]=$msg;
			  header("location:".$_SERVER['HTTP_REFERER']."#popup_success");
			  exit();
		
			
	}
		
}


?>




<!DOCTYPE html>
<html lang="zxx">
<head>
<meta charset="UTF-8">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title>A K Concepts</title>

<!-- Google Font -->
<link href="https://fonts.googleapis.com/css?family=Work+Sans:400,500,600,700,800,900&display=swap"
        rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.css" />
<!-- Css Styles -->


<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">

<link rel="stylesheet" href="css/boxicons/css/boxicons.min.css" type="text/css">
<link rel="stylesheet" href="css/glightbox/css/glightbox.min.css" type="text/css">


<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">
<link rel="stylesheet" href="css/elegant-icons.css" type="text/css">
<link rel="stylesheet" href="css/owl.carousel.min.css" type="text/css">
<link rel="stylesheet" href="css/slicknav.min.css" type="text/css">


<link rel="stylesheet" href="css/style.css" type="text/css">


</head>


<style>
body {
  font-family: Verdana, sans-serif;
  margin: 0;
}

* {
  box-sizing: border-box;
}

.row > .column {
  padding: 0 8px;
}

.row:after {
  content: "";
  display: table;
  clear: both;
}

.column {
  float: left;
  width: 25%;
}

/* The Modal (background) */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  padding-top: 100px;
  padding-bottom:100px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: #000000b0;
}

/* Modal Content */
.modal-content {
  position: relative;
  background-color: #fefefe;
  margin: auto;
  padding: 0;
  width: 90%;
  max-width: 1200px;
}

/* The Close Button */
.close {
  color: white;
  position: absolute;
  top: 10px;
  right: 25px;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: #999;
  text-decoration: none;
  cursor: pointer;
}

.mySlides {
  display: none;
}

.cursor {
	
  cursor: cell;
}

/* Next & previous buttons */
.prev,
.next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -50px;
  color: white;
  font-weight: bold;
  font-size: 20px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
  -webkit-user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover,
.next:hover {
  background-color: rgba(0, 0, 0, 0.8);
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

img {
  margin-bottom: -4px;
}

.caption-container {
  text-align: center;
  background-color: black;
  padding: 2px 16px;
  color: white;
}

.demo {
  opacity: 0.6;
}

.active,
.demo:hover {
  opacity: 1;
}

img.hover-shadow {
	background-color:#09C;
  transition: 0.3s;
}
img.hover-shadow:hover {
	background-color:#09C;
  
}
.hover-shadow{
	
	box-shadow: 0 4px 8px 0 rgb(8 8 8), 0 6px 20px 0 rgb(224 10 145 / 47%);

	
}
	
.hover-shadow:hover {
	
	
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
}
</style>

<body>
<!--==================================== Preloader Begin ====================================-->
<!--<div id="preloader-active">
  <div class="preloader d-flex align-items-center justify-content-center">
    <div class="preloader-inner position-relative">
      <div class="preloader-circle"></div>
      <div class="preloader-img pere-text"> <img src="img/aklogo.jpg" alt=""> </div>
    </div>
  </div>
</div>-->
<!--==================================== Preloader  End ====================================--> 

<!--==================================== Header Section Begin ====================================-->
<!--<header class="header-section">
  <div class="container">
    <div class="logo"> <a href="./index.html"> <img src="img/aklogo.jpg" alt=""> </a> </div>
    <div class="nav-menu">
      <nav class="mainmenu mobile-menu">
        <ul>
          <li class="active"><a href="./index.html">Home</a></li>
          <li><a href="about.html">About</a></li>
          <li><a href="package.html">Servivces</a></li>
        <li><a href="order.html">Reviews</a></li>
          <li><a href="gallery.html">Gallery</a></li>
          <li><a href="contact.html">Contacts</a></li>
        </ul>
      </nav>
    </div>
    <div id="mobile-menu-wrap"></div>
  </div>
</header>-->
<!--==================================== Header End ====================================--> 
<!--==================================== Sticky Social icon Begin ====================================-->
<ul class="ct-socials">
  <li> <a href="https://www.facebook.com/AK-Concepts-107084260895396/" target="_blank"><i class="fa fa-facebook"></i></a> </li>
 <li> <a href="https://instagram.com/akconceptskochi?utm_medium=copy_link" target="_blank"><i class="fa fa-instagram"></i></a> </li>
   
  <li> <a href="https://api.whatsapp.com/send?phone=9946689731&amp;" target="_blank"><i class="fa fa-whatsapp"></i></a> </li>
</ul>
<!--==================================== Sticky Social icon End ====================================--> 
<!--==================================== Banner Begin ====================================-->
<section class="home-slider owl-carousel hero-section set-bg ">
  
  <div class="slider-item js-fullheight" style="background-image:url(img/banner/hd1.jpg);">
    <!--<div class="overlay"></div>-->
    <div class="container">
      <div class="banner-text">
      <div class="banner-text-container">
      <img src="img/logo.png" alt="...">
        <h1>A K Concepts</h1>
        <h2>A Complete Painting Solution</h2>
        <ul class="gt-information">
          
          <li><i class="fas fa-award"></i> <a href="#">Better Service</a> </li>
          <li><i class="fas fa-money-bill-alt"></i> <a href="#">Less Cost</a> </li>
        </ul>
        </div>
        
      </div>
    </div>
  </div>
  
  <div class="slider-item js-fullheight" style="background-image:url(img/banner/hd2.png);">
    <!--<div class="overlay"></div>-->
    <div class="container">
      <div class="banner-text">
      <div class="banner-text-container">
     
      <img src="img/logo.png" alt="..." >
        <h1>A K Concepts</h1>
        
        <h2>A Complete Painting Solution</h2>
        <ul class="gt-information">
         
          <li><i class="fas fa-award"></i> <a href="#">Better Service</a> </li>
          <li><i class="fas fa-money-bill-alt"></i> <a href="#">Less Cost</a> </li>
        </ul>
        </div>
        
      </div>
    </div>
  </div>
  
  
  
</section>
<!--==================================== Banner End ====================================--> 
 <!--<section id="services" class="services section-bg">
      <div class="container">

        <div class="section-title">
          <h2>Services</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis</p>
            </div>
          </div>

        </div>

      </div>
    </section>--><!-- End Services Section -->


<!--==================================== service begin ====================================-->



<section class=" service-section-boxed  service-section " >
  <div class="container about-column-gap-default">
  
  
  <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
                        	<div class="service-section-title">
                        <h2>Our Services</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
		                    
		                </div>
		            </div>

  <div class="col-md-12">

      <div class="service-element ">
        <div class="service-column-wrap  ">
          <div class="service-widget-wrap row">
            
            
           <div class="service-element col-md-4 ">
              <div class="service-widget-container">
                <div class="service-single-intro-text mb-70">
              
                <div class="icon"> <img src="img/ser/icon2.png" alt="..." ></div>
                  <h3 class="ts-title">Free Surface Wash </h3>
                 
                </div>
                <!-- single intro text end--> 
                
              </div>
            </div>
            
            <div class="service-element col-md-4 ">
              <div class="service-widget-container">
                <div class="service-single-intro-text mb-70">
              
                <div class="icon"><img src="img/ser/icon3.png" alt="..." ></div>
                  <h3 class="ts-title">Algae/ Fungal/ Crack Treatment </h3>
                 
                </div>
                <!-- single intro text end--> 
                
              </div>
            </div>
            <div class="service-element col-md-4 ">
              <div class="service-widget-container">
                <div class="service-single-intro-text mb-70">
              
                <div class="icon"><img src="img/ser/icon4.png" alt="..." ></div>
                  <h3 class="ts-title">Free Interior Dust Cleaning </h3>
                 
                </div>
                <!-- single intro text end--> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="service-element ">
        <div class="service-column-wrap  ">
          <div class="service-widget-wrap row">
            
            
            <div class="service-element col-md-4 ">
              <div class="service-widget-container">
                <div class="service-single-intro-text mb-70">
              
                <div class="icon"><img src="img/ser/icon5.png" alt="..." ></div>
                  <h3 class="ts-title">Site Supervision </h3>
                 
                </div>
                <!-- single intro text end--> 
                
              </div>
            </div>
             <div class="service-element col-md-4 ">
              <div class="service-widget-container">
                <div class="service-single-intro-text mb-70">
              
                <div class="icon"><img src="img/ser/icon6.png" alt="..." ></div>
                  <h3 class="ts-title">On Time Completion </h3>
                 
                </div>
                <!-- single intro text end--> 
                
              </div>
            </div>
            <div class="service-element col-md-4 ">
              <div class="service-widget-container">
                <div class="service-single-intro-text mb-70">
              
                <div class="icon"><img src="img/ser/icon7.png" alt="..." ></div>
                  <h3 class="ts-title">2 Year Warranty </h3>
                 
                </div>
                <!-- single intro text end--> 
                
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    
    </div>
    </div>
    </section>

    

<!--==================================== service End ====================================-->

<!--==================================== brand Begin ====================================-->

<div class="parallax-brand">

<section class="brand-area pt-120">
		        <div class="container">
		            <div class="row d-flex justify-content-center">
		                <div class="menu-content pb-70 col-lg-8">
                        	<div class="section-title">
                        <h2>Brands</h2>
                       
                    </div>
		                    
		                </div>
		            </div>
		            <div class="row">


<div class="owl-carousel owl-theme">
<div class="item-brand">     <div class="item"><img src="img/brands/asian.png" alt="..." ></div>   </div>
<div class="item-brand">    <div class="item"><img src="img/brands/berger.png" alt="..." ></div>    </div>
<div class="item-brand">    <div class="item"><img src="img/brands/dulux.jpg" alt="..." ></div>    </div>
<div class="item-brand">    <div class="item"><img src="img/brands/indigo.jpg" alt="..." ></div>   </div>
<div class="item-brand">    <div class="item"><img src="img/brands/nerolac.jpg" alt="..." ></div>   </div>
<div class="item-brand">    <div class="item"><img src="img/brands/nippon.jpg" alt="..." ></div>    </div>
   
</div>

</div>
</div>
</section>

 </div>
<!--==================================== brands End ====================================-->
<!--==================================== gallery begin ====================================-->


<section id="portfolio" class="portfolio section-bg team-gallery-section">
      <div class="container">

       
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Gallery</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
                </div>
            </div>
       

        
        
        
        
  <div class="row portfolio-container">      
      
<div class="row">
<div class="col-lg-4 col-md-6 portfolio-item filter-app">  

 
  
    <img src="img/gallery/IMG_20201112_120505.jpg" style="width:100%" onclick="openModal();currentSlide(1)" class="hover-shadow cursor">
  
 
  </div>
 <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG_20201126_173543.jpg" style="width:100%" onclick="openModal();currentSlide(2)" class="hover-shadow cursor">
  </div>
 <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG_20201227_170445.jpg" style="width:100%" onclick="openModal();currentSlide(3)" class="hover-shadow cursor">
  </div>
 <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG_20201227_170616.jpg" style="width:100%" onclick="openModal();currentSlide(4)" class="hover-shadow cursor">
  </div>
  
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG_20210503_173153.jpg" style="width:100%" onclick="openModal();currentSlide(5)" class="hover-shadow cursor">
  </div>
  
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG_20210330_155105.jpg" style="width:100%" onclick="openModal();currentSlide(6)" class="hover-shadow cursor">
  </div>
  
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG-20211019-WA0012.jpg" style="width:100%" onclick="openModal();currentSlide(7)" class="hover-shadow cursor">
  </div>
  
   <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG_20210423_135413.jpg" style="width:100%" onclick="openModal();currentSlide(8)" class="hover-shadow cursor">
  </div>
  
   <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG-20211127-WA0013.jpg" style="width:100%" onclick="openModal();currentSlide(9)" class="hover-shadow cursor">
  </div>
  
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG-20200227-WA0025.jpg" style="width:100%" onclick="openModal();currentSlide(10)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG-20200227-WA0027.jpg" style="width:100%" onclick="openModal();currentSlide(11)" class="hover-shadow cursor">
  </div>
  <div class="col-lg-4 col-md-6 portfolio-item filter-app">  
    <img src="img/gallery/IMG-20200229-WA0001.jpg" style="width:100%" onclick="openModal();currentSlide(12)" class="hover-shadow cursor">
  </div>
</div>

<div id="myModal" class="modal">
  <span class="close cursor" onclick="closeModal()">&times;</span>
  <div class="modal-content">

    <div class="mySlides">
      
      <img src="img/gallery/IMG_20201112_120505.jpg" style="width:100%">
    </div>

    <div class="mySlides">
    
      <img src="img/gallery/IMG_20201126_173543.jpg" style="width:100%">
    </div>

    <div class="mySlides">
     
      <img src="img/gallery/IMG_20201227_170445.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
    
      <img src="img/gallery/IMG_20201227_170616.jpg" style="width:100%">
    </div>
    
    <div class="mySlides">
    
      <img src="img/gallery/IMG_20210503_173153.jpg" style="width:100%">
    </div>
    <div class="mySlides">
    
      <img src="img/gallery/IMG_20210330_155105.jpg" style="width:100%">
    </div>
    <div class="mySlides">
    
      <img src="img/gallery/IMG-20211019-WA0012.jpg" style="width:100%">
    </div>
    <div class="mySlides">
    
      <img src="img/gallery/IMG_20210423_135413.jpg" style="width:100%">
    </div>
    <div class="mySlides">
    
      <img src="img/gallery/IMG-20211127-WA0013.jpg" style="width:100%">
    </div>
  <div class="mySlides">
    
      <img src="img/gallery/IMG-20200227-WA0025.jpg" style="width:100%">
    </div>
   <div class="mySlides">
    
      <img src="img/gallery/IMG-20200227-WA0027.jpg" style="width:100%">
    </div>

   <div class="mySlides">
    
      <img src="img/gallery/IMG-20200229-WA0001.jpg" style="width:100%">
    </div>

  
  </div>
</div>

        
  </div>      
        
      
        
        
        
        
        
        
        
      
      </div>
    </section>

<!--==================================== gallery end ====================================-->

<!--==================================== gallery begin ====================================-->



        
        
        
       
          <!-- ======= Contact Section ======= -->
          
    <section id="contact" class="team-gallery-section contact section-bg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <h2>Contact Us</h2>
                        <p>These are our communicators, you can see each person information</p>
                    </div>
                </div>
            </div>
       

        <div class="row">

          <div class="col-lg-4 col-md-4">
            <div class="contact-about">
              <h3>Map location</h3>
             
               <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3927.807785478486!2d76.476721113792!3d10.114814192772497!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b07e3be160c0e93%3A0xdcfdf541a653e55!2sAK%20Concepts!5e0!3m2!1sen!2sin!4v1643730139448!5m2!1sen!2sin" width="100%" height="240" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
          
             
             
            </div>
          </div>

          <div class="col-lg-3 col-md-4">
            <div class="info">
              <div class="d-flex align-items-center">
                <i class="fa fa-map-marker"></i>
                <p>Classic tower, door no:XV/821-C7,<br> 2nd floor, Thaluk hospital junction,<br> AM road, Perumbavoor, Kerala 683542</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="fa fa-envelope"></i>
                <p>akconceptscochin@gmail.com</p>
              </div>

              <div class="d-flex align-items-center mt-4">
                <i class="fa fa-phone"></i>
                <p>9946689731</p>
              </div>

            </div>
          </div>

          <div class="col-lg-5 col-md-8">
            <form action="" method="post" role="form" class="">
              <div class="form-group">
                <input type="text" name="cn_name" class="form-control" id="name" placeholder="Your Name" required>
              </div>
              <div class="form-group mt-3">
                <input type="email" class="form-control" name="cn_email" id="email" placeholder="Your Email" required>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="cn_phone" id="subject" placeholder="your phone number" required pattern="[0-9\s\-\+]{5,20}">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="cn_message" rows="5" placeholder="Message" required></textarea>
              </div>
              <!--<div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>-->
              <div class="text-center"><button type="submit" name="contact_submit" class="bstyle">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section><!-- End Contact Section -->
        
        
    </section>
    <!--==================================== gallery End ====================================-->

<!--==================================== Footer Begin ====================================-->
<footer class="footer-section">
        <div class="container">
            
            
        </div>
    </footer>
    
<!-- Js Plugins --> 
<script src="js/jquery-3.3.1.min.js"></script> 


<script src="js/bootstrap.min.js"></script> 
<script src="js/jquery.slicknav.js"></script> 
<script src="js/owl.carousel.min.js"></script> 
<script src="php-email-form/validate.js"></script>
<script src="js/main.js"></script>

<script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.6/dist/jquery.fancybox.min.js"></script>
<script>
jQuery(function(){
		 var floatingcta = 20;
		  jQuery(window).scroll(function() {
		    var scroll = getCurrentScroll();
		      if ( scroll >= floatingcta ) {
		           jQuery('.ct-socials').addClass('socialactive');
				   
		        }
		        else {
		            jQuery('.ct-socials').removeClass('socialactive');
					
		        }
		  });
		function getCurrentScroll() {
		    return window.pageYOffset || document.documentElement.scrollTop;
		    }
		});
</script>
<!---  scroll for brand section  ---->
<script>


var owl = $('.owl-carousel');
owl.owlCarousel({
    items:4,
    loop:true,
    margin:10,
    autoplay:true,
    autoplayTimeout:1500,
    autoplayHoverPause:true
});
</script>
<!----- end brand ----->

<script>
function openModal() {
  document.getElementById("myModal").style.display = "block";
}

function closeModal() {
  document.getElementById("myModal").style.display = "none";
}

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  var captionText = document.getElementById("caption");
  if (n > slides.length) {slideIndex = 1}
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";
  dots[slideIndex-1].className += " active";
  captionText.innerHTML = dots[slideIndex-1].alt;
}
</script>
    

</body>
</html>