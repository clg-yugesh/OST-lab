<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>JS Operator Exercises</title>
    <style>
        body { font-family: Arial; font-size: 18px; }
        b { color: blue; }
    </style>
</head>
<body>

<script>
    // 1. Arithmetic Operators
    let a = 20, b = 10;
    document.write('<b>Arithmetic Operators</b><br>');
    document.write('a + b = ' + (a + b) + '<br>');
    document.write('a - b = ' + (a - b) + '<br>');
    document.write('a * b = ' + (a * b) + '<br>');
    document.write('a / b = ' + (a / b) + '<br>');
    document.write('a % b = ' + (a % b) + '<br>');
    document.write('a ** 2 = ' + (a ** 2) + '<br><br>');

    // 2. Assignment Operators
    let x = 10;
    document.write('<b>Assignment Operators</b><br>');
    x += 5; document.write('x += 5 => ' + x + '<br>');
    x -= 2; document.write('x -= 2 => ' + x + '<br>');
    x *= 3; document.write('x *= 3 => ' + x + '<br>');
    x /= 2; document.write('x /= 2 => ' + x + '<br>');
    x %= 4; document.write('x %= 4 => ' + x + '<br><br>');

    // 3. Comparison Operators
    document.write('<b>Comparison Operators</b><br>');
    document.write('5 == \"5\" => ' + (5 == '5') + '<br>');
    document.write('5 === \"5\" => ' + (5 === '5') + '<br>');
    document.write('10 != 5 => ' + (10 != 5) + '<br>');
    document.write('8 > 3 => ' + (8 > 3) + '<br>');
    document.write('3 < 4 => ' + (3 < 4) + '<br>');
    document.write('5 >= 5 => ' + (5 >= 5) + '<br>');
    document.write('5 <= 6 => ' + (5 <= 6) + '<br><br>');

</script>

</body>
</html>";
?>