<?php
// try {
//     if(!file_exists("index.php")) {
//         throw new Exception("File not Found!");
//     }
// } catch(Exception $e) {
//     echo "Error -> " . $e -> getMessage();
// }

// function divide($a, $b) {
//     if($b == 0) {
//         throw new Exception("Division by zero not allowed!");
//     }
//     return $a / $b;
// }

// try {
//     echo divide(30, 10);
// } catch(Exception $e) {
//     echo "Division failed due to: " . $e -> getMessage();
// }

// class DivisionByZeroException extends Exception {}


// function divide($a, $b) {
//     if($b == 0) {
//         throw new DivisionByZeroException("Division by zero not allowed!");
//     }
//     return $a / $b;
// }

// try {
//     echo divide(30, 0);
// } catch(DivisionByZeroException $e) {
//     echo "Division failed due to: " . $e -> getMessage();
// }


$arr = ["Fruits", "Veggies"];
// print_r($arr);
var_dump($arr);

?>
