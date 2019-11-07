<?php
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);
if($N % 2 != 0){
    echo "Weird";
}elseif(($N % 2 == 0) And ($N >= 2 and $N <= 5)){
    echo "Not Weird";
}elseif(($N % 2 == 0) and ($N >= 6 and $N <= 20)){
    echo "Weird";
}else{
    echo "Not Weird";
}
fclose($stdin);