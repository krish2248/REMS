<?php 
ini_set('session.cache_limiter','public');
session_cache_limiter(false);
session_start();
include("config.php");								
?>
<!DOCTYPE html>
<html lang="en">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!-- Meta Tags -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Homex template">
<meta name="keywords" content="">
<meta name="author" content="Unicoder">
<link rel="shortcut icon" href="images/favicon.ico">

<!-- Fonts -->
<link href="https://fonts.googleapis.com/css?family=Muli:400,400i,500,600,700&amp;display=swap" rel="stylesheet">
<link href="https://fonts.googleapis.com/css?family=Comfortaa:400,700" rel="stylesheet">

<!-- Css Link -->
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap-slider.css">
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link rel="stylesheet" type="text/css" href="css/layerslider.css">
<link rel="stylesheet" type="text/css" href="css/color.css" id="color-change">
<link rel="stylesheet" type="text/css" href="css/owl.carousel.min.css">
<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fonts/flaticon/flaticon.css">
<link rel="stylesheet" type="text/css" href="css/style.css">

<!-- Title -->
<title>REMS</title>
</head>
<body>

<div id="page-wrapper">
    <div class="row"> 
        <!--	Header start  -->
        <?php include("include/header.php");?>
        <!--	Header end  -->
        
        <!--	Banner   --->
        <div class="banner-full-row page-banner" style="background-image:url('images/breadcromb.jpg');">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <h2 class="page-name float-left text-white text-uppercase mt-1 mb-0"><b>About US</b></h2>
                    </div>
                    <div class="col-md-6">
                        <nav aria-label="breadcrumb" class="float-left float-md-right">
                            <ol class="breadcrumb bg-transparent m-0 p-0">
                                <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">About Us</li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
         <!--	Banner   --->
         
        <!--	About Our Company -->
        <div class="full-row">
            <div class="container">
                <div class="row">
                    <div class="col-md-12 col-lg-12">
                        <h3 class="double-down-line-left text-secondary position-relative pb-4 mb-4">About IT HUB Software Solutions</h3>
                    </div>
                </div>
                <div class="row about-company">
                    <div class="col-md-12 col-lg-12">
                        <div class="about-content">
                            <p>
                                IT HUB Software Solutions is an innovative and dynamic web development company located in Ahmedabad, Gujarat, India. We are dedicated to providing state-of-the-art web-based solutions to businesses of all sizes. Specializing in web development, IT consulting, and digital transformation services, we offer a comprehensive suite of services that help businesses harness the power of technology to optimize operations and improve customer experiences.
                            </p>
                            <p>
                                Our expertise spans a wide range of services, including:
                            </p>
                            <ul>
                                <li>Customized Web Development: Tailor-made solutions that align with your business goals, ensuring your website or application is perfectly suited to your needs.</li>
                                <li>PHP Web Development: We deliver robust and scalable PHP-based solutions for websites, eCommerce platforms, and enterprise applications.</li>
                                <li>ASP.NET Programming: Powerful, secure, and high-performance applications built using ASP.NET frameworks.</li>
                                <li>eCommerce Solutions: End-to-end eCommerce solutions that include website development, payment gateway integration, product management, and more.</li>
                                <li>Multimedia & Print Publication Solutions: Creative design services for brochures, flyers, and other marketing materials, alongside multimedia content for dynamic websites.</li>
                                <li>CSS/XHTML Web Design: Beautiful, responsive, and user-friendly web design services that ensure an exceptional user experience across devices.</li>
                                <li>Content Management & SEO (Web Promotion): Efficient content management systems and strategies to boost your site’s visibility on search engines.</li>
                            </ul>
                            <p>
                                At IT HUB Software Solutions, we are not just a service provider; we are your trusted digital partner. Our mission is to empower businesses to grow by providing innovative, cost-effective, and reliable digital solutions. With our team of expert developers, designers, and consultants, we are dedicated to crafting solutions that drive results and create long-lasting impact.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--	About Our Company -->        
        
       <!--	Footer   start-->
        <?php include("include/footer.php");?>
        <!--	Footer   start-->
        
        <!-- Scroll to top --> 
        <a href="#" class="bg-secondary text-white hover-text-secondary" id="scroll"><i class="fas fa-angle-up"></i></a> 
        <!-- End Scroll To top --> 
    </div>
</div>
<!-- Wrapper End --> 

<!--	Js Link
============================================================--> 
<script src="js/jquery.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/custom.js"></script>
</body>

</html>