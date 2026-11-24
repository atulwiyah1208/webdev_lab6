<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q3</title>
</head>
<body>

<?php

function calculateArea($length, $width)
{
    $area = $length * $width;
    return $area;
}

$length = 10;
$width = 5;

$result = calculateArea($length, $width);
echo "The area of a rectangle with a length of $length and a width of $width is $result";
?>

</body>
</html>
