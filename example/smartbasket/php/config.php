<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . './example/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		  require_once($_SERVER['DOCUMENT_ROOT'] . './example/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'stmp.mail.ru';
		  const LOGIN = 'zzzelen01@mail.ru';
		  const PASS = 'Ss123!!?';
		  const PORT = '465';

		// *** /SMTP *** //
   
    const SENDER = 'zzzelen01@mail.ru';
    const CATCHER = 'kokag40395@zaelmo.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    