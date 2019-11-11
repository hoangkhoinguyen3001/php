<?php
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fscanf($stdin, "%[^\n]", $arr_temp);

$arr = array_map('intval', preg_split('/ /', $arr_temp, -1, PREG_SPLIT_NO_EMPTY));
$array = array_reverse($arr, true);

foreach($array as $key=>$value){
    print_r($value." ");
}
fclose($stdin);
