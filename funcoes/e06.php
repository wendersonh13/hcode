<?php

	$pessoa = array(
		'nome' => 'João',
		'idade' => 20

	);

	foreach ($pessoa as $value) {

		if (gettype($value) === 'interge') $value += 10;

		echo $value. '<br>';
	}

print_r($pessoa)

?>