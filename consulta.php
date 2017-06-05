<?php
  //Inclui o arquivo de verificação para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta Geral dos funcionários</TITLE>
</HEAD>
<BODY>
<?php
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $resultado = mysql_query("SELECT * FROM funcionario ORDER BY id_func");
  $rows = mysql_num_rows($resultado);
  for ($i = 0; $i < $rows; $i++)
  {
  $id = mysql_result($resultado,$i,"funcionario.id_func");
  $nome = mysql_result($resultado,$i,"funcionario.nome");
  $ender = mysql_result($resultado,$i,"funcionario.ender");
  $cid = mysql_result($resultado,$i,"funcionario.cid");
  $est = mysql_result($resultado,$i,"funcionario.est");
  $sex = mysql_result($resultado,$i,"funcionario.sex");
  $sal = mysql_result($resultado,$i,"funcionario.sal");
  echo "<b>Código:</b> $id<br>";
  echo "<b>Nome:</b> $nome<br>";
  echo "<b>Endereço:</b> $ender<br>";
  echo "<b>Cidade:</b> $cid<br>";
  echo "<b>Estado:</b> $est<br>";
  echo "<b>Sexo:</b> $sex<br>";
  echo "<b>Salário:</b> $sal<br>";
  echo "----------------------------------<br>";
  }
?>
</BODY>
</HTML>
