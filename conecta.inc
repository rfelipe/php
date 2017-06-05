<?php
// Realiza a conexão com o Banco de Dados...
$conex = mysql_connect("mysql.hostinger.com.br","u173732521_em","171162") or die ("Erro ao conectar-se com o BD");
$bd = mysql_select_db("u173732521_em",$conex) or die ("Erro ao selecionar a base de dados");
?>