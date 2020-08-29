<?php
//Write a PHP program to decapitalize the first letter of the string and then adds it with rest of the string.

function decapitalize($string,$upperRest=false){
    return lcfirst($upperRest? strtoupper($string) : $string);
}
print_r(decapitalize('Python'));

?>