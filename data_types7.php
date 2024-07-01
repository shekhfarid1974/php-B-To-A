<?php

$name = "Farid";
$income = "200";

/* php data types

1.String
2.Integer
3.Float
4.Boolean
5.Object
6.Array
7.NULL

*/

// string - sequence of characters

$name ="farid";
$friend = "Rohan";

echo "$name er friend is $friend";
echo "<br>";

// Integer - non decimal number

$income = "455";
$debts = "-655";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// Float - Decimal point number

$income = "344.5";
$debts = "-44.5";
echo $income;
echo "<br>";
echo $debts;
echo "<br>";

// boolean - can be either true or false

$x = true;
$is_friend = false;
echo var_dump($x);
echo "<br>";
echo var_dump($is_friend);

// Object - Instances of classes
//Employee is a class -----> farid can be object

// Array - used to store multiple values in a single variable
$friends = array("farid","rafi","azad","zeem","rajib","kamrul"); // farid,rafi,azad eigula holo string array er vitore
echo var_dump($friends);
echo "<br>";
echo ($friends)[0];
echo "<br>";
echo ($friends)[1];
echo "<br>";
echo ($friends)[2];
echo "<br>";
echo ($friends)[3];
echo "<br>";
echo ($friends)[4];
echo "<br>";

// NULL

$name = NULL;
echo var_dump($name);
?>