<?php
// 1
echo "<h3>1.</h3>";
class Worker {
    private $name;
    private $age;
    private $salary;
    public function __construct($name, $age, $salary) {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName() {
        return $this->name;
    }
    public function getAge() {
        return $this->age;
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setAge($newAge) {
        if ($newAge >= 18) {
            $this->age = $newAge;
            echo "Возраст успешно изменён на " . $newAge . "<br>";
        } else {
            echo "Вам работать в нашей компании еще рано<br>";
        }
    }
}
$worker1 = new Worker("Анна", 25, 85000);
$worker2 = new Worker("Мария", 19, 72000);
echo "Имя первого работника: " . $worker1->getName() . "<br>";
echo "Имя второго работника: " . $worker2->getName() . "<br><br>";
// 2
echo "<h3>2.</h3>";
echo "Сумма зарплат: " . ($worker1->getSalary() + $worker2->getSalary()) . " руб.<br>";
echo "Сумма возрастов: " . ($worker1->getAge() + $worker2->getAge()) . " лет<br><br>";

// 3-5
echo "<h3>3-5.</h3>";
echo "Имя: " . $worker1->getName() . "<br>";
echo "Возраст: " . $worker1->getAge() . "<br>";
echo "Зарплата: " . $worker1->getSalary() . " руб.<br><br>";
// 6
echo "<h3>6.</h3>";
echo "Общая зарплата двух работников: " . ($worker1->getSalary() + $worker2->getSalary()) . " руб.<br><br>";

// 7-10
echo "<h3>7-10.</h3>";

echo "Попытка поставить Анне 17 лет:<br>";
$worker1->setAge(17);
echo "<br>Попытка поставить Марии 22 года:<br>";
$worker2->setAge(22);
echo "<br>Текущий возраст Анны: " . $worker1->getAge() . " лет<br>";
echo "Текущий возраст Марии: " . $worker2->getAge() . " лет<br>";
?>
