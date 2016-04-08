<?php

	header('Access-Control-Allow-Origin: *');
	header('Access-Control-Allow-Methods: POST');
	header('Access-Control-Max-Age: 1000');

			session_start();

			$_SESSION['user_name']  = $_REQUEST['user'];
			$_SESSION['user_pass']  = $_REQUEST['pass'];
			$_SESSION['first_name'] = $_REQUEST['first_name'];
			$_SESSION['last_name']  = $_REQUEST['last_name'];

?>