<?php
// $dia = (int) $_POST["dia"]
$dia = readline("insira o valor do dia");
switch ($dia){
    case 1 : print "domingo";
    break;
    case 2: print "segunda";
    break;
    case 3: print "terça";
    break;
    case 4: print "quarta";
    break;
    case 5: print " quinta";
    break;
    case 6 : print "sexta";
    break;
    case 7 : print "sabado";
    break;
    default : print "Insira um dia válido";
}
?>