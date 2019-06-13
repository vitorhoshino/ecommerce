<?php

namespace Hcode;

use Rain\Tpl;

class Mailer {

	const USERNAME = "vitor.hoshino1@gmail.com";
	const PASSWORD = "123123123";
	const NAME_FROM = "Hcode Store";

	private $mail;

	public function __construct($toAddress, $toName, $subject, $tplName, $data = array())
	{

		$config = array(
			"tpl_dir"       =>$_SERVER["DOCUMENT_ROOT"]."/views/email/",
			"cache_dir"     =>$_SERVER["DOCUMENT_ROOT"]."views-cache/"
				   );

		Tpl::configure( $config );

		$tpl = new Tpl;

		foreach ($variable as $key => $value) {
			$tpl->assign($key, $value);
		};

		$html = $tpl->draw($tplName, true);
$this->$this->mail = new \PHPMailer;
//Set who the message is to be sent from
$this->mail->setFrom(Mailer::USERNAME, Mailer::NAME_FROM);
//Set an alternative reply-to address
//$this->mail->addReplyTo('replyto@example.com', 'First Last');
//Set who the message is to be sent to
$this->mail->addAddress($toAddress, $toName);
//Set the subject line
$this->mail->Subject = $subject;
//Read an HTML message body from an external file, convert referenced images to embedded,
//convert HTML into a basic plain-text alternative body
$this->mail->msgHTML($html);
//Replace the plain text body with one created manually
$this->mail->AltBody = 'This is a plain-text message body';
//Attach an image file
//$mail->addAttachment('images/phpmailer_mini.png');


	}
	public function send()
	{

		return $this->mail->send();

	}

}

?>