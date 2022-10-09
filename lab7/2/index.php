<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="styles.css" rel="stylesheet">
    <title>Lab 7 - 2</title>
</head>
<body>
    <?php
    echo "<h1> June 2022 </h1>";
    echo "<div>";
    echo "<table>";
    $num_day = 1;
    echo "<tr> <th> Sun </th> <th> Mon </th> <th> Tue </th> <th> Wed </th> <th> Thu </th> <th> Fri </th> <th> Sat </th> </tr>";
    for ($row = 1; $row <= 5; $row++){
        echo "<tr>";
        for ($day_slot = 1; $day_slot <= 7; $day_slot++){
            if (($day_slot == 1 | $day_slot == 2 | $day_slot== 3) & $row == 1 | $num_day > 30){
                echo "<td></td>";
                continue;
            }
            echo "<td> $num_day </td>";
            $num_day++;
        }
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
    ?>
</body>
</html>