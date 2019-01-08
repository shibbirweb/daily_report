<?php 
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

	if (array_key_exists('send-mail', $_POST) || array_key_exists('generate', $_POST)) {

		$name = $date = $shift_start = $shift_end = $work_arena = $reporting_to = $log_in_time = $log_out_time = $tasks = $comment = $mail_from = $send_mail_permission = $mail_from_password = $mail_subject = $mail_to = $email_body = $default_mail = '';

		$name = $_POST['name'];
		$date = $_POST['date'];
		$shift_start = $_POST['shift_start'];
		$shift_end = $_POST['shift_end'];
		$work_arena = $_POST['work_arena'];
		$reporting_to = $_POST['reporting_to'];
		$log_in_time = $_POST['log_in_time'];
		$log_out_time = $_POST['log_out_time'];

		$send_mail_permission = $_POST['send_mail_permission'];
		$default_mail = $_POST['default_mail'];


		/*mail fields starts*/

		if (array_key_exists('send_from_mail', $_POST)) {
			$mail_from = $_POST['send_from_mail'];
		}

		if (array_key_exists('send_from_mail_password', $_POST)) {
			$mail_from_password = $_POST['send_from_mail_password'];
		}

		if (array_key_exists('mail_to',$_POST)) {
			$mail_to = $_POST['mail_to'];
		}

		if (array_key_exists('mail_subject', $_POST)) {
			$mail_subject = $_POST['mail_subject'];
		}

		if (array_key_exists('email_body', $_POST)) {
			$email_body = $_POST['email_body'];
		}

		if ($default_mail == 1){
			$mail_from = 'shibbirtestmail@gmail.com';
			$mail_from_password = '1Q2W3E4R5T';
		}

		/*mail fields end*/

		if (array_key_exists('task', $_POST)) {
			$tasks = $_POST['task'];
		}

		$comment = $_POST['comment'];

		/*doc generate start*/
		require_once 'generate_doc.php';
		/*doc generate end*/



        if($send_mail_permission == 1){
            /*send email start*/
            require_once 'send_mail.php';
            /*send email end*/
        }



	}
}