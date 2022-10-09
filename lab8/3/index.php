<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Lab 8 - 3</title>
    <style>
        p
        {
            display: -webkit-box;
            overflow: hidden;
            -webkit-box-orient: vertical;
            -webkit-line-clamp: 4; 
        }
        a
        {
            margin-top: 10px;
            margin-right: 20px;
        }
    </style>
</head>
<body>
    <?php
    $url = "https://www.themealdb.com/api/json/v1/1/random.php";      
    $response = file_get_contents($url);
    $result = json_decode($response);
    foreach($result->meals as $data)
    {
        echo'<div class="container" style="display:flex; justify-content: center; align-items:center;">';
        echo'<div class="card" style="width: 55%; padding:50px; border:solid 10px lightgray;">';
        echo"<img class='card-img-top' src='$data->strMealThumb'>";
        echo"<div class='card-body' style='display:flex; flex-wrap:wrap; justify-content:center;'>";
        echo "<h3 style='color:#4F97A3;'>".$data->strMeal."</h3>";
        echo "<hr style='width:100%;'>";
        echo "<p class='card-text'>".$data->strInstructions."</p>";
        echo "<a class='fa fa-refresh btn btn-light' style='font-size:24px' href=''></a>";
        echo "<a class='btn btn-info mt-2' href='$data->strSource'>Learn More</a>";
        echo '</div>';
        echo'</div>';
        echo'</div>';
    }
    ?>
</body>
</html>