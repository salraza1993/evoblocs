<?php
if($_POST){
	$to = "salraza1993@gmail.com";
	$subject = "Enquiry from EvoBlocs";

	$message = '<html>
					<head>
						<title>General Enquiry</title>
					</head>
					<body>
						<p>An enquiry received from below details</p>
						<table style="border: 1px solid #ccc; border-spacing: 0;">
							<thead>
								<tr style="background-color: #eee;">
									<th style="border-right: 1px solid #ccc; padding: 10px 25px; text-align: center; color: #333;">NAME</th>
									<th style="border-right: 1px solid #ccc; padding: 10px 25px; text-align: center; color: #333;">PHONE</th>
									<th style="border-right: 1px solid #ccc; padding: 10px 25px; text-align: center; color: #333;">EMAIL</th>
									<th style="border-right: 1px solid #ccc; padding: 10px 25px; text-align: center; color: #333;">MESSAGE</th>
								</tr>
								
							</thead>
							<tbody>
								<tr>
									<td style="padding: 15px 25px; text-align: center; color: #333;">'.$_POST['name'].'</td>
									<td style="padding: 15px 25px; text-align: center; color: #333;">'.$_POST['contact'].'</td>
									<td style="padding: 15px 25px; text-align: center; color: #333;">'.$_POST['email'].'</td>
									<td style="padding: 15px 25px; text-align: center; color: #333;">'.$_POST['organization'].'</td>
									<td style="padding: 15px 25px; text-align: center; color: #333;">'.$_POST['service'].'</td>
									<td style="padding: 15px 25px; text-align: center; color: #333;">'.$_POST['message'].'</td>
								</tr>
							</tbody>
						</table>
					</body>
				</html>';

	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";


	$headers .= 'From: admin@izamfiherbals.com' . "\r\n";
	
	mail($to,$subject,$message,$headers);
	echo 'success';
	die;
	
} else {
	echo 'error';
	die;
}
