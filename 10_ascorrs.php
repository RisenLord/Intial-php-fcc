<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associatives</title>
</head>

<body>

    <form action="ascorrs.php" method="post">
        <input type="text" name="bank">
        <input type="submit">
    </form>
    <!-- key value pairs -->
    <?php
    $bankAR = array("Pb"=>"AAA+", "Equity"=>"AA", "Stanbic"=>"AAA", "Stanchart"=>"AAB");
    //echo $bankAR["Equity"]; //unique key
    //echo count($bankAR);
    echo $bankAR[$_POST["bank"]];
    ?>
</body>

</html>