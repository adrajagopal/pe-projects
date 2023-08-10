<?php

function display($code) {
	echo "<pre>";
		echo "<code>";
			print_r($code);
		echo "</code>";
	echo "</pre>";
}

function showErrors() {
	ini_set('display_errors', 1);
	ini_set('display_startup_errors', 1);
	error_reporting(E_ALL);
}

showErrors();

















?>