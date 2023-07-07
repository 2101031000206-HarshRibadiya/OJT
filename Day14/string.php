<?php
echo strlen("Hello world!");
echo '<br><br>';

echo str_word_count("Hello world!");
echo '<br><br>';

echo strrev("Hello world!");
echo '<br><br>';

echo strpos("Hello world!", "world"); 
echo '<br><br>';

echo str_replace("world", "Dolly", "Hello world!");
echo '<br><br>';

$bar = 'HELLO WORLD!';
$bar = lcfirst($bar);
echo $bar;
echo '<br><br>';

$bar1 = 'hello world !';
$bar1 = ucfirst($bar1);
echo $bar1;
echo '<br><br>';



$text   = "\t\tThese are a few words :) ...  ";
// $binary = "\x09Example string\x0A";
// $hello  = "Hello World";
// var_dump($text, $binary, $hello);

echo $text;
$trimmed = trim($text);
// var_dump($trimmed);
echo '<br><br>';
echo $trimmed;
?> 