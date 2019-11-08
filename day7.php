<?php
$_fp = fopen("php://stdin", "r");
/* Enter your code here. Read input from STDIN. Print output to STDOUT */
$n = fgets($_fp);

for($i = 0;$i < $n;$i++ ){
    $s = trim(fgets($_fp));
    $even = '';
    $odd = '';
    for($j = 0;$j < strlen($s);$j++){
        if(($j & 1) == 0){
            $odd .= $s[$j];
        }else{
            $even .= $s[$j];
        }
    }
    printf("%s %s\n", $odd, $even);
}
fclose($_fp);
