<?php
if (isset($_POST["name"], $_POST["weight"], $_POST["height"])) {
	$name = htmlspecialchars($_POST["name"]);
	$weight = floatval($_POST["weight"]);
	$height = floatval($_POST["height"]);
	if (($weight <= 0 || $weight >= 500) || ($height <= 0 || $height >= 3)) {
		echo "invalid input values";
		exit;
	}
	$bmi = $weight / ($height * $height);
	if ($bmi < 18.5) {
		$note = "Underweight";
	} elseif ($bmi < 25) {
		$note = "Normal weight";
	} elseif ($bmi < 30) {
		$note = "Overweight";
	} else {
		$note = "Obesity";
	}
	echo "{$name} your bmi is " . number_format($bmi, 2) . "<br>{$note}.";
} else {
	echo "data not received";
}
