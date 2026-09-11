<?php
$a = readline("Preço normal: ");
$b = readline("condição de pagamento:\n 1-Dinheiro ou cheque\n 2-a vista n crédito\n 3- em duas vezes\n 4- 3 vezes: ");
switch($b){
    case 1 : $c = $a - ((10/100)*$a);
    print "O valor a ser pago é $c";
    break;
    case 2 : $c = $a - ((5/100)*$a);
    print "O valor a ser pago é $c";
    break;
    case 3 : $c = $a / 2;
    print "Será pago em duas vezes de $c";
    break;
    case 4 : $c = $a + ((10/100)*$a);
    $d = $c/3;
    print "Será pago 3 vezes de $d";
    break;
    default : print "insira um valor verdadeiro";
    break;
}

?>