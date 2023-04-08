<?php

class Student{

    protected string $id;
    protected string $first_name;
    protected string $last_name;
    protected string $email;

    function __construct(string $id, string $first_name, string $last_name, string $email){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
    }

    function getID(){
        return "This student identification number: {$this->id}<br/>";
    }

    function getName(){
        return "This student full name: {$this->first_name} {$this->last_name}<br/>";
    }

    function getEmail(){
        return "This student email: {$this->email}<br/>";
    }

}

class GraduationStudent extends Student{

    protected int $semester;

    function __construct(string $id, string $first_name, string $last_name, string $email, int $semester){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->semester = $semester;
    }

}

$st1 = new GraduationStudent(1,"Shane", "Johnson", "shanejohnson@yahoo.com.br", 2);

echo $st1->getID();
echo $st1->getName();
echo $st1->getEmail();
?>