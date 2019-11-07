<?php
//demo function class
class Person {
    public $age;
    public function __toString() {
        return "age={$this->age}\n";
    }
}
$p1 = new Person(); $p1->age = 122; echo $p1->age."\n";
$p2 = new Person(); $p2->age = 333; echo $p2->age."\n";
echo $p1;
echo $p2;
// vidu 2
class Point {
    public $name;
    public function __toString() {
        return "Diem {$this->name}";
    }
}
class Line {
    public $A;
    public $B;
    public function __toString() {
        return "Duong thang noi {$this->A} va {$this->B}";
    }
}
$A = new Point(); $A->name='A'; echo $A."\n";
$B = new Point(); $B->name='B'; echo $B."\n";
$dt = new Line(); $dt->A = $A; $dt->B = $B; echo $dt."\n";
//vidu 3
class Point {
    public $name;
    public function __toString() {
        return "Diem {$this->name}";
    }
}
class Line {
@@ -19,9 +22,17 @@ class Line {
    public function __toString() {
        return "Duong thang noi {$this->A} va {$this->B}";
    }
    public function __construct($initial_A, $initial_B) {
        $this->A = $initial_A;
        $this->B = $initial_B;
    }
}
$A = new Point(); $A->name='A'; echo $A."\n";
$B = new Point(); $B->name='B'; echo $B."\n";
$A = new Point('X'); echo $A."\n";
$B = new Point('Y'); echo $B."\n";
$dt = new Line($A, $B); $dt->A = $A; $dt->B = $B; echo $dt."\n";
$dt = new Line(); $dt->A = $A; $dt->B = $B; echo $dt."\n";
$C = new Point('C');
$D = new Point('D');
$dt2 = new Line($C, $D); echo $dt2."\n";
//hackerrank
class Persond{
    public $age;
    public function __construct($initialAge){
        // Add some more code to run some checks on initialAge
        if($initialAge < 0){
            $this -> age = 0;
            print("Age is not valid, setting age to 0.\n");
        } else {
            $this-> age = $initialAge;
        }
    }
    public  function amIOld(){
        // Do some computations in here and print out the correct statement to the console
        if($this->age < 13){
            echo "You are young.\n";
        }elseif($this->age < 18){
            echo "You are a teenager.\n";
        } else {
            echo "You are old.\n";
        }
    }
    public  function yearPasses(){
        // Increment the age of the person in here
        $this->age++;
    }


}

