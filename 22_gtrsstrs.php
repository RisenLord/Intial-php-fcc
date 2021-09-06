<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Getter & Setters</title>
</head>

<body>
    <?php
    class Movie
    {
        public $title;
        // to stifal access edit the [visibility modifier, ie pub or private]
        private $rating;

        function __construct($title, $rating)
        {
            $this->title = $title;
            $this->setRating($rating);
            // changed from the normal for further lockdown....
        }

        function getRating()
        {
            return $this->rating;
        }

        function setRating($rating)
        {
            //$this->rating = $rating;
            if ($rating == "G" || $rating == "PG" || $rating == "PG-13" || $rating == "R" || $rating == "NR") {
                $this->rating = $rating;
            } else {
                $this->rating = "Invalid Rating";
            }
        }
    }

    $avengers = new Movie("End Game", "PG-13");
    $avengers->setRating("X");
    echo $avengers->getRating();
    //valid ratings = G, PG, PG-13, R, NR
    ?>
</body>

</html>