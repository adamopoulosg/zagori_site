<?php
	ini_set('default_charset', 'utf-8');
	require_once "PHPmailer/PHPMailerAutoload.php";

	
	
	$mail = new PHPMailer();
	
	$mail->SMTPDebug = true;
	$mail->SMTPAuth = true;

	$mail->Host = "mailgate.cosmotemail.gr";
	$mail->Username = "noreply@zagoriwater.gr";
	$mail->Password = "zagori2015";
	$mail->Port = "587";
	$mail->SMTPSecure = 'tls';
	
	$mail->From = 'info@zagoriwater.gr';
	$mail->FromName = 'ZagoriWater.gr';
	$mail->addAddress('info@zagoriwater.gr', "Zagori Water Business Corner");  // Add a recipient
	$mail->addReplyTo('noreply@zagoriwater.gr', 'Zagori Water.gr');
	$mail->WordWrap = 50; 
	$mail->isHTML(true);
	$mail->Subject = 'Zagori Business Corner';
	
	
	$body = '';
	$body .= '<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">';
	$body .= '<html xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml">';
	$body .= '<head>';
	$body .= '<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />';
	$body .= '<title>Zagori Business Corner Form!</title>		';
	$body .= '</head>		';
	$body .= '<body>';
	$body .= '<h2>Επικοινωνία από το Zagori Business Corner Form</h2>';
	$body .= '<table width="508" border="1">
	<tbody>
    <tr>
	<th width="200" align="left" valign="top"><p>Όνομα/ Επώνυμο:</p></th>
	<td align="left" valign="top">'.$_POST['f1'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Επωνυμία Εταιρείας:</th>
	<td align="left" valign="top">'.$_POST['f2'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Διεύθυνση Έδρας Εταιρείας:<br>      </th>
	<td align="left" valign="top">'.$_POST['f3'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Τηλέφωνο επικοινωνίας:</th>
	<td align="left" valign="top">'.$_POST['f4'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Site εταιρείας: </th>
	<td align="left" valign="top">'.$_POST['f5'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Email: </th>
	<td align="left" valign="top">'.$_POST['f6'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Χώρα ενδιαφέροντος:</th>
	<td align="left" valign="top">'.$_POST['f7'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Είδος προϊόντος:</th>
	<td align="left" valign="top">'.$_POST['f8'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Είδος συσκευασίας:</th>
	<td align="left" valign="top">'.$_POST['f9'].'</td>
    </tr>
    <tr>
	<th width="200" align="left" valign="top">Ενδεικτική ποσότητα: </th>
	<td align="left" valign="top">'.$_POST['f10'].'</td>
    </tr>
	</tbody>
	</table>
	';
	$body .= '</body>';
	$body .= '</html>';
		
	$mail->Body    = $body;

	if($mail->send()) {
		echo 'sente';
	} else {
		echo 'fail';
	}
?>