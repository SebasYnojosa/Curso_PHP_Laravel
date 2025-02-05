<?php

class Person {
    // public string $name;
    // public int $age;

    public function __construct(    // Constructor, es el método que se ejecuta al instanciar la clase, desde PHP 8 se puede definir los atributos directamente en el constructor
        public string $name, public int $age
    ) {}

    public function introduce(): string 
    {
        return "Hola, mi nombre es {$this->name} y tengo {$this->age} años";
    }
}

// $person = new Person('Pepe', 25);
// echo $person->introduce();

// $person2 = new Person('Gustavo', 40);
// echo $person2->introduce();

class Employee extends Person 
{
    public function __construct(
        public string $name, 
        public int $age,
        public string $position
    ) {}

    public function introduce(): string 
    {
        return parent::introduce() . " Trabajo como {$this->position}";
    }
}

$person = new Employee("Alicia", 29, "Desarrollador");
echo $person->introduce(); // el método introduce() es heredado de la clase Person

$people = [
    new Employee("Alicia", 29, "Desarrollador"),
    new Employee("Carlos", 35, "Diseñador"),
    new Employee("Eduardo", 40, "Gerente"),
    new Person("Daniel", 45)
];

function introduce(Person $person)
{
    echo $person->introduce() . "\n";
}

foreach ($people as $person) 
{
    introduce($person);
}
