<!DOCTYPE html>
<html>
  <head>
    
  </head>
  <body>
<?php
for($x=0; $x < 5; $x++){
	echo "My first PHP script!\n<br>";
}

$age = 18;

$output = match (true) {
    $age < 2 => "Baby",
    $age < 13 => "Child",
    $age <= 19 => "Teenager",
    $age >= 40 => "Old adult",
    $age > 19 => "Young adult",
};

var_dump($output);
?> 
    
  </body>
</html>
