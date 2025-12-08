<?php
// Basic output
echo "Welcome to PHP!";
echo "<br><br>";

// Sequential echo statements
echo "Hello ";
echo "World!";
echo "<br><br>";

// Outputting HTML tags
echo "<h2>This is a heading</h2>";
echo "<p>This is a paragraph</p>";
echo "<br>";

// Variable interpolation inside double quotes
$name = "Yugesh";
echo "My name is $name.";
echo "<br><br>";

// Arithmetic operation + concatenation
$a = 28;
$b = 39;
echo "Sum: " . ($a + $b);
echo "<br><br>";

// String concatenation using dot operator
$first = "Open";
$second = "Source";
echo $first . " " . $second . " Technology";
echo "<br><br>";

// Single-quoted vs double-quoted strings
echo 'This is single-quoted text.<br>';
echo "This is double-quoted text.";
echo "<br><br>";

// Adding HTML line breaks with <br>
echo "Line 1<br>";
echo "Line 2<br>";
echo "Line 3<br>";
echo "<br>";

// Escaping double quotes inside a string
echo "He said: \"PHP is easy!\"";
echo "<br><br>";


// -------------------------------
// COMMENT ENTRY EXERCISE CONTENT
// (Copied exactly from cmb.php)
// -------------------------------

// Declare a variable
$name = "DSA workshop";

/*
 Display the message
 using echo function
*/
echo "Welcome to $name!";

// This is a single-line comment
# This is also a single-line comment

/*
 This is a multi-line comment.
 You can write long descriptions here.
*/
?>
