<?php
// Step 1: Check if the form was submitted
if (isset($_GET["username"])) {
    $name = $_GET["username"];// Get the input from the form
    echo "You entered: " . $name . "<br><br>";
}
?>

<!-- Step 2: The HTML form -->
<form method="GET">
    <input type="text" name="username" placeholder="Enter your name">
    <button type="submit">Send</button>
</form>