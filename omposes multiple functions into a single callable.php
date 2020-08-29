<?php
//Write a PHP program to create a new function that composes multiple functions into a single callable.
function compose(...$functions){
    return array_reduce(
        $functions,
        function($carry,$function){
            return function ($x) use ($carry,$function){
                return $function($carry($x));
            };
        },
        function($x){
            return $x;
        }
    );
}
$compose=compose(function($x){
    return $x+2;
},
function($x){
    return $x*4;
});
print_r($compose(2));
print_r($compose(3));
?>