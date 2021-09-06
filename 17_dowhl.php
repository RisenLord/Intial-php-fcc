<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Do while Loop</title>
</head>

<body>
    <?php
    //$index = 1;
    //while($index <= 5){
      //  echo "$index <br>";
        //$index++; //if you remove this, you make an infite loop
    //}
    // do while loops are the reverse while loops that do the same thing with while loops

    //for loops are more specialised and deeper than do/while loops
    //for($i = 1; $i <= 5; $i++){
      //  echo "$i <br>";
    //}

    $luckyNos = array(4, 8, 14, 16, 32, 42);
    for($i = 0; $i <= count($luckyNos); $i++){
        echo "$luckyNos[$i] <br>";
    }
    ?>
</body>

</html>