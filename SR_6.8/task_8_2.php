<?php

    class User {

        protected $name;
        protected $age;

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
    }

    class Worker extends User {
        private $salary;

        public function setSalary($arg) {
            $this->salary = $arg;
            return $this->salary;
        }
        public function getSalary() {
            return $this->salary;
        }
    }

    $worker1=new Worker;
    $worker2=new Worker;

    $worker1->setName('Иван');
    $worker1->setAge(25);
    $worker1->setSalary(1000);

    $worker2->setName('Вася');
    $worker2->setAge(26);
    $worker2->setSalary(2000);

    echo $worker1->getSalary()+$worker2->getSalary();

?>