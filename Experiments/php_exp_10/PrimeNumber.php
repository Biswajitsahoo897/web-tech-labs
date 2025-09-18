<?php
$n = 29;  
$isPrime = true;
if ($n < 2) {
    $isPrime = false;
} else {
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            $isPrime = false;
            break;
        }
    }
}
if ($isPrime) {
    echo "$n is a Prime Number.";
} else {
    echo "$n is not a Prime Number.";
}
?>