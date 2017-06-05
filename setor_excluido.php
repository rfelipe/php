<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Exclusao dos Funcionários</TITLE>
<style type="text/css">
body {
	background: blue url("ozora.jpg")
	no-repeat fixed 130px 0px;
	}
	.logo {
	background: white url("logoozora.jpg")
	no-repeat 0px 2px;
	width:995px;
    height:205px;
	}
</style>
</HEAD>
<BODY>
<div align="center">
<div class="logo">
</div>
<?php
  $categoria = $_POST["categoria"];
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $resultado = mysql_query("SELECT * FROM setor WHERE cod_set='$categoria'");
  $rows = mysql_num_rows($resultado);
  if ($rows==0)
  {
  echo("<script type='text/javascript'> alert('setor $categoria inválida!'); location.href='setor_exclui.php';</script>");
  mysql_close($conex);
  }
  for ($i = 0; $i < $rows; $i++)
  {
  $categoria = mysql_result($resultado,$i,"setor.cod_set");
  $desc_cat = mysql_result($resultado,$i,"setor.nome_set");
  echo "<b>Codigo do setor:</b> $categoria<br>";
  echo "<b>Nome do setor:</b> $desc_cat<br>";
  // Confirma exclusão...S/N
  $resultado = mysql_query("DELETE FROM setor WHERE cod_cat='$categoria'");
  echo("<script type='text/javascript'> alert('Exclusão realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
  }
?>
</div>
</BODY>
</HTML>
