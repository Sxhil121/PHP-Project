<?php 
abstract class OOP{
    abstract public function area();
}

class animal extends OOP{
public function area(){
    echo"hello";
}
}
$person= new animal();
echo $person->area();
?> 
