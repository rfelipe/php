<?php
  //Inclui o arquivo de verifica��o para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Altera��o de Funcion�rio</TITLE>
</HEAD>
<BODY>
<?php
  $id = $_POST["id"];
  // Realiza a conex�o com o Banco de Dados...
  include "conecta.inc";
  $total = mysql_query("SELECT * FROM funcionario");
  $resultado = mysql_query("SELECT * FROM funcionario WHERE id_func='$id'");
  $rows = mysql_num_rows($resultado);
  if ($rows==0)
  {
  echo("<script type='text/javascript'> alert('ID  $id inv�lido!'); location.href='altera.php';</script>");
  mysql_close($conex);
  }
  for ($i = 0; $i < $rows; $i++)
  {
  $id = mysql_result($resultado,$i,"funcionario.id_func");
  $nome = mysql_result($resultado,$i,"funcionario.nome");
  $ender = mysql_result($resultado,$i,"funcionario.ender");
  $cid = mysql_result($resultado,$i,"funcionario.cid");
  $est = mysql_result($resultado,$i,"funcionario.est");
  $sex = mysql_result($resultado,$i,"funcionario.sex");
  $sal = mysql_result($resultado,$i,"funcionario.sal");

  echo "<h3>Altera��o de funcion�rio</h3>";
  echo "<hr><br>";
  echo"<form method='POST' action='efetua_alter.php'>";
  echo "<b>ID do funcion�rio:<input name='id_novo' type='type' value='$id' size=3><br>";
  echo "<b>Nome:<input name='nome_novo' type='type' value='$nome' size=50><br>";
  echo "<b>Endere�o:<input name='ender_novo' type='type' value='$ender' size=50><br>";
  echo "<b>Cidade:<input name='cid_novo' type='type' value='$cid' size=50><br>";
  echo "<b>Estado:<input name='est_novo' type='type' value='$est' size=2><br>";
  echo "<b>Sexo:<input name='sex_novo' type='type' value='$sex' size=1><br>";
  echo "<b>Sal�rio:<input name='sal_novo' type='type' value='$sal' size=50><br>";
  echo "<input type='submit' value='Alterar'><br>";
  echo "</form>";
  echo "<br><b><a href='manutencao_sistema.php'>| Manuten��o Geral |</a>&nbsp&nbsp&nbsp";
  echo "<br><hr>";
  }
?>
</BODY>

</HTML>
