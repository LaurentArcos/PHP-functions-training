<?php
$notes = [10,12,25,30];
$notes[] = 16;
array_push($notes, 3, 5, 18);
$sum = array_sum($notes);
$count = count($notes);
echo "Vous avez " . round($sum / $count, 2) . " de moyenne";


