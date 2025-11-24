<?php
echo "
<!DOCTYPE html>
<html lang='en'>
<head>
    <title>Document</title>
</head>
<body>
    <script>
        let x = 10;
        let y = 20;
        let sum = x + y;
        document.write('The sum of ' + x + ' and ' + y + ' is: ' + sum+'<br>');
        // assignment operators
        let a = 5;
        a += 3; // equivalent to a = a + 3
        document.write('<br>Value of a after += 3: ' + a);
        // comparison operators
        let p = 10;
        let q = 20;
        document.write('<br>Is p less than q? ' + (p < q));
        // logical operators
        let isAdult = true;
        let hasID = false;
        document.write('<br>Can enter club: ' + (isAdult && hasID));
        
        </script>
</body>
</html>";
?>