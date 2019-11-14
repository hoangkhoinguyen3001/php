<?php
/*$s = fopen("php://stdin", "r");

$inputString = fgets($s);
print("hello world\n");
echo $inputString;*/
/*$sfile = fopen("php://stdin", "r");
$i = 4;
$d = 4.0;
$s = "hackerrank";


$i2 = fgets($sfile);
$d2 = fgets($sfile);
$s2 = fgets($sfile);
echo $i + $i2 ;print("\n");
echo number_format((float) $d + $d2 , 1, '.', '');print("\n");
echo $s." ". $s2;print("\n");*/
/*function solve($mealcost,$tipp,$taxp){
    $tip = $mealcost * $tipp/100;
    $tax = $mealcost * $taxp/100;
    $total = round($mealcost+$tip+$tax);
    echo $total;
}
$sfile = fopen("php://stdin", "r");
/*fscanf($sfile,"%lf\n",$mealcost);
fscanf($sfile,"%d\n",$tipp);
fscanf($sfile,"%lf",$taxp);*/
/*$mealcost = fgets($sfile);
$tipp = fgets($sfile);
$taxp = fgets($sfile);
echo solve($mealcost,$tipp,$taxp);
fclose($sfile);*/
/*$sfile = fopen("php://stdin", "r");
$inputString = fgets($sfile);
if($inputString >= 2 and $inputString <= 5){
    echo "not weird";
}elseif ($inputString >= 6 and $inputString <= 20){
    echo "weird";
}else{
    echo " not weird";
}
fclose($sfile);*/
/*Write a Person class with an instance variable, , and a constructor that takes an integer, , as a parameter. The constructor must assign  to  after confirming the argument passed as  is not negative; if a negative argument is passed as , the constructor should set  to  and print Age is not valid, setting age to 0.. In addition, you must write the following instance methods:

yearPasses() should increase the  instance variable by .
amIOld() should perform the following conditional actions:
If , print You are young..
If  and , print You are a teenager..
Otherwise, print You are old..*/
/*class person{
    public age;
    public function __construct($initialage){
        if($initialage < 0){
            $this->age = 0;
            echo "age isnot valid";
        }else{
            $this->age = $initialage;
        }
}
}*/
function factorial($n) {
    $f = 1;
    for($i= 1 ; $i <= $n; $i++){
        $f = $f * $i;
    }
    return $f;
}

//$fptr = fopen(getenv("OUTPUT_PATH"), "w");

$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $n);

$result = factorial($n);

//fwrite($fptr, $result . "\n");
echo $result;
fclose($stdin);
//fclose($fptr);

?>