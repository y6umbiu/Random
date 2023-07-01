<?php

$variants = [
    "Valorant (Fun)",
    "M&B 2",
    "Football Manager 2024",
    "Fortnite"
];

$numbers = range(1, 10); 

$mergedArray = [
    $variants[0] => [$numbers[0], $numbers[1]],
    $variants[1] => [$numbers[2], $numbers[3]],
    $variants[2] => [$numbers[4], $numbers[5]],
    $variants[3] => array_slice($numbers, 6)
];

$randomNumber = $numbers[array_rand($numbers)]; 
$randomVariant = null; 

foreach ($mergedArray as $variant => $range) {
    if (in_array($randomNumber, $range)) {
        $randomVariant = $variant;
        break;
    }
}

echo "Наконецто нормальная игра: $randomVariant";

?>

