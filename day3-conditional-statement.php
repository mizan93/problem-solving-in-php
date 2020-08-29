<?php
$stdin = fopen("php://stdin", "r");

fscanf($stdin, "%d\n", $N);

if ($N%2!=0 || (($N>5 && $N<21 ) && ($N%2==0) )) {
    # code...
    printf('Weird');
}elseif (($N%2==0 && ($N<6 && $N>1))|| ( $N%2==0 && $N>20)) {
    # code...
    printf('Not Weird');
}
fclose($stdin);
