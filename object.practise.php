<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php

class Person {
    public $name;
    public $eyeColor;
    public $age;


    public function setName($name){
        $this->name = $name; // this refers to this class we're inside
    }

}

$person1 = new Person();
$person1->setName("Diba");
echo $person1->name; 




?>
</body>
</html>