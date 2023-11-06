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
	$page = basename(parse_url($url, PHP_URL_PATH));

	if ($page === $pageName) {
			return 'active';
	}
}

//returns the query string behind the ?
function queryString() {
	return $_SERVER['QUERY_STRING'];
}

// creates an <a> with text and the external-link icon inside it, preformatted
function createLinkOut($linkURL, $linkCopy) {
	$url = $linkURL;
	$copy = $linkCopy;


	include(getFile('components/external-link/template.php'));
}           

