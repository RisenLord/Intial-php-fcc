<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inheritance</title>
</head>

<body>
    <?php
    class Chef {
        function makeChicken(){
            echo "Lord makes chicken curry <br>";
        }
        function makeBeans(){
            echo "He also makes beans often <br>";
        }
        function makePans(){
            echo "And among the many snacks he does, one is pancakes <br>";
        }
    }

    // make a new one with all the atributes of the other [extend]
    class SupaChef extends Chef {
        function makePasta(){
            echo "The super chef makes good pasta too";
        }
        //overriding the pans of the first other
        function makePans(){
            echo "This one makes american pancakes too";
        }
    }

    $chef = new Chef();
    $chef->makePans();

    $SupaChef = new SupaChef();
    $SupaChef->makePans();
    ?>
</body>

</html>