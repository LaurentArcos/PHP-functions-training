<?php

$insultes = ['gredin', 'tagazou', 'gougnafier', 'mastre'];
$asterisque = [];

foreach ($insultes as $insulte){

  $asterisque[] = substr($insulte,0,1) . str_repeat('*', strlen($insulte) -1);

} 

$phrase = readline("Entrez une phrase : ");

$phrase = str_replace($insultes, $asterisque, $phrase);

echo $phrase;


// $insultes = ['gredin', 'tagazou', 'gougnafier', 'mastre'];

// $phrase = readline("Entrez une phrase : ");

// foreach($insultes as $insulte) {
//   $replace = str_repeat('*', strlen($insulte));
//   $phrase = str_replace($insulte, $replace, $phrase);
// }

// echo $phrase;