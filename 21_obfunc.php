<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Object functions</title>
</head>

<body>
    <?php
    class Student
    {
        public $name;
        public $major;
        public $gpa;

        function __construct($name, $major, $gpa)
        {
            $this->name = $name;
            $this->major = $major;
            $this->gpa = $gpa;
        }

        function hasHons(){
            if($this->gpa >= 3.5){
                return "true";
            } return "false";
        }
    }

    $student1 = new Student("Lord", "Accounting", 5);
    echo "<br>";
    $student2 = new Student("Linda", "Civil", 5);

    echo $student1->hasHons();
    ?>
</body>

</html>