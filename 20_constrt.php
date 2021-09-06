<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Free constructors</title>
</head>

<body>
    <?php
    class Book
    {
        public $title;
        public $author;
        public $pages;

        //constructors intro
        function __construct($aTitle, $aAuthor, $aPages)
        {
            $this->title = $aTitle;
            $this->author = $aAuthor;
            $this->pages = $aPages;
        }
    }

    //objects, but shorter
    $book1 = new Book("Beliver's Authority", "Andy", 300);
    echo "<br>";
    $book2 = new Book("You've Already Got it", "Andy Wo", 350);

    echo $book1->title;
    ?>
</body>

</html>