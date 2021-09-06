<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swtich Statmts</title>
</head>

<body>
    <form action="swtch.php" method="post">
        Name thy grade!?
        <input type="text" name="grade">
        <input type="submit">
    </form>

    <?php
    $grade = $_POST["grade"];
    //echo $grade;
    switch($grade){
        case "A": echo "A!, you did amzng!";
        break;
        case "B": echo "B, you did great!";
        break;
        case "C": echo "C, you did pretty well";
        break;
        case "D": echo "D! you really tried";
        break;
        case "E": echo "E, you are found wanting";
        break;
        case "F": echo "F, sorry but you did not make it";
        break;
        default: echo "Ain't no grade like that";
    }
    ?>
</body>

</html>