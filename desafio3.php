<?php

$tamanho = 100;

/**
 * Preencher o array com valores randomicos de forma aleatorio.
 */
for ($i = 0; $i < $tamanho; $i++) {
	$array[$i] = rand();
}

/* echo '<pre>';
var_dump($array);
echo '</pre>'; */

/**
 * Criar o novo array com os números impares do $array
 */
foreach ($array as $a) {
	if ($a % 2 != 0) {
		$impares[] = $a;
	}
}

/* echo '<pre>';
var_dump($impares);
echo '</pre>'; */

/**
 * Resto da divisão por 5 dos números pares
 */
foreach ($array as $a) {
	if ($a % 2 != 0) {
		$resto[] = $a % 5;
	}
}

/* echo '<pre>';
var_dump($resto);
echo '</pre>'; */
