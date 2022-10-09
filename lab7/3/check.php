<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7 - 3</title>
</head>
<body>
    <?php
    if (isset($_POST['name'])){
        $name = $_POST['name'];
        if (strlen($name) > 5){
            echo "<div class='name'> <h1> Name: $name  </h1></div>"; 
        }
        else{
            echo "<div class='error' style='color : red;' > <h1> Name: ERROR </h1></div>";
        }
    }
    if (isset($_POST['address'])){
        $address = $_POST['address'];
        if (strlen($address) > 5){
            echo "<div class='pass'> <h1> Address: $address  </h1></div>"; 
        }
        else{
            echo "<div class='error' style='color : red;' > <h1> Address: ERROR </h1></div>";
        }
    }
    if (isset($_POST['age'])){
        $bage = $_POST['age'];
        $age = intval($bage);
        if ($age <= 0){
            echo "<div class='pass' style='color : red;' > <h1> Age: ERROR </h1></div>"; 
        }
        else{
            echo "<div class='error'> <h1> Age: $age </h1></div>";
        }
    }
    if (isset($_POST['job']))
    {
        $job = $_POST['job'];
        if (strlen($job) > 5){
            echo "<div class='pass'> <h1> Profession: $job </h1></div>"; 
        }
        else{
            echo "<div class='error' style='color : red;' > <h1> Profession: ERROR </h1></div>";
        }
    }
    if (isset($_POST['status'])){
        $status = $_POST['status'];
        if ($status){
            echo "<div class='pass'><h1> Status: $status </h1></div>"; 
        }
    }
    else{
        echo "<div class='error' style='color : red;' > <h1> Status: ERROR </h1></div>";
    }
    ?>
</body>
</html>