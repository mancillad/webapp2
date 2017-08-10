<?php

class Students{
    private $studentIds;

    function __construct(){
        $this->studentIds = range(1,500);
    }

    function getRandomStudent(){
        return rand(min($this->studentIds),
            max($this->studentIds));
    }
}

$student = new Students();
echo $student->getRandomStudent()."\n";

echo (new Students())->getRandomStudent()."\n";
?>