<?php

$insultes = ['gredin', 'tagazou', 'gougnafier', 'mastre'];

$phrase = readline("Entrez une phrase : ");

foreach($insultes as $insulte) {
  $phrase = str_replace($insulte, '******', $phrase);
}

echo $phrase;