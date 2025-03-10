<?php
// class Car {
//     public $brand;
//     public function drive() {
//         echo "Driving a $this->brand car";
//     }
// }

// $myCar = new Car();
// $myCar->brand = "BMW";
// $myCar->drive();


// class User {
//     public $name;
//     public function __construct($name) {
//         $this->name = $name;
//         echo "Created a User object with name: " . $this -> name;
//     }
//     public function __destruct() {
//         echo "Object destroyed";
//     }
// }
// $user = new User("Alice");

// class Account {
//     private $balance;
//     public function setBalance($amount) {
//         $this->balance = $amount;
//     }
//     public function getBalance() {
//         return $this->balance;
//     }
// }

// class Animal {
//     public function sound() {
//         echo "Animal makes a sound";
//     }
// }
// class Dog extends Animal {
//     public function sound() {
//         echo "Dog barks";
//     }
// }
// class Cat extends Animal {
//     public function sound() {
//         echo "Cat meows!";
//     }
// }
// $dog = new Dog();
// $cat = new Cat();
// $dog->sound();
// $cat->sound();

// interface Animal {
//     public function makeSound();
// }
// class Cat implements Animal {
//     public function makeSound() {
//         echo "Meow!";
//     }
// }
// class Dog implements Animal {
//     public function makeSound() {
//         echo "Bark!";
//     }
// }
// $cat = new Cat();
// $cat->makeSound();
// echo "    ";
// $dog = new Dog();
// $dog -> makeSound();

abstract class Vehicle {
    abstract public function start();
    public function steer() {
        echo "Vehicle is Steering!";
    }
}
class Car extends Vehicle {
    public function start() {
        echo "Car is starting";
    }
    public function steer() {
        echo "Car is Steering!";
    }
}
$car = new Car();
$car->start();
echo "  ";
$car->steer();


?>
