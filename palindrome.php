<?php

$mot = readline("entrez un mot");

$reverse = strtolower(strrev($mot));

if (strtolower($mot) === $reverse) {
  echo "$mot  est un palindrome !";
} else {
  echo "$mot n'est pas un palindrome !";
}
