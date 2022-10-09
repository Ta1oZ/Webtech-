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
    <title>Lab 8 - 2</title>
</head>
<body>
    <?php
    $url = "https://covid19.ddc.moph.go.th/api/Cases/timeline-cases-by-provinces";
    $response = file_get_contents($url);
    $result = json_decode($response);
    $day = rand(1,30);
    $order = 1;
    if ($day < 10)
    {
        $day = "0" . $day;
    } 
    echo "<table class='table table-striped'>";
    echo "<tr>";
    echo "<th> ลำดับ </th>";
    echo "<th> จังหวัด </th>";
    echo "<th> ผู้ติดเชื้อ </th>";
    echo "<th> เสียชีวิต </th>";
    echo "<th> ยอดผู้ป่วยสะสม </th>";
    echo "</tr>";
    foreach ($result as $case)
    {
        if($case->txn_date == "2022-09-$day")
        {
            echo "<tr>";
            echo "<td> $order </td>";
            echo "<td> $case->province </td>";
            echo "<td> $case->new_case </td>";
            echo "<td> $case->new_death </td>";
            echo "<td> $case->total_case </td>";
            echo "</tr>";
            $order++;
        }
    }
    echo "</table>";
    ?>
</body>
</html>