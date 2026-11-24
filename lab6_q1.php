<!DOCTYPE html>
<html lang="en">

<head>
    <title>Lab 6 Q1</title>
</head>

<body>
    <?php
    $name = "Rabbiatul Adawiyah Binti Mad Azli";
    $matricNum = "AI240073";
    $course = "Bachelor of Computer Science (Software Engineering) with Honours";
    $year = "Year 3";
    $address = "DT17, JLN DURIAN TUNGGAL GEMILANG 2, TMN DURIAN TUNGGAL GEMILANG, 76100 DURIAN TUNGGAL, MELAKA";
    ?>
    <table border="1">
        <tr>
            <td>Name</td>
            <td><?php echo "$name"; ?></td>
        </tr>
        <tr>
            <td>Matric Number</td>
            <td><?php echo "$matricNum"; ?></td>
        </tr>
        <tr>
            <td>Course</td>
            <td><?php echo "$course"; ?></td>
        </tr>
        <tr>
            <td>Year</td>
            <td><?php echo "$year"; ?></td>
        </tr>
        <tr>
            <td>Address</td>
            <td><?php echo "$address"; ?></td>
        </tr>
    </table>
</body>
</html>