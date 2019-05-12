<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
// TASK 2
echo "Hello World!";
$one = "Twinkle ";
$two = "star";
echo "</br>";
echo "</br>";


echo $one . $two;


// TASK 3
$x=10;
$y=7;
echo "</br>";
echo "</br>";


echo "$x + $y = " . ($x + $y);
echo "</br>";

echo "$x - $y = " . ($x - $y);
echo "</br>";

echo "$x * $y = " . ($x * $y);
echo "</br>";

echo "$x / $y = " . ($x / $y);
echo "</br>";

echo "$x % $y = " . ($x % $y);
echo "</br>";
echo "</br>";

// TASK 4
$number = 8;
echo "The value is now $number";
echo "</br>";
$number = $number + 2;
echo "The value is now". " " . $number;
echo "</br>";
$number = $number - 4;
echo "The value is now". " " . $number;
echo "</br>";
$number = $number * 5;
echo "The value is now". " " .$number;
echo "</br>";
$number = $number / 3 ;
echo "The value is now". " " .$number;
echo "</br>";
$number = ++$number;
echo "The value is now". " " .$number;
echo "</br>";
$number = --$number;
echo "The value is now". " " .$number;
echo "</br>";
echo "</br>";


// TASK 5
$something = "asdfg";

echo var_dump($something);
echo "</br>";
$something = 233;
echo var_dump($something);
echo "</br>";
$something = null;
echo var_dump($something);
echo "</br>";
echo "</br>";



// TASK 6
$around="around";
echo "what goes $around comes $around";
//https://www.youtube.com/watch?v=IC8qPpnD0uE
echo "</br>";
echo "</br>";




// TASK 7
$whatsit = "2";
echo "Value is". " " .gettype($whatsit). ".";
echo "</br>";
$whatsit = true;
echo "Value is". " " .gettype($whatsit). ".";
echo "</br>";
$whatsit = 12;
echo "Value is". " " .gettype($whatsit). ".";
echo "</br>";
$whatsit = null;
echo "Value is". " " .gettype($whatsit). ".";
echo "</br>";


?>
</body>
</html>