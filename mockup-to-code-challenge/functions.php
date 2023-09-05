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

//Note - this function calculates the dirname based on where this function lives in the directory - probably??
function getFile($path) {
	return dirname(__FILE__) . '/' . $path;
}


//checks if current page is active page - use to output class for CSS
function ifActivePage($pageName) {
	$page = "goals";

	if (isset($_GET['page'])) {
		$page = $_GET['page'];				
	}

	if ($page === $pageName) {
			return 'active-page';
	}
}

//returns the query string behind the ?
function queryString() {
	return $_SERVER['QUERY_STRING'];
}


