<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?= $metadescription?>">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="keywords" content="<?= $metakeywords?>, new york, long island, suffolk county, nassau county">
		<meta charset="UTF-8">
		<title><?= $pagetitle?></title>	
    <link href='https://fonts.googleapis.com/css?family=Rationale' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css"/>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="canonical" href="<?= $canonical ?>" />
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/font-awesome/4.2.0/css/font-awesome.min.css"/>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
   <?php 
   
	 if (substr($_SERVER["SERVER_NAME"],0,3) != "www"){
		    header("HTTP/1.1 301 Moved Permanently");
        header("Location: ".$canonical);
   }
  
   ?>
  </head>
	<body>
  <div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&appId=153733728017142&version=v2.0";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
  <div id="header-content">
    <a  class="btn btn-success visible-xs" href="tel:+16316676468">Call On Point Now!</a>
    <a  class="btn btn-success hidden-xs" href="contact.php">Get a Free Quote Now!</a>
    <a href="/" class="hidden-xs"><img src='./images/on-point.jpg' class='img-responsive' alt="On Point Locating - Utility Mark Out Specialists"/></a>
    <a href="/" class="visible-xs mobile-logo"><img src='./images/header-mobile.jpg' alt="On Point Locating - Utility Mark Out Specialists"/></a>
    <a class="visible-xs header-phone" href="tel:+16316676468"><i class='fa fa-phone'></i>&nbsp;631-On Point</a>
    <nav class="navbar navbar-default" role="navigation" id='nav-holder'>
      <div class="container-fluid">
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>  
              </button>
          </div>
          <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1" >
          <ul class="nav navbar-nav">
              <li>
                <a href="index.php">Home</a>
              </li>
              <li>
                <a data-toggle="dropdown" class="dropdown-toggle">About Us</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="contact.php">Contact Us</a></li>
                  <li><a href="about-us.php">The Company</a></li>
                  <li><a href="faq.php">FAQ</a></li>
                  <li><a href="testimonials.php">Testimonials</a></li>
                  <li><a href="./images/onpoint-pdf.pdf" target="_blank">Download Our Brochure</a></li>
                </ul>
              </li>
              <li class="dropdown">
                <a class="dropdown-toggle" data-toggle="dropdown">Services</a>
                <ul class="dropdown-menu" role="menu">
                  <li><a href="./gpr.php">Ground Penetrating Radar</a></li>
                  <li><a href="./utility-locating.php">Utilitity Locating</a></li>
                  <li><a href="./camera-inspections.php">Camera Inspections</a></li>
                  <li><a href="./thermal-camera-inspections.php">Thermal Camera Inspections</a></li>
                  <li><a href="./leak-detection.php">Leak Detection</a></li>
                  <li><a href="./pool-line-leaks.php">Pool Line Leak Detection</a></li>
                  <li><a href="./smoke-tests.php">Smoke Tests</a></li>
                </ul>
              </li>
              <li>
                <a href="tech.php">Technology</a>
              </li>
              <li>
                <a href="sample-reports.php">Sample Reports</a>
              </li>
              <li class='hidden-xs header-phone' >
                <small><i class='fa fa-phone'></i>&nbsp;(631)&nbsp;667-6468</small>
              </li>
          </ul>
          </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
  </div>
  <div id='container'>