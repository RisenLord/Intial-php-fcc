<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>icali</title>
</head>

<body>
    <form action="icalc.php" method="get">
        <input type="number" name="inpt1">
        <br>
        <input type="number" name="inpt2">
        <input type="submit">
    </form>
    <?php
echo $_GET["inpt1"] + $_GET["inpt2"]
    ?>
</body>

</html>