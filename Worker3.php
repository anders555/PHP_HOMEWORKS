<?php 
class Worker3 {
    private $name;
    private $age;
    private $salary;

    public function setName($name){
        $this->name = $name;
    }
    public function getName(){
        return $this->name;
    }
    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    private function checkAge($age)
    {
        if ($age > 1 && $age < 100) {
            return true;
        } else {
            echo 'Возраст должен быть от 1 до 100';
            return false;
        }
    }

    public function setSalary($salary){
        $this->salary = $salary;
    }
    public function getSalary(){
        return $this->salary;
    }
}

?>