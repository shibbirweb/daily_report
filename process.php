<?php 
require_once 'functions.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	
	if (array_key_exists('send-mail', $_POST)) {
		$name = $date = $shift_start = $shift_end = $work_arena = $reporting_to = $log_in_time = $log_out_time = $tasks = $comment = '';

		$name = $_POST['name'];
		$date = $_POST['date'];
		$shift_start = $_POST['shift_start'];
		$shift_end = $_POST['shift_end'];
		$work_arena = $_POST['work_arena'];
		$reporting_to = $_POST['reporting_to'];
		$log_in_time = $_POST['log_in_time'];
		$log_out_time = $_POST['log_out_time'];

		if (array_key_exists('task', $_POST)) {
			$tasks = $_POST['task'];
		}

		$comment = $_POST['comment'];
		
		/*doc generate start*/
		require_once 'generate_doc.php';
		/*doc generate end*/

		/*send email start*/
		//require_once 'send_mail.php';
		/*send email end*/




	}

	exit();
}