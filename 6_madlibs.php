<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>mdlbs game</title>
</head>

<body>

    <form action="madlibs.php" method="get">
        <p>The Pasbanc Motto Goes Like;</p>
        1: <input type="text" name="what" placeholder="all the WHAT">
        2: <input type="text" name="who" placeholder="of all the WHO">
        <input type="submit">
    </form>
    <br>
    <?php
    $what = $_GET["what"];
    $who = $_GET["who"];
echo "All the $what ... <br><br>";
echo "Of all $who ... <br><br>";
echo "Belongs to Pasbanc, <br><br>";
echo "Belongs to God. <br><br>";

?>
</body>

</html>