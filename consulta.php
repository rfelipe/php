<?php
  //Inclui o arquivo de verifica��o para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta Geral dos funcion�rios</TITLE>
</HEAD>
<BODY>
<?php
  // Realiza a conex�o com o Banco de Dados...
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
  echo "<b>C�digo:</b> $id<br>";
  echo "<b>Nome:</b> $nome<br>";
  echo "<b>Endere�o:</b> $ender<br>";
  echo "<b>Cidade:</b> $cid<br>";
  echo "<b>Estado:</b> $est<br>";
  echo "<b>Sexo:</b> $sex<br>";
  echo "<b>Sal�rio:</b> $sal<br>";
  echo "----------------------------------<br>";
  }
?>
</BODY>
</HTML>
