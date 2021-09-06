<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inputting via arrays</title>
</head>

<body>
    <form action="arrsin.php" method="post">
        Pasbanc: <input type="checkbox" name="banks[]" value="pasbanc"><br>
        Equity: <input type="checkbox" name="banks[]" value="equity"><br>
        Stanbic: <input type="checkbox" name="banks[]" value="stanbic"><br>
        Absa: <input type="checkbox" name="banks[]" value="absa"><br>
        <input type="submit">
    </form>

    <?php
    $banks = $_POST["banks"];
    echo $banks[0];
    ?>
</body>

</html>