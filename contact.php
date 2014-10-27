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
			echo"<div class='row'>".
						"<div class='col-md-12'>".
							"<h2>Thank you for your submission, someone from the team be in contact with you shortly!</h2>".
						"</div>".
					 "</div>";
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
<script> 
$(document).ready(function() {
    $('#contactForm').bootstrapValidator({
        message: 'This value is not valid',
        feedbackIcons: {
            valid: 'glyphicon glyphicon-ok',
            invalid: 'glyphicon glyphicon-remove',
            validating: 'glyphicon glyphicon-refresh'
        },
        fields: {
            name: {
                message: 'Please enter a name',
                validators: {
                    notEmpty: {
                        message: 'Name is required and cannot be empty'
                    }
                }
            },
            msg: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a message'
                    }
                }
            },
            subject: {
                validators: {
                    notEmpty: {
                        message: 'Please enter a subject'
                    }
                }
            },
            email: {
                validators: {
                    notEmpty: {
                        message: 'The email is required and cannot be empty'
                    },
                    emailAddress: {
                        message: 'The input is not a valid email address'
                    }
                }
            }
        }
    });
});

</script>
<div class='row'>
	<div class="col-md-12">
		<h1>Contact Us</h1>
	</div>
</div>
<div class='row'>
	<div class="col-md-6 col-sm-12">	
		<form method="post" name="contactForm" id="contactForm">
			<div class="form-group">
				<label class="<?=$nm_error_status?>" for="name">Name<span class="hidden <?=$nm_error_status?>">*</span></label>
				<input class="form-control" type='text' id="name" name="name" value="<?=$name?>"/>
			</div>
			<div class="form-group">
			<label class="<?=$email_error_status?>" for="email">Email Address<span class="hidden <?=$email_error_status?>">*</span></label>
			<input class="form-control" type='text' id="email" name="email" value="<?=$email?>"/>
			</div>
			<div class="form-group">
			<label class="<?=$sub_error_status?>" for="subject">Subject<span class="hidden <?=$sub_error_status?>">*</span></label>
			<input class="form-control" type='text' id="subject" name="subject" value="<?=$subject?>"/>
			</div>
			<div class="form-group">
			<label class="<?=$msg_error_status?>" for="msg">Message<span class="hidden <?=$msg_error_status?>">*</span></label>
			<textarea class="form-control" id="msg" name="msg"><?=$msg?></textarea>
			</div>
			<input name='contactSubmit' class="btn btn-success" id='contactSubmit' type="submit">
		</form> 
	</div>
	<div class="col-md-6">
		<div class='row'>
			<hr class='visible-sm visible-xs'>
			<div class='col-md-12 col-sm-6'>
				<strong><i class="fa fa-phone"></i>&nbsp;Call Us:</strong>
				<ul class='list-unstyled'>
					<li>(631)-ONPOINT -or-</li>
					<li>(631) 667-6468 – Suffolk County</li>
					<li>(516) 231-1150 – Nassau County</li>
					<li>(862) 258-1895 – New Jersey</li>
					<li>(203) 857-9901 – Connecticut</li>
				</ul>
				<strong><i class="fa fa-fax"></i>&nbsp;Fax:</strong>
				<ul class="list-unstyled">
					<li>(631) 589-1157</li>
				</ul>
				<strong><i class="fa fa-envelope"></i>&nbsp;Email:</strong>
				<ul class="list-unstyled">
					<li><a class='link-in-container' href="mailto:support@631onpoint.com">support@631onpoint.com</a></li>
				</ul>
				<strong><i class="fa fa-home"></i>&nbsp;Address:</strong>
				<ul class="list-unstyled">
					<li>
						<address>
				  			1170 Lincoln Avenue, Suite 4<br>
				  			Holbrook, NY 11741<br>	
						</address>
					</li>
				</ul>
			</div>
			<div class="col-md-12 col-sm-6">
				<img class="right-photo" src="http://maps.googleapis.com/maps/api/staticmap?center=1170+Lincoln+Avenue,+Suite+4+Holbrook,+NY+11741&zoom=13&scale=false&size=500x300&maptype=roadmap&sensor=false&format=png&visual_refresh=true&markers=size:mid%7Ccolor:green%7C1170+Lincoln+Avenue,+Suite+4+Holbrook,+NY+11741" alt="Google Map of 1170 Lincoln Avenue, Suite 4 Holbrook, NY 11741">
			</div>
		</div>
	</div>
</div>
<?php include 'includes/footer.php'; ?>

