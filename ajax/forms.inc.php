<?php

function sendForm($params) {
	require_once('ajax/validation.inc.php');
	require_once('classes/phpMailer/class.phpmailer.php');
	if (isValid($params)) {
		//    var_dump($params);
		try {
			$func = 'prepare' . ucfirst($params['formName']['value']) . 'MailData';
			$data = $func($params);
			$tempRet = $data;
			$mail = new PHPMailer(true);
			$mail->IsSendmail();
			$mail->CharSet = 'utf-8';
			$mail->IsHTML(false);
			$mail->WordWrap = 80;

			$mail->AddReplyTo($data['replyTo']);
			$mail->From      = $data['from'];
			$mail->FromName  = $data['fromName'];
			$mail->Subject   = $data['subject'];
			$mail->AddAddress($data['adress']);
			 
			$mail->AltBody   = $data['altBody'];
			$mail->MsgHTML($data['msgHTML']);

			$mail->Send();

			return array(
        'todo' => 'loadPage',
        'page' => 'contact #contact-thanks'
        );
		} catch (phpmailerException $e) {
			return array(
        'todo' => 'loadPage',
        'page' => 'contact #contact-error'
        );
		}
	}
}

function prepareContactFormMailData($formValues) {
	$gender = array('male' => 'Herr', 'female' => 'Frau');
	$altBodyQuestion  = $formValues['question']['value'];
	$msgHTMLQuestion  = nl2br($formValues['question']['value']);
	return array(
	 'replyTo' => $formValues['email']['value'],
	 'from' => $formValues['email']['value'],
	 'fromName' => $formValues['name']['value'],
	 'subject' => 'Anfrage über Kontaktformular',
	 'adress' => 'kontakt@michael-streb.de',
	 'altBody' => $gender[$formValues['title']['value']] . ' ' . $formValues['name']['value'] . "\n"
	 . 'Tel.: ' . $formValues['phone']['value'] . "\n"
	 . 'Mail: ' . $formValues['email']['value'] . "\n"
	 . "\n"
	 . $altBodyQuestion,
	 'msgHTML' => $gender[$formValues['title']['value']] . ' ' . $formValues['name']['value'] . '<br />'
	 . 'Tel.: ' . $formValues['phone']['value'] . '<br />'
	 . 'Mail: ' . $formValues['email']['value'] . '<br />'
	 . '<br />'
	 . $msgHTMLQuestion,
	 );
}