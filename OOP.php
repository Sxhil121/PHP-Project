<?php
class OOP{
    private $name;
    protected $grade;
    public function getGrade(){
        return "Student:$this->name,Grade:$this->grade";
    }
    
    public function setGrade($name,$grade){
        $this->name=$name;
        $this->grade=$grade;
    }
}
?>