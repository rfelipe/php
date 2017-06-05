<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Exclusao dos Funcionários</TITLE>
</HEAD>
<BODY>
<?php
  $id = $_POST["id"];
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $resultado = mysql_query("SELECT * FROM funcionario WHERE id_func='$id'");
  $rows = mysql_num_rows($resultado);
  if ($rows==0)
  {
  echo("<script type='text/javascript'> alert('ID $id inválido!'); location.href='exclui.php';</script>");
  mysql_close($conex);
  }
  for ($i = 0; $i < $rows; $i++)
  {
  $id = mysql_result($resultado,$i,"funcionario.id_func");
  $nome = mysql_result($resultado,$i,"funcionario.nome");
  echo "<b>ID do Funcionário:</b> $id<br>";
  echo "<b>Nome:</b> $nome<br>";
  // Confirma exclusão...S/N
  $resultado = mysql_query("DELETE FROM funcionario WHERE id_func='$id'");
  echo("<script type='text/javascript'> alert('Exclusão realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
  }
?>
</BODY>
</HTML>
