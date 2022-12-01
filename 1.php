<?php

$txt = file_get_contents('1.txt');
$elves = explode(PHP_EOL . PHP_EOL, $txt);
$totals = array_map(function($elf) {
    return array_sum(explode(PHP_EOL, $elf));

}, $elves);
rsort($totals);

// a
var_dump($totals[0]);

// b
var_dump($totals[0] + $totals[1] + $totals[2]);
