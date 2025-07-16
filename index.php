<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
<?php

// phpinfo();

for($x=0; $x < 5; $x++){
	// echo "My first PHP script!\n<br>";
}

$age = 19;



$output = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age >= 40 => "Old adult",
    $age > 19 => "Young adult",
};

// var_dump($output);

$person = "John";
$client = &$person;
// var_dump($client, $person);
function greet(string $name, string $greeting = "Hello", bool $shout  = false)  {
    // echo "$greeting, $name!\n";
}

$numbers = [1, 2, 3, 4, 5];

$squared = array_map(fn($n) => $n * $n, $numbers);
function apply($op, $a, $b) {
    return $op($a, $b);
}
$add = fn($a, $b) => $a + $b;
echo apply($add, 5, 31) . "<br>";
$users = [
    ['name' => 'Alice', 'age' => 30],
    ['name' => 'Bob', 'age' => 25],
    ['name' => 'Charlie', 'age' => 35],
];
function createFilter($key, $value) {
  return fn($item) => $item[$key] === $value; 
}

function factorial(int $n): int {
    if ($n <= 1) {
      return 1;
    }
    return $n * factorial($n - 1);
}
echo "Factorial of 5 is: " . factorial(5) . "\n";
?> 
  </body>
</html>
