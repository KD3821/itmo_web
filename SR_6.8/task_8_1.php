<?php

    class Student {
        private $name;
        private $age;
        private $group;

        public function setName($arg) {
            $this->name = $arg;
            return $this->name;
        }
        public function getName() {
            return $this->name;
        }
        public function setAge($arg) {
            $this->age = $arg;
            return $this->age;
        }
        public function getAge() {
            return $this->age;
        }
        public function setGroup($arg) {
            $this->group = $arg;
            return $this->group;
        }
        public function getGroup() {
            return $this->group;
        }
    }

    $obj1 = new Student;
    $obj2 = new Student;

    $obj1->setName('Иван');
    $obj1->setAge(21);
    $obj1->setGroup('U1001');

    $obj2->setName('Вася');
    $obj2->setAge(20);
    $obj2->setGroup('U1002');

    
    echo ($obj1->getGroup()).'<br>';
    echo '<br>';
    echo ($obj2->getGroup()).'<br>';
    echo '<br>';
    echo $obj1->getAge()+ $obj2->getAge();

?>