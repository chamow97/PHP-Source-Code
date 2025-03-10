<?php
//        [index 0,  index 1, index 2, index 3, index 4]
$fruits = ["apple", "banana", "orange", "grapes", "strawberry"];

// foreach($fruits as $fruit) {
//     echo "$fruit ";
// }

// for($i = 0; $i < 5; $i++) {
//     echo "$fruits[$i] ";
// }

// $people = array(
//     array("name" => "George", "place" => "Washington", "age" => 25, "gender" => "male"),
//     array("name" => "John", "place" => "New York", "age" => 32, "gender" => "male")
// );

// echo $people[1]["place"];


$numbers = array(45,23,1,5,1445,6,3,6,7,77,4343,2,555,7,4423232);
$numbersData = array(34,36,34,343,6,7,23,2,23,23,232,5,56,7,4,343);

// sort($numbers);
// rsort($numbers);
// asort($numbers);


// foreach($numbers as $number) {
//     echo "$number ";
// }

// $results = array_merge($numbers, $numbersData);


// foreach($results as $result) {
//     echo "$result ";
// }

echo array_search(4423232, $numbers);

?>
