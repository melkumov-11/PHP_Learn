<?php

	function getURLAddress($str) {
		$symbols = ['а'=>'a', 'б'=>'b', 'в'=>'v', 'г'=>'g', 'д'=>'d', 'е'=>'e', 'ё'=>'yo', 'ж'=>'zh', 'з'=>'z', 'и'=>'i', 'й'=>'j', 'к'=>'k', 'л'=>'l', 'м'=>'m', 'н'=>'n', 'о'=>'o', 'п'=>'p', 'р'=>'r', 'с'=>'s', 'т'=>'t', 'у'=>'u', 'ф'=>'f', 'х'=>'h', 'ц'=>'tc', 'ч'=>'ch', 'ш'=>'sh', 'щ'=>'shch', 'ъ' => '"', 'ы'=>'y', 'ь' => '\'', 'э'=>'e', 'ю'=>'yu', 'я'=>'ya', ' ' => '_'];

		$text = strtr($str, $symbols);
		echo $text;
	}

	getURLAddress('изучайте английский язык');

?>