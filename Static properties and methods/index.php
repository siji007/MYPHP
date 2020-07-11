<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Stat</title>
</head>
<body>
<?php
class Person{
    // properties

    private $name;
    private $eyeColor;
    private $age;

   public static $drinking = 21;//static properties make it easy to get referenced wwithout actually creating an object

   public function __construct($name, $eyeColor, $age)
    {
        $this->name = $name;
        $this->eyeColor = $eyeColor;
        $this->age = $age;
    }

    public function setName($name){
        $this->name = $name;
    }
    
    // public function getDA(){//We can also access static properties from regular methods as well
    //     return self::$drinking; //we use self just like the 'this' keyword when we are access a static propewrty
    //}
    public static function setDrinking($newDA){
        self::$drinking = $newDA;
    }
    }
    echo Person::$drinking;

    Person::setDrinking(33);
    echo Person::$drinking;



?>

    
</body>
</html>