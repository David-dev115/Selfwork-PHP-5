<?php


// Selfwork PHP 5
// Dato un array di numeri a scelta, scrivere un programma che calcoli la media solo dei numeri pari contenuti all’interno dell’array


$arr = [15, 20, 85, 6, 51, 100, 63, 2];

// print_r($arr);


$counter = 0;
$sum = 0;


foreach ($arr as $numero) {
    if($numero % 2 == 0) {
        $sum += $numero;
        $counter ++;
    }
}

// echo $sum . "\n";
// echo $counter;

$media_pari = $sum/$counter;

echo $media_pari;

// verifica
// 20 + 6 + 100 + 2 = 128/4 = 32

