<?php

$name = "My name is Farid";
echo $name;
echo '<br>';


echo "The length of my strings is ". strlen($name); // lenght er jonno strlen function if you want to add two string together then use . dot

echo "<br>";
echo str_word_count($name);// for word count use str_word_count function
echo "<br>";
echo strrev($name);// strrev for reverse string
echo "<br>";
echo strpos($name,"is");// string er vitore kichu search korar jonno strpos use korte hoy
echo "<br>";
echo str_replace("Farid","Nirob", $name);// string replace korar jonno str_replace use korte hoy
echo "<br>";
echo str_repeat($name,4);// string repeat korar jonno str_repeat use korte hoy
echo "<br>";
echo "<pre>";// <pre> tag html line er vitore ja ache sob show kore dibe space soho
echo rtrim("     this is a good boy    ");// rtrim use kore holo right side theke space soranor jonno
echo "<br>";
echo ltrim("    this is a good boy    ");// ltrim use kore holo left side theke space soranor jonno
echo "</pre>";
?>