<?php 
class Worker4 {
    private $name;
    private $age;
    public $salary;

    public function __construct($name,$age){
        $this->name = $name;
        $this->age = $age;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge(){
        return $this->age;
    }
    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}

?>