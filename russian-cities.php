<?php

	$rf = ['Московская область' => ['Москва', 'Зеленоград', 'Клин'], 'Ленинградская область' => ['Санкт-Петербург', 'Всеволожск', 'Павловск', 'Кронштадт']];
	foreach ($rf as $obl => $value) {
		echo $obl . '<br>';
		foreach ($value as $city) {
			if (mb_substr($city, 0, 1, "UTF-8") == 'К') {
				echo '<li>' . $city. '</li>';
			}
		}
	}

?>