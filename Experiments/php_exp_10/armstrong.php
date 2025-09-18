<?php
$number = 153;   
$temp = $number;
$sum = 0;

while ($temp != 0) {
    $digit = $temp % 10;
    $sum += $digit * $digit * $digit;
    $temp = intval($temp / 10);
}
if ($sum == $number) {
    echo "$number is an Armstrong number.";
} else {
    echo "$number is not an Armstrong number.";
}
?>