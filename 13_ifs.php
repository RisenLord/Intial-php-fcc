<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IF statements</title>
</head>

<body>
    i wake up, if so, i pray

    i think or look on my phone
    if it's dying i charge it

    i go for hygenics if done fold the bed <br>
    <?php
    $isMale = false;
    $isTall = false;
    if ($isMale && $isTall){
        echo "You are a tall male";
    } elseif ($isMale && !$isTall){
        echo "You aren't that tall of male, are you? Nope";
    } elseif (!$isMale && $isTall) {
        echo "You may not be male but you're tall, right? Yea";
    } else {
        echo "You are neither tale nor male";
    }
    ?>
</body>

</html>