<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classes & Objects</title>
</head>

<body>
    <?php
    class Book
    {
        public $title;
        public $author;
        public $pages;

        //constructors intro
        function __construct($name)
        {
            //echo "New book created <br>";
            echo $name;
        }
    }

    $book1 = new Book("Jesus"); //this is an object
    $book1->title = "Walter Walker";
    $book1->author = "Andrew Wommack";
    $book1->pages = 400;
    echo " ";

    $book2 = new Book("Christ"); //this is an object
    $book2->title = "Fin Stewardship";
    $book2->author = "Andrew Wommack";
    $book2->pages = 300;

    //echo $book1->title;
    //echo "<br>";
    //echo $book2->title;

    ?>
</body>

</html>