<?php

function divide($a, $b) {
    try {
        if($b ==0) {
            throw new Exception("\n\rDivide by Zero Exception");
        }

        return $a/$b;
    }
    catch(Exception $ex) {
        return $ex->getMessage();
    }
    finally{
        echo "executed after try & catch \n";
    }
}

echo divide(4,0)."\n";

?>