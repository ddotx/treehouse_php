<?php
// Exception Handling syntax
try { //throw errors in the try-block

    // if an error occurs we can throw an exception
    throw new Exception('this is an error.');
}
catch(Exception $e){ //catch the throws in the catch-block

    // do something with the exception object, eg. display its message
    echo 'Error message: ' .$e->getMessage();
}
//------------------------------
echo "<br/>";
$a = 10;
$b = 0;

try {
    if ($b == 0) {
        throw new Exception("Division by zero.");
    }
    $c = $a / $b;
} catch (Exception $e) {
    echo $e->getMessage();
}