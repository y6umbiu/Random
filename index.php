<?php

$variants = [
    "Fortnite"=>2,
    "Valorant (Fun)"=>1,
    "M&B 2"=>1,
    "Football Manager 2024"=>1
];


$randomOutcome = array_rand($variants, 1);
echo "Выбранный исход: $randomOutcome";
?>
