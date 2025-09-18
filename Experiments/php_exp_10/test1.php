<?php
$planets = [
    "Mercury" => 0,
    "Venus" => 0,
    "Earth" => 1,
    "Mars" => 2,
    "Jupiter" => 79,
    "Saturn" => 83,
    "Uranus" => 27,
    "Neptune" => 14
];

// Using for loop
echo "Planets using for loop:\n";
$keys = array_keys($planets);
for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . " has " . $planets[$keys[$i]] . " moons\n";
}

// Using while loop
echo "\nPlanets using while loop:\n";
$i = 0;
while ($i < count($keys)) {
    echo $keys[$i] . " has " . $planets[$keys[$i]] . " moons\n";
    $i++;
}
?>