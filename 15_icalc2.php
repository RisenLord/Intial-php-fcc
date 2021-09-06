<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Better Php calc</title>
</head>

<body>
    <form action="icalc2.php" method="post">
        <!-- to do decimals add [step="0.1" or more zeros for more decs] -->
        Num1: <input type="number" step="0.001" name="num1"><br>
        Op: <input type="text" name="op1"><br>
        Num2: <input type="number" name="num2"><br>
        <!-- Op: <input type="text" name="op2"><br> -->
        <!-- Num3: <input type="number" name="num3"><br> -->
        <input type="submit">
    </form>

    <?php
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $num3 = $_POST["num3"];
    $op1 = $_POST["op1"];
    $op2 = $_POST["op2"];

    if($op1 == "+"){
        echo $num1 + $num2;
    } elseif ($op1 == "-"){
        echo $num1 - $num2;
    } elseif ($op1 == "/"){
        echo $num1 / $num2;
    } elseif ($op1 == "*"){
        echo $num1 * $num2;
    } else {
        echo "Invalid Op/erator";
    }
    ?>
</body>

</html>