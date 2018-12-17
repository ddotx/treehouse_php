<?php
// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);
// Make sure they're on screen
ini_set('display_errors', 1);
// HTML formatted errors
ini_set("html_errors",1);

// Do some errors

// Notice
//$nope = 0;
var_dump(5 + $nope);

// Warning
$wrestler = new stdClass();
$wrestler->name = 'Hulk Hogan';

// Strict
class Foo {
    public function bar() {}
    //public function nope() {}
}
Foo::bar();

// Error
Foo::nope();

