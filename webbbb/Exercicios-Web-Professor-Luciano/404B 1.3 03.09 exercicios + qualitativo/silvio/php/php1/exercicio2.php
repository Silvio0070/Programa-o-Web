<?php
$a = readline("insira o valor 1: ");
$b = readline("insira o valor 2: ");
$c = readline("insira o valor 3: ");

if ($a > $b && $a > $c){
    print "o maior valor é $a";
}

if ($b > $a && $b > $c){
    print "o maior valor é $b";
}

if ($c > $b && $c > $a){
    print "o maior valor é $c";
}
print "\n";
if ($a < $b && $a < $c){
    print "o menor valor é $a";
}

if ($b < $a && $b < $c){
    print "o menor valor é $b";
}

if ($c < $b && $c < $a){
    print "o menor valor é $c";
}


?>