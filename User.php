<?php 
class User
{
    protected $name;
    protected $age;

    public function getName(){
        return $this->age;
    }

    public function setName($name){
        $this->name = $name;
    }

    public function getAge(){
        return $this->age;
    }

    public function setAge($age){
        $this->age = $age;
    }

}
?>