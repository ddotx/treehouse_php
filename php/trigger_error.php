<?php
// Report simple running errors
error_reporting(E_ALL);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors",1);

$test=2;

if($test>1){
    trigger_error("Value must be 1 or below");
}