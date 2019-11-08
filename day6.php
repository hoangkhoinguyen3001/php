<?php
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

fclose($stdin);
for($i = 1;$i <= 10;$i++){
    $k = $n * $i;
    echo "$n x $i = $k \n" ;

}