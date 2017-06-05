<?php
include("verifica.php");
echo "Sessao encerrada para o Usuário ".$_SESSION["nome"];
$dataHora = date("d/m/Y h:i:s");
echo("<br>");
echo ("Data:".$dataHora);
// Destrói as variáveis de sessao criada...
session_destroy();
echo("<script type='text/javascript'> alert('Logout realizado com sucesso !'); location.href='index.html';</script>");
?>


