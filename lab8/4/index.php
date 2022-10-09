<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx"
      crossorigin="anonymous"/>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa"
      crossorigin="anonymous"
    ></script>
    <title>Lab 8 - 4</title>
    <style>
    img{
        width:50%;
    }
    p{
        font-size:20px;
    }
    .col-lg-8{
        display:flex;
        justify-content:flex-end;
        align-items:center;
        background-color:white;
    }
    @media screen and (max-width:991px){
        .col-lg-8{
            display:flex;
            justify-content:center;
            align-items:center;
            background-color:pink;
        }
    }
</style>
</head>
<body>
    <div class="box">
        <?php
        $url = "http://10.0.15.20/lab8/restapis/10countries";      
        $response = file_get_contents($url);
        $result = json_decode($response);
        foreach($result as $data)
        {
          $nation = count($data->borders);
          echo '<div class="row m-5">';
          echo '<div class="col-lg-4" style="background-color:white; padding:40px;">';
          echo "<p>Name : <b>$data->name</b></p>";
          echo "<p>Capital : $data->capital</p>";
          echo "<p>Population: $data->population</p>";
          echo "<p>Region : $data->region</p>";
          echo "<p>Location : ".$data->latlng[0]." ".$data->latlng[1]."</p>";
          echo "<p>Borders : ";
          for($i =0;$i<$nation;$i++)
          {
            echo $data->borders[$i]." ";
          }
          echo "</p>";
          echo '</div>';
          echo '<div class="col-lg-8 p-3">';
          echo"<img src='$data->flag'>";
          echo '</div>';
          echo '</div>';
        }
        ?>
    </div>
</body>
</html>