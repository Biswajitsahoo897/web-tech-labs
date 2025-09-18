<?php
$planets = array(
    "Mercury" => 0,
    "Venus"   => 0,
    "Earth"   => 1,
    "Mars"    => 2,
    "Jupiter" => 79,
    "Saturn"  => 83,
    "Uranus"  => 27,
    "Neptune" => 14
);

echo "<b>Using For Loop:</b><br>";
$keys = array_keys($planets);
for ($i = 0; $i < count($keys); $i++) {
    echo $keys[$i] . " has " . $planets[$keys[$i]] . " moons<br>";
}

echo "<br><b>Using While Loop:</b><br>";
$i = 0;
while ($i < count($keys)) {
    echo $keys[$i] . " has " . $planets[$keys[$i]] . " moons<br>";
    $i++;
}
?>