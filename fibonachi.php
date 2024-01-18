<?php
function fibonacciGenerate($limit) {
    $num = [0, 1];

    for ($a = 2; ; $a++) {
        $res = $num[$a - 1] + $num[$a - 2];
        if ($res >= $limit) {
            break;
        }
        $num[] = $res;
    }

    return $num;
}
$limit = 100;
$h= fibonacciGenerate($limit);

foreach ($h as $num) {
    echo $num . PHP_EOL;
}












