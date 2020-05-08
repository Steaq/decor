<?php
    require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/phpmailer.php');

		// *** SMTP *** //

		  require_once($_SERVER['DOCUMENT_ROOT'] . '/smartbasket/php/phpmailer/smtp.php');
		  const HOST = 'smtp.yandex.ru';
		  const LOGIN = 'doris-alex@yandex.ua';
		  const PASS = 'Ss123!!?';
		  const PORT = '587';

		// *** /SMTP *** //
   
    const SENDER = 'doris-alex@yandex.ua';
    const CATCHER = 'kokag40395@zaelmo.com';
    const SUBJECT = 'Заявка с сайта';
    const CHARSET = 'UTF-8';
    