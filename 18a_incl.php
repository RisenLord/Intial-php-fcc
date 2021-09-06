<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>include some html</title>
</head>

<body>
    <?php include "header.html" ?>
    <p>I carry the flavour of God</p>
    <?php
    $title = "City City City";
    $author = "Jesus";
    $wordCount = 700;
    include "headr.php" ?>
    <p>More includes</p><br>
    <?php
    include "footr.php";
    echo $feetInMile;
    ?>
    <?php include "footer.html" ?>
</body>

</html>