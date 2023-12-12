<?php

$test = "testing";

if($test == "testing"){
    echo "the ans is correct <br>";
}else{
    echo "the ans is not correct";
}
// * Example:- 1
function greaterNumber($one, $two ,$three){
$numberOne = "$one";
$numberTwo = "$two";
$numberThree = "$three";

if( $numberOne > $numberOne && $numberTwo > $numberThree){
    echo "$numberOne is greater than $numberTwo and $numberThree";
}elseif( $numberTwo > $numberOne && $numberTwo > $numberThree){
    echo "$numberTwo is greater than $numberOne and $numberThree";
}else{
    echo "$numberThree is greater than $numberOne and $numberTwo <br>";
}
}

greaterNumber(50,100,150);

// * Examle:- 2

function loginCheck($userName,$userPass){
    $name = $userName;
    $pass = $userPass;

if($name == "tanim"){
    if($pass == "12345"){
        echo "You have successfully logged in. <br>";
    }else{
        echo "Your password is wrong";
    }
}else{
    echo "the user name is wrong";
}
}

loginCheck("tanim","12345");

// * Example:-3

function numberChecker($num){
    $number = $num;

if( $number % 2 ==0){
    echo "$number is a even number";
}else{
    echo "$number is a odd number <br>";
}
}

numberChecker(125);

// * Example:-4

$num = "70";
echo $num % 2 == 0? "even number <br>" : "odd number";

// * Example:-5 

$value = "60";

switch( $value){
    case 60:
        echo "the number is a even number <br>";
    break;
    case 45:
        echo "the number is a odd number";
    break;    
}

// * Array
// Indexed arrays

$test = [20, "number", "ronaldo", 7,"<br>"];
echo "<pre>";
// var_dump($test);
print_r($test[2]);
echo "</pre>";

// Associative arrays

$testA = [
    "Name" => "Tanim",
    "Age" =>   23,
    "Favourite Sports" => "Football",
    "Favourite Music Band" => "Linkin park",
    "Favourite Author" => "Saradindu Bandopadhyay"
];
echo "<pre>";
print_r($testA);
echo "</pre>";

// Multidimensional arrays

$testM =[
    "Name" =>"Tanim",
    "Age" => 23,
    "Education" => [
        "JSC" => "2016",
        "SSC" => "2018",
        "Diploma" => "2022"
    ],
    "SocialMedia" => [
        "Facebook" => "Shahidul Islam Tanim",
        "Instagram" =>" shahidul_tanim"
    ],
    ];
echo "<pre>";
print_r("My name is ". " " . $testM["Name"]. ".". "I'm"." ". $testM["Age"]." ". "years old");
echo "</pre>";





