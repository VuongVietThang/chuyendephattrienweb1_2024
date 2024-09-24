<?php
declare(strict_types=1);

require_once 'A.php';
require_once 'B.php';

class Demo {
    public function typeXReturnY(): A {
        echo __FUNCTION__ . "<br>";
        return new A(); 
    }
}


$demo = new Demo();
$object = $demo->typeXReturnY(); 

?>
