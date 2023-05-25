<?php
for ($i = 1; $i <= 10; $i++) {
    for ($j = 1; $j <= 10; $j++) {
        $tich = $i * $j;
        echo "$i x $j = $tich<br>";
    }
    echo "<br>";
}
function sumTong($n) {
    $sum = 0;
    for ($i = 1; $i <= $n; $i++) {
        $sum += $i;
    }
    return $sum;
}
$n = 5;
echo sumTong($n);

function isEven($number) {
    if ($number % 2 == 0) {
        return true;
    } else {
        return false;
    }
}
$Number = 6;
if (isEven($Number)) {
    echo "$Number is even";
} else {
    echo "$Number is odd";
}

function containsWord($string, $word) {
    $position = strpos($string, $word);
    if ($position !== false) {
        return true;
    } else {
        return false;
    }
}
$string = "Hello World";
$word = "World";
if (containsWord($string, $word)) {
    echo "Chuỗi có chứa từ '{$word}'.";
} else {
    echo "Chuỗi không có chứa từ '{$word}'.";
}
?> 