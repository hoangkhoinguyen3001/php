<?php
function factorial($n) {
    $f = 1;
    for($i= 1 ; $i <= $n; $i++){
        $f = $f * $i;
    }
    return $f;

}

$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = factorial($n);

fwrite($fptr, $result . "\n");

fclose($stdin);
fclose($fptr);