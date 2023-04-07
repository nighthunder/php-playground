<?php

class Student{

    protected string $id;
    protected string $first_name;
    protected string $last_name;
    protected string $email;
    protected DateTime $enroll_date;

    function __construct(string $id, string $first_name, string $last_name, string $email, DateTime $date){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->date = $date;
    }

    public function getID(){
        return "This student identification number: {$this->id}<br/>";
    }

    public function getName(){
        return "This student full name: {$this->first_name} {$this->last_name}<br/>";
    }

    public function getEmail(){
        return "This student email: {$this->email}<br/>";
    }

    function __toString(){ # magic method
        return "{$this->first_name} {$this->last_name} is a student in our University with id {$this->id} and email {$this->email}.";
    }

}

class GraduationStudent extends Student{

    protected int $semester;

    function __construct(string $id, string $first_name, string $last_name, string $email, DateTime $date, int $semester){
        $this->id = $id;
        $this->first_name = $first_name;
        $this->last_name = $last_name;
        $this->email = $email;
        $this->enroll_date = $date;
        $this->semester = $semester;
    }

    function __toString(){ # magic method
        return "{$this->first_name} {$this->last_name} is a graduation student since {$this->enroll_date->format('Y-m-d')} in our University with id {$this->id} at the {$this->semester} and email {$this->email}.<br/>";
    }
 
}

function validateDate($date, $format = 'Y-m-d'){
    $d = DateTime::createFromFormat($format, $date);
    return $d && $d->format($format) === $date;
}

// Instantiate 
$date = DateTime::createFromFormat('d/m/Y', '04/07/2023');
$date2 = new DateTime(); # now
$date3 = new DateTime(date("01/02/2023"));
$st1 = new GraduationStudent(1,"Shane", "Johnson", "shanejohnson@yahoo.com.br", $date3, 2);

echo $st1->getID();
echo $st1->getName();
echo $st1->getEmail();
echo $st1;
?>