<!DOCTYPE HTML>
<html lang="en">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta name="description" content="<?= $metadescription?>">
		<meta name="keywords" content="<?= $metakeywords?>, new york, long island, suffolk county, nassau county">
		<meta charset="UTF-8">
		<title><?= $pagetitle?></title>	
    <link href='http://fonts.googleapis.com/css?family=Rationale' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="styles/style.css">
    <!--link rel="stylesheet" type="text/css" href="styles/print.css" media="print"-->
    <link rel="shortcut icon" href="favicon.ico">
    <link rel="canonical" href="<?= $canonical ?>" />
    
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
		<div id="content">
    <div id="header-content">
    	<a href="/"><img src='images/on-point.jpg' alt="On Point Locating - Utility Mark Out Specialists"/></a>
      <div id="nav_bar">
        <ul>
          <li><a href="index.php">Home</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="about-us.php">About Us</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="services.php">Services</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="tech.php">Technology</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="faq.php">FAQ</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="contact.php">Contact Us</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="sample-reports.php">Sample Reports</a></li>
          <li>&nbsp;|&nbsp;</li>
          <li><a href="./images/onpoint-pdf.pdf" target="_blank">DOWNLOAD OUR BROCHURE</a></li>
        </ul>
    	</div>
    </div>