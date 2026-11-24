<!DOCTYPE html>
<html lang="en">
<head>
    <title>Lab 6 Q2</title>
</head>
<body>

<?php

$students = [
    [
        'name' => 'Rabbiatul Adawiyah',
        'program' => 'BIP',
        'age' => 21
    ],
    [
        'name' => 'Ahmad Faizal',
        'program' => 'BIS',
        'age' => 20
    ],
    [
        'name' => 'Anis Solehah',
        'program' => 'BIM',
        'age' => 22
    ]
];
?>

<table border="1">
    <tr>
        <th>Name</th>
        <th>Program</th>
        <th>Age</th>
    </tr>

    <?php
    foreach ($students as $student) {
        echo "<tr>";
        echo "<td>" . $student['name'] . "</td>";
        echo "<td>" . $student['program'] . "</td>";
        echo "<td>" . $student['age'] . "</td>";
        echo "</tr>";
    }
    ?>
</table>

</body>
</html>
