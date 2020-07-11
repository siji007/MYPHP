<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="js/jquery.min.js"></script>
    <link rel="stylesheet" href="css/bootstrap.css">
    <script src="js/bootstrap.min.js"></script>
    <title>Document</title>
</head>
<body>
<?php
class Person {
    private $first = "Daniel";//whenever you create a metho or properties you have to declare whether they are private,protected snd public
    protected $last = "Nielson"; //protected means can be accessed from same class,however if any class inherit from it it will be accessible 
    private $age ="28";

    public function owner(){
        $a = $this->first; //
        return $a;
    }
    public function getmyprot(){
        return $this->last;
    }
    public function setmypropt($myLast){
        $this->last = $myLast;
    }

}
class Pet{
    private function petty(){
        $a = "Hi there!";
        return $a;
    }
}
$persony = new Person();
 echo $persony->owner();



$myPet = new Pet();
// echo $myPet->petty(); This cannot be accessible because the property is decllared as private
?>
    
</body>
</html>