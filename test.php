<?php
// >>>>>>variable
// >>>>>>array
// >>>>>>loop
// >>>>>>condition
// >>>>>>function
// >>>>>>class

// localhost

// --------this is variable
$name = "wendell";
$age = 27;

  echo "My name is $name and I am $age years old.";

// this is variable number
  $number = 2;
$number2 = 7;

$answer = $number + $number;
echo $number + $number2; // or echo $answer


  // -----------this is array
    // ..1st
    $a = "wendell";
    echo $a;
    // ..2nd
    $a[1] = "wendell";
    print_r($a);
    // ..3rd
    $a[0] = 1;
    $a[1] = "wendell";
    $a[2] = "december";

    print_r($a);
    // ..4th
     $a[0] = 1;
    $a[1] = "wendell";
    $a[2] = "december";

    echo "<pre>";
    print_r($a);
    echo "</pre>";
    // ..5th
    $a[0] = 1;
    $a[1] = "wendell";
    $a[2] = "december";
    $a[3] = "december2";

    echo "<pre>";
    print_r($a);
    echo "</pre>";

    // ..6th
    $a[0] = 1;
    $a[1] = "wendell";
    $a[2] = "december";
    $a[3] = "december2";
    $a[3] = "december3";
    $a[3] = "december4";

    print_r($a);


// 0
    $fruits = array("apple", "banana", "orange"); // 0,1,2 
    echo $fruits[1]; // Output: banana



    // ------------- This is Loop, there are 2 types of loop

    // ..1st is number
    $number = 0;
    while($number < 20)
{
    $number = $number + 1;
    echo $number; // echo $number . "<br>";
}


// 0
    for ($i = 0; $i < 5; $i++) {
        echo "The number is: $i <br>";
    }



    // -------- This is Condition

    //...1st number
    $number = 30;

    if($number > 20)
{
    // do something
    echo "The number is greater than 20";

}
//...2nd with less than 20
$number = 10;

if($number >= 20)
{
    // do something
    echo "The number is greater than 20";

}

echo " end";

//...3rd with else
$number = 10;

if($number >= 20)
{
    //
    echo "The number is greater than 20";

}else 
{
    echo " end";
}

// ...4th with elseif
$number = 40;

if($number > 20)
{
    // do something
    echo "The number is greater than 20";

}elseif($number < 20)
{
    echo " less than 20";
}else
{
    echo " else";
}


// -----------This is Function

// ...1st
function say_something()
{
    echo "this is a function";
}

say_something();

// ...2nd
function say_something1()
{
    echo " this is a function";
}
function show_something()
{

    echo " this is a function show_something";
}


say_something();
show_something();

    // ...3rd with parameter
    function say_something2($name)
{
    echo "webmaster " . $name;
}

say_something("wendell");

// ...4th with multiple parameter
function say_something3($name, $age)
{
    echo "webmaster " . $name . " age is " . $age;
}

say_something3("wendell", 27);

// ---------- class and function

// ...1st 
class myclass
{
    
    function one($name)
    {
        echo "one $name <br>";
    }

    function two()
    {
        echo "two <br>";
    }
}

$a = new myclass();

$a->one("my name is");
$a->two();

// ...2nd with someone
class myclass2
{
    public $name = "someone ";
    function one()
    {
        echo $this->name;
    }

    function two()
    {
        echo "two <br>";
    }
}

$a = new myclass();

$a->one("");
$a->two();

// ...3rd with echo

class myclass3
{
    public $name = "someone ";
    function one()
    {
        echo $this->name;
    }

    function two()
    {
        echo "two <br>";
    }
}

$a = new myclass();

echo $a->$name;


// ----- connect to db php

$host = "localhost";
$username = "root";
$password = "";
$db = "mybook_db";

$connection = mysqli_connect($host,$username,$password,$db);

$first_name = "wendell";
$last_name = "rosete";

$query = "insert into users (first_name,last_name) values ('$first_name','$last_name')";

mysqli_query($connection,$query);


$host = "localhost";
$username = "root";
$password = "";
$db = "mybook_db";

$connection = mysqli_connect($host,$username,$password,$db);

$query = "select * from users";

$result = mysqli_query($connection, $query);

while($row = mysqli_fetch_array($result))
{
    echo "<pre>";
    print_r($row);
    echo "</pre>";
}

?>