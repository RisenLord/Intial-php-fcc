<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Functions 1</title>
</head>

<body>
    <?php
    //write it
    function sayHi(){
        echo "Hello Wealth";
    } // then call it;
    //sayHi();

    function sayHey($name, $age){
        echo "Hello $name, you are $age years old <br>";
    }
    sayHey("Linda", 40);
    sayHey("Liz", 20);
    ?>
</body>

</html>