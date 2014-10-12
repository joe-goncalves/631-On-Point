<?php
$to="snakeitcheap@aol.com";	
		$subject="On Point Mailer";
				$message="
			<html>
				<p>Good morning,</p>
				<p>Maximum Environmental Management, Inc. is pleased to announce the formation of our newest company <span class = 'comp-title'>on point locating</span> a private mark out company. </p>
				<p><span class = 'comp-title'>on point locating</span> is a small Long Island based company established in 2013. Central to Suffolk County, we specialize in Ground Penetrating Radar, locating devices, camera inspections, and leak detection. We offer the latest in updated technology to assure the highest quality services we offer. This means same day service and 24 hour emergency service. </p>
				<em style = 'font-weight:bold'>Why use <span class = 'comp-title'>on point locating</span> over the free 1-800 number</em>

<p>The free 1-800 number only does street to house surveying, everything else is the homeowner's responsibility. Make sure you protect yourself by getting accurate data before beginning any construction project.</p>
<em style = 'font-weight:bold'>How soon can you provide service?</em>
<p><span class = 'comp-title'>on point locating</span> can usually provide services within 2 hours of same day service. </p>
				<a href = \"http://631onpoint.com/\"><img src=\"http://631onpoint.com/images/TriFold_Brochure_outside.png\"/></a>
				<a href = \"http://631onpoint.com/\"><img src=\"http://631onpoint.com/images/TriFold_Brochure_inside.png\"/></a>
			</html>
		";
		$headers = "From: snakeitcheap@aol.com\n".
		"Reply-To: ".$to."\n" .
		"Content-type: text/html\r\n";
		$headers .= 'Bcc: joe.a.goncalves@gmail.com' . "\r\n";
		"X0-Mailer: PHP/".phpversion();
		mail($to, $subject, $message, $headers);
?>
