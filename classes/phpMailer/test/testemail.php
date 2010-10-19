<?php
/**
 * Simple example script using PHPMailer with exceptions enabled
 * @package phpmailer
 * @version $Id$
 */

require '../class.phpmailer.php';

try {
	//	$mail = new PHPMailer(true); //New instance, with exceptions enabled
	//
	//	$body             = file_get_contents('contents.html');
	//	$body             = preg_replace('/\\\\/','', $body); //Strip backslashes
	//
	////	$mail->IsSMTP();                           // tell the class to use SMTP
	////	$mail->SMTPAuth   = true;                  // enable SMTP authentication
	////	$mail->Port       = 25;                    // set the SMTP server port
	////	$mail->Host       = "mail.yourdomain.com"; // SMTP server
	////	$mail->Username   = "name@domain.com";     // SMTP server username
	////	$mail->Password   = "password";            // SMTP server password
	//
	//	$mail->IsSendmail();  // tell the class to use Sendmail
	//
	//	$mail->AddReplyTo("michael@meinkartenspiel.de","First Last");
	//
	//	$mail->From       = "michael@meinkartenspiel.de";
	//	$mail->FromName   = "Michael Streb";
	//
	//	$to = "michael.streb@michael-streb.de";
	//
	//	$mail->AddAddress($to);
	//
	//	$mail->Subject  = "First PHPMailer Message";
	//
	//	$mail->AltBody    = "To view the message, please use an HTML compatible email viewer!"; // optional, comment out and test
	//	$mail->WordWrap   = 80; // set word wrap
	//
	//	$mail->MsgHTML($body);
	//
	//	$mail->IsHTML(true); // send as HTML
	//
	//	$mail->Send();

	$mail = new PHPMailer(true);
	$mail->IsSendmail();

	$mail->AddReplyTo('michael@meinkartenspiel.de');

	$mail->From      = 'michael@meinkartenspiel.de';
	$mail->FromName  = 'Michael Streb';
	$mail->Subject   = 'Anfrage über Kontaktformular';
	$mail->AddAddress('kontakt@michael-streb.de');

	$mail->AltBody   = $formValues['title'] . ' ' . $formValues['name']['value'] . "\n"
	. 'Tel.: ' . $formValues['phone']['value'] . "\n"
	. 'Mail: ' . $formValues['email']['value'] . "\n"
	. "\n"
	. $formValues['question']['value'];
	$mail->MsgHTML($mail->AltBody);

	$mail->IsHTML(false);

	$mail->WordWrap = 80;
	$mail->Send();

	echo 'Message has been sent.';
} catch (phpmailerException $e) {
	echo $e->errorMessage();
}
?>