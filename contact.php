<?php
	$error = false;
	$message = $nm_error_status = $sub_error_status = $msg_error_status = $email_error_status = '';
	if(isset($_POST['contactSubmit'])){
		foreach($_POST as $key => $val){
			$$key = $val;
			$line = $key . " : " . $val . "<br/>";
			if ($key != "contactSubmit"){
				$message .= $line;
			}
		}
		if (empty($name)){
			$error = true;
			$nm_error_status="error";
		}
		if (empty($subject)){
			$error = true;
			$sub_error_status="error";
		}
		if (empty($msg)){
			$error = true;
			$msg_error_status="error";
		}
		if (empty($email)){
			$error = true;
			$email_error_status="error"; 
		}
		if (!$error){
			$from = "support@631onpoint.com";
			$to = "support@631onpoint.com";
			$alias = "joe.a.goncalves@gmail.com";
			$subjecthead = "631 On Point Contact Form Submission";
			$headers = "From: " . $from . "\n".
			"Reply-To: ".$from."\n" .
			"Content-type: text/html\r\n";
			$headers .= "X0-Mailer: PHP/".phpversion();
			mail($to, $subjecthead, $message, $headers);
			mail($alias, $subjecthead, $message, $headers);
			include 'includes/header.php';
			echo"<div class='main-content contact-us'>";
			echo "<h2>Thank you for your submission, someone will be in contact with you shortly</h2>";
			echo "</div>";
			include 'includes/footer.php';
			exit();
		}else{
			$topErrMsg = "Your Form has Error, please fix and submit again";
		}

	}
?>

<? $pagetitle = 'Contact on Point Locating' ?>
<? $metadescription = 'Contact on point locating for all your utility markout projects' ?>
<? $metakeywords = 'on point locating, onpoint locating, 631 on point, 631 onpoint' ?>
<? $canonical = 'http://www.631onpoint.com/contact.php' ?>
<?php include 'includes/header.php'; ?>
<div class="main-content contact-us">
<h1>Contact Us</h1>
<h3 class="error"><?=$topErrMsg?></h3>
<div>
<img class="right-photo" src="http://maps.googleapis.com/maps/api/staticmap?center=1170+Lincoln+Avenue,+Suite+4+Holbrook,+NY+11741&zoom=13&scale=false&size=500x300&maptype=roadmap&sensor=false&format=png&visual_refresh=true&markers=size:mid%7Ccolor:green%7C1170+Lincoln+Avenue,+Suite+4+Holbrook,+NY+11741" alt="Google Map of 1170 Lincoln Avenue, Suite 4 Holbrook, NY 11741">
<form method="post" name="contactForm" id="contactForm">
	<label class="<?=$nm_error_status?>" for="name">Name<span class="hidden <?=$nm_error_status?>">*</span></label>
	<input type='text' name="name" value="<?=$name?>"/>
	<label class="<?=$email_error_status?>" for="email">Email Address<span class="hidden <?=$email_error_status?>">*</span></label>
	<input type='text' name="email" value="<?=$email?>"/>
	<label class="<?=$sub_error_status?>" for="subject">Subject<span class="hidden <?=$sub_error_status?>">*</span></label>
	<input type='text' name="subject" value="<?=$subject?>"/>
	<label class="<?=$msg_error_status?>" for="msg">Message<span class="hidden <?=$msg_error_status?>">*</span></label>
	<textarea name="msg"><?=$msg?></textarea>
	<input name='contactSubmit' id='contactSubmit' type="submit">
	<div><?print_r($hold);?></div>
</form> 
<p><strong>Call Us:</strong>(631)-ONPOINT -or-</p>
<p><strong>&nbsp;</strong>(631) 667-6468 – Suffolk County</p>
<p><strong>&nbsp;</strong>(516) 231-1150 – Nassau County</p>
<p><strong>&nbsp;</strong>(862) 258-1895 – New Jersey</p>
<p><strong>&nbsp;</strong>(203) 857-9901 – Connecticut </p><br/>
<p><strong>Fax:</strong>(631) 589-1157</p><br/>
<p><strong>Address:</strong>1170 Lincoln Avenue, Suite 4</p>
<p><strong>&nbsp;</strong>Holbrook, NY 11741 </p>
<p><strong>Email</strong>support@631onpoint.com</p>
</div>
<div class="clear"></div>
</div>
<?php include 'includes/footer.php'; ?>

