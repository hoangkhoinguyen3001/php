<?php
$i = 4;
$d = 4.0;
$s = "HackerRank ";
// Read and save an integer, double, and String to your variables.
$handle = fopen("php://stdin", "r");
$i2 = fgets($handle);
$d2 = fgets($handle);
$s2 = fgets($handle);
// Print the sum of both integer variables on a new line.
printf("%d\n", $i + $i2);
// Print the sum of the double variables on a new line.
printf("%.1f\n", $d + $d2);
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
print($s.$s2."\n");
//use echo to print
echo $i + $i2;printf("\n");
// Print the sum of the double variables on a new line.
echo number_format((float)$d + $d2, 1, '.', '');printf("\n");
// Concatenate and print the String variables on a new line
// The 's' variable above should be printed first.
echo "$s$s2";
fclose($handle);


