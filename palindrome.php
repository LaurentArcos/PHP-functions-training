<?php

while(true) {
  $mot = readline('Entre votre mot : ');
  if ($mot === '') {
    exit('fin du programme');
  }
  $reverse = strtolower(strrev($mot));
  
  if (strtolower($mot) === $reverse) {
    echo "$mot  est un palindrome !";
  } else {
    echo "$mot n'est pas un palindrome !";
  }
}
