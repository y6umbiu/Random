<?php

$variants = [
    "Fortnite",
    "Valorant (Fun)",
    "M&B 2",
    "Football Manager 2024"
];


$randomIndex = rand(0, count($variants) - 1);


$randomOutcome = $variants[$randomIndex];


echo "Выбранный исход: " . $randomOutcome;
?>