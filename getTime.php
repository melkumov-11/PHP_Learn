<?php
	
	header("Content-Type: text/html; charset=utf-8");

	function getTime() {
		$h = date(H);
		$m = date(i);

		if ($h == 1 || $h == 21)
			$hours = ' час';
		if (($h > 1 && $h <= 4) || ($h > 21 && $h <= 23))
			$hours = ' часа';
		if (($h == 0) || ($h >=5 && $h <=20))
			$hours = ' часов';

		if ($m == 1 || $m == 21 || $m == 31 || $m == 41 || $m == 51)
			$minutes = ' минута';
		if (($m >= 2 && $m <= 4) || ($m >= 22 && $m <= 24) || ($m >= 32 && $m <= 34) || ($m >= 42 && $m <= 44) || ($m >= 52 && $m <= 54))
			$minutes = ' минуты';
		if (($m == 0) || ($m >= 5 && $m <= 20) || ($m >= 25 && $m <= 30) || ($m >= 35 && $m <= 40) || ($m >= 45 && $m <= 50) || ($m >= 55 && $m <= 59))
			$minutes = ' минут';

		echo $h . $hours . ' ' . $m . $minutes;
	}

	getTime();
	
?>