<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $from_currency = $_POST['from_currency'];
    $to_currency = $_POST['to_currency'];
    $result = 0;
    if ($from_currency == "VND") {
        if ($to_currency == "usd") {
            $result = $amount / 24000;
        } else if ($to_currency == "VND") {
            $result = $amount;
        }
    }
    else if ($from_currency == "usd") {
        if ($to_currency == "VND") {
            $result = $amount * 23000;
        }
        else if ($to_currency === "usd") {
            $result = $amount;
        }
    }
    echo $result;
}
?>

</body>
</html>