<?php

$query = explode('/', $_GET['q']);
if (file_exists('ajax/' . $query[0] . '.inc.php')) {
	include('ajax/' . $query[0] . '.inc.php');
	if (function_exists($query[1])) {
		$response = $query[1]($_POST['params']);
		echo json_encode($response);
	}
}