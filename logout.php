<?php
include("verifica.php");
echo "Sessao encerrada para o Usu�rio ".$_SESSION["nome"];
$dataHora = date("d/m/Y h:i:s");
echo("<br>");
echo ("Data:".$dataHora);
// Destr�i as vari�veis de sessao criada...
session_destroy();
echo("<script type='text/javascript'> alert('Logout realizado com sucesso !'); location.href='index.html';</script>");
?>


