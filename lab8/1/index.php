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
    <style>
        body
        {
            padding-top: 10px;
            padding-left: 20px;
        }
    </style>
    <title>Lab 8 - 1</title>
</head>
<body>
    <?php
    if (isset($_POST['money'])) {
        $url = "http://10.0.15.20/lab8/restapis/currencyrate";
        $response = file_get_contents($url);
        $result = json_decode($response);
        $from = $_POST['before'];
        $to = $_POST['after'];
        $money = floatval($_POST['money']);
        $from = floatval($result->rates->$from);
        $to = floatval($result->rates->$to);
        $change = number_format($money/$from*$to,2, '.', '');
    }
    echo "<h1> Currency Converter </h1>";
    echo "<form action='' method='post' id='convert'><br>";
    echo "From: <select name='before' id='before'>";
    echo "<option value='THB'" .((isset($_POST['before']) && $_POST['before'] === 'THB') ? 'selected' : '' ).">THB</option>";
    echo "<option value='JPY'" .((isset($_POST['before']) && $_POST['before'] === 'JPY') ? 'selected' : '' ).">JPY</option>";
    echo "<option value='CNY'" .((isset($_POST['before']) && $_POST['before'] === 'CNY') ? 'selected' : '' ).">CNY</option>";
    echo "<option value='SGD'" .((isset($_POST['before']) && $_POST['before'] === 'SGD') ? 'selected' : '' ).">SGD</option>";
    echo "<option value='USD'" .((isset($_POST['before']) && $_POST['before'] === 'USD') ? 'selected' : '' ).">USD</option>";
    echo "</select>";
    echo "<input name='money' type='number' value='".((isset($money)) ? $money : "")."'><br>";
    echo "To: <select name='after' id='after'>";
    echo "<option value='THB'" .((isset($_POST['after']) && $_POST['after'] === 'THB') ? 'selected' : '' ) .">THB</option>";
    echo "<option value='JPY'" .((isset($_POST['after']) && $_POST['after'] === 'JPY') ? 'selected' : '' ) .">JPY</option>";
    echo "<option value='CNY'" .((isset($_POST['after']) && $_POST['after'] === 'CNY') ? 'selected' : '' ) .">CNY</option>";
    echo "<option value='SGD'" .((isset($_POST['after']) && $_POST['after'] === 'SGD') ? 'selected' : '' ) .">SGD</option>";
    echo "<option value='USD'" .((isset($_POST['after']) && $_POST['after'] === 'USD') ? 'selected' : '' ) .">USD</option>";
    echo "</select>";
    echo "<input type='number' value='".((isset($change)) ? $change : "")."' readonly><br>";
    echo "<button class='btn btn-outline-primary'>Convert</button>";
    echo "</form>";
    ?>
</body>
</html>