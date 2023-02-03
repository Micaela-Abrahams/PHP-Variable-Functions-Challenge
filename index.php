<?php
$name = "  Bob  ";

$age = "thirty five";

$job = "plumber";

$carMake = " Toyota";

$carColour = "RED";

$happy = true;

$time = "this many";

// Trim
echo trim($name).'</br>';

// String Replace
$age = str_replace("thirty five", 35, $age);
echo($age).'</br>';

// String to Lowercase
echo strtolower($carColour).'</br>';

// Convert & Replace
$time = str_replace("this many", 9, $time );
echo($time).'</br>';

// Concatenation
$carColour = strtolower($carColour);
$car = $carColour . '' .$carMake;
echo($car).'</br>';

// New Variable (Retirement Age)
$retire = 65;
echo($retire).'</br>';

// Short Story (Sentence)

echo($name."is a". ' '. $job."." .' '."He drives a" . ' '. $car . ' ' ."and works". ' ' .$time . ' ' . "hours a day.". ' '."He is". ' ' .$age .' '. "years old and is" .' '. $retire-$age . ' ' . "years from retirement." . ' '. "He is unhappy with hos life.");





?>