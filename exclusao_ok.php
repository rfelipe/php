<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Exclusao dos Funcion�rios</TITLE>
</HEAD>
<BODY>
<?php
  $id = $_POST["id"];
  // Realiza a conex�o com o Banco de Dados...
  include "conecta.inc";
  $resultado = mysql_query("SELECT * FROM funcionario WHERE id_func='$id'");
  $rows = mysql_num_rows($resultado);
  if ($rows==0)
  {
  echo("<script type='text/javascript'> alert('ID $id inv�lido!'); location.href='exclui.php';</script>");
  mysql_close($conex);
  }
  for ($i = 0; $i < $rows; $i++)
  {
  $id = mysql_result($resultado,$i,"funcionario.id_func");
  $nome = mysql_result($resultado,$i,"funcionario.nome");
  echo "<b>ID do Funcion�rio:</b> $id<br>";
  echo "<b>Nome:</b> $nome<br>";
  // Confirma exclus�o...S/N
  $resultado = mysql_query("DELETE FROM funcionario WHERE id_func='$id'");
  echo("<script type='text/javascript'> alert('Exclus�o realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
  }
?>
</BODY>
</HTML>
