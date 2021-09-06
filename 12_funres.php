<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Func Return Satements</title>
</head>

<body>
    <?php
    function cube($num){
        return $num*$num*$num;
    }

    //$cubeRes = cube(4);
    //echo $cubeRes; //all the same as
    echo cube(4);
    ?>
</body>

</html>