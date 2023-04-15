<?php

$list=[];
for($i = 1; $i <= 10; $i++){
    $list[] = $i;
}
$totalNumber = array_sum($list);
echo $totalNumber;
