<?php 
// $numbers = [12, 10, 5, 3, 7, 9];

// foreach($numbers as $number){
//   echo $number;
// }

// for($i = 0; $i<count($numbers); $i++){
//   echo $numbers[$i] . "<br>";
// }

// $i = 0;
// while($i < count($numbers)){
//   echo $numbers[$i] . "<br>";
//   $i++;
// }

// foreach($numbers as $number){
//   echo $num . "<br>";
// }

// function func1() {
//   echo "Funksioni i pare";
//   func2();
// }

// function func2() {
//   echo "Funksioni i dyte";
// }

// func1();

// function mbledhja($number1, $number2){
//   echo $number1 + $number2;
// }

// mbledhja(5, 10);
// $x = 1;

// function localFunc() {
//   global $x;
//   $x = 5;
// }

// localFunc();
// echo $x;

// function returnValue($number, $string) {
//   return $number . $string;
// }

// $returnV = returnValue(100, " ky osht numri njeqind");

// echo $returnV;

// function mbledhja($number1, $number2) {
//   return $number1 + $number2;
// }

// $result = mbledhja(10, 20);

// echo $result . "<br>";

// $result2 = mbledhja(30, $result);

// echo $result2;

// $value;

// function calculate ($number1, $number2, $operator){
//   global $value;
//   switch ($operator) {
//     case "+":
//       $value = $number1 + $number2; 
//       break;
//     case "-":
//       $value = $number1 - $number2; 
//       break;
//     case "*":
//       $value = $number1 * $number2; 
//       break;
//     case "/":
//       $value = $number1 / $number2; 
//       break;
//   }
// }
// calculate (10, 20, "+");
// echo $value;

// function calculate2 ($number1, $number2, $operator){
//   switch ($operator) {
//     case "+":
//       return $number1 + $number2; 
//       break;
//     case "-":
//       return $number1 - $number2; 
//       break;
//     case "*":
//       return $number1 * $number2; 
//       break;
//     case "/":
//       return $number1 / $number2; 
//       break;
//   }
// }

// $value =  calculate2 (10, 20, "+");

// echo calculate2($value, 30, '*');
// $x = 5;
// $y = 1;

// function globalsVar() {
//   $y = 3;
//   $GLOBALS['z'] = 10;
// }

// globalsVar();

// echo $x . "<br>";
// echo $z . "<br>";
// echo $y . "<br>";

// // print_r($GLOBALS);

// echo "<br>";
// echo "<br>";


// Math Methods
// String Methods
// Array Methods

// sylqabesnik@gmail.com
// ardi.kastrat16@gmail.com
// lisgjakova@gmail.com
// berat.shala200@gmail.com

// $number = 100;

// $sqrtValue = sqrt($number);
// echo $sqrtValue;

// $sqrtValue = sqrt($number);
// echo $sqrtValue;

// echo pow(2, 3);

// echo floor(3.3);
// echo ceil(3.3);

// $path = $_SERVER['SCRIPT_FILENAME'];
// echo $_SERVER['SCRIPT_FILENAME'];
// echo "<br>";
// echo $_SERVER['SCRIPT_NAME'];
// echo "<br>";
// $stringValue = "This is a PHP Course";
// echo "<br>";

// $pathArray = explode("/",$path);

// $name = $pathArray[4];

// echo "<br>";
// echo $name;

// echo "<br>";
// $nameArray = explode(".",$name);
// print_r ($nameArray);

$testArr = [2, 'ced', 3, 10];

echo in_array("ced", $testArr);

?>