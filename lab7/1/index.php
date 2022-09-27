<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 7 - 1</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Chakra+Petch:wght@500&display=swap');
        *{
            font-family: 'Chakra Petch', sans-serif;
        }
        hr{
            text-align : left;
            width : 100px;
            margin-left: 0;
        }

    </style>
</head>

<body>
    <form id="calform" action="index.php" method="post">
        กรอกสูตรคูณ : <input type="text" id="inpvalue" name="inpvalue" value="0" />
        <input type="submit" id="submit" value="แสดงตาราง">
    </form>
    <?php
    if (isset($_POST['inpvalue'])) {
        $number = $_POST['inpvalue'];
        $v = intval($number);
        echo "<h1> ตารางสูตรคูณแม่ " . $v . "<br></h1>";
        for ($i = 1; $i <= 12; $i++) {
            echo "<h3>$v   x   $i   =   " . $i * $v . "<hr><br></h3>";
        }
    }
    ?>
</body>

</html>