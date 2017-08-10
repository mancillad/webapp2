<?php

function divide($a, $b) {
    try {
        if($b ==0) {
            throw new Exception("Divide by Zero Exception");
        }

        return $a/$b;
    }
    catch(Exception $ex) {
        return $ex->getMessage();
    }
}

echo divide(4,0)."\n";

?>