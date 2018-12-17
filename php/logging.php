<?php
// Make sure we are logging errors
ini_set("log_errors", 1);
// Tell php where to log the errors
ini_set("error-log", "php-error.txt");

$error_levels = array("E_ALL", "E_NOTICE", "E_WARNING", "E_ERROR", "E_STRICT", "E_DEPRECATED", "E_PARSE");

foreach ($errors as $error){
    echo $error."<br/>"
}
