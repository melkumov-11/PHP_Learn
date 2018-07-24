<?php
	
	header("Content-Type: text/html; charset=utf-8");

	function sum($a, $b) {
		return $a + $b;
	}

	function difference($a, $b) {
		return $a - $b;
	}

	function multiplication($a, $b) {
		return $a * $b;
	}

	function division($a, $b) {
		return $a / $b;
	}

	function mathOperation($arg1, $arg2, $operation) {
		switch ($operation) {
			case '+':
				return sum($arg1, $arg2);
			case '-':
				return difference($arg1, $arg2);
			case '*':
				return multiplication($arg1, $arg2);
			case '/':
				return division($arg1, $arg2);
		}
	}

	echo mathOperation(5, 9, '*');
?>