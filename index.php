<?php 
// Сделайте класс Worker, в котором будут следующие public поля - name (имя), age (возраст), salary (зарплата).
// Создайте объект этого класса, затем установите поля в следующие значения (не в __construct, а для созданного 
// объекта) - имя 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса, установите поля в 
// следующие значения - имя 'Вася', возраст 26, зарплата 2000.
// Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

include_once './Worker.php';
$worker1 = new Worker();
$worker1->name = 'Иван';
$worker1->age = 25;
$worker1->salary = 1000;

$worker2 = new Worker();
$worker2->name = 'Вася';
$worker2->age = 26;
$worker2->salary = 2000;
echo "Сумма зарплат работников - ".$worker1->salary+$worker2->salary." условных единиц.";
echo "\n";
echo "Сумма возрастов работников - ".$worker1->age+$worker2->age." лет.";
echo "</br>";


// 2 задача.Сделайте класс Worker, в котором будут следующие private поля - name (имя), age (возраст), 
// salary (зарплата) и следующие public методы setName, getName, setAge, getAge, setSalary, getSalary.
// Создайте 2 объекта этого класса: 'Иван', возраст 25, зарплата 1000 и 'Вася', возраст 26, зарплата 2000.
// Выведите на экран сумму зарплат Ивана и Васи. Выведите на экран сумму возрастов Ивана и Васи.

include_once './Worker2.php';
$worker3 = new Worker2();
$worker3->setName('Иван');
$worker3->setAge(25);
$worker3->setSalary(1000);
$worker4 = new Worker2();
$worker4->setName('Вася');
$worker4->setAge(26);
$worker4->setSalary(2000);
echo "Сумма зарплат работников - ".$worker3->getSalary()+$worker4->getSalary()." условных единиц.";
echo "\n";
echo "Сумма возрастов работников - ".$worker3->getAge()+$worker4->getAge()." лет.";
echo "</br>";

// Задача 3. Дополните класс Worker из предыдущей задачи private методом checkAge, который будет проверять возраст 
// на корректность (от 1 до 100 лет). Этот метод должен использовать метод setAge перед установкой нового возраста 
// (если возраст не корректный - он не должен меняться).

include_once './Worker3.php';
$worker5 = new Worker3();
$worker5->setAge(90);
echo $worker5->getAge();
echo "</br>";

// Задача 4. Сделайте класс Worker, в котором будут следующие private поля - name (имя), salary (зарплата). 
// Сделайте так, чтобы эти свойства заполнялись в методе __construct при создании объекта (вот так: new Worker
// (имя, возраст) ). Сделайте также public методы getName, getSalary.
// Создайте объект этого класса 'Дима', возраст 25, зарплата 1000. 
// Выведите на экран произведение его возраста и зарплаты.

include_once './Worker4.php';
$Worker = new Worker4('Дима', 25);
$Worker->setSalary(1000);
echo "Произведение возраста и зарплаты: ".$Worker->getAge()*$Worker->getSalary();
echo "</br>";

// Задача 5. Сделайте класс User, в котором будут следующие protected поля - name (имя), age (возраст), public методы
// setName, getName, setAge, getAge.
// Сделайте класс Worker, который наследует от класса User и вносит дополнительное private поле salary (зарплата), 
// а также методы public getSalary и setSalary.
// Создайте объект этого класса 'Иван', возраст 25, зарплата 1000. Создайте второй объект этого класса 'Вася', 
// возраст 26, зарплата 2000. Найдите сумму зарплата Ивана и Васи.
// Сделайте класс Student, который наследует от класса User и вносит дополнительные private поля стипендия, 
// курс, а также геттеры и сеттеры для них.

include_once './User.php';
include_once './Worker5.php';
include_once './Student.php';
$worker6 = new Worker5();
$worker6->setName('Иван');
$worker6->setAge(25);
$worker6->setSalary(1000);
$worker7 = new Worker5();
$worker7->setName('Вася');
$worker7->setAge(26);
$worker7->setSalary(2000);
echo "Сумма зарплат работников - ".$worker6->getSalary()+$worker7->getSalary()." условных единиц.";
echo "\n";
echo "Сумма возрастов работников - ".$worker6->getAge()+$worker7->getAge()." лет.";
echo "</br>";
$student=new Student;
$student->setCourse(2);
echo"Текущий курс студента: ".$student->getCourse();
echo "</br>";

// Задача 6. Сделайте класс Driver (Водитель), который будет наследоваться от класса Worker из предыдущей задачи. 
// Этот метод должен вносить следующие private поля: водительский стаж, категория вождения (A, B, C).

include_once './Driver.php';
$driver = new Driver;
$driver->setExperience(5);
echo "Стаж вождения - ".$driver->getExperience();
$driver->setСategory('A');
echo "\n";
echo "Категория вождения - ".$driver->getСategory();
?>

