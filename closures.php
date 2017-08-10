<?php

class Student{
        private $name = "John Doe";

        function getName(){
            return function(){
                    return $this->$name;
            };
        }
}

$student = new Student();
$name = $student->getName();

echo $name()."\n"

?>
