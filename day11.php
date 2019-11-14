<?php


$stdin = fopen("php://stdin", "r");
fscanf($stdin, "%d\n", $n);

$d = decbin(trim($n));
$count = 0;

for ($i = 0; $i < strlen($d); $i++) {
    if ($d[$i] > 0) {
        $count++;
    } else {
        break;
    }
}

echo $count;
fclose($stdin);
