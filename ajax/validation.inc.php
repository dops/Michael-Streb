<?php

function isValid($values) {
	require_once('includes/variables.inc.php');
	$responseArray = array();
	if (is_array($values)) {
		foreach ($values as $name => $value) {
			if (is_array($value['value'])) {
				$responseArray[$name] = isValid($value['value']);
			} else {
				if ((strlen($value['value']) == 0 and !$value['required']) or (ValidationExpressions::isValid($type, $value['value']))) {
					//  	    if (ValidationExpressions::isValid($name, $value['value'])) {
					$responseArray[$name] = true;
				} else {
					$responseArray[$name] = false;
				}
			}
		}
	}
	return $responseArray;
}