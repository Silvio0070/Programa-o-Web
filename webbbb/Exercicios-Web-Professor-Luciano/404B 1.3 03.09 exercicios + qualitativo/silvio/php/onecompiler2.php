<?php
//$login = $_POST["txtlogin];
//$senha = $_POST["txtsenha];

$login = readline("Informe seu login: ");
$senha  = readline("Informe sua senha: ");
if ($login  == NULL || $senha == NULL) {
    print " Login e/ou senha inválida!";
    exit();
}
print " Dados de acesso OK!"
?>