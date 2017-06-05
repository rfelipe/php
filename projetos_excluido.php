<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Exclusão dos projetos</TITLE><style type="text/css">
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
  $resultado = mysql_query("SELECT * FROM projetos WHERE cod_proj='$categoria'");
  $rows = mysql_num_rows($resultado);
  if ($rows==0)
  {
  echo("<script type='text/javascript'> alert('projetos $categoria inválida!'); location.href='projetos_exclui.php';</script>");
  mysql_close($conex);
  }
  for ($i = 0; $i < $rows; $i++)
  {
  $categoria = mysql_result($resultado,$i,"projetos.cod_proj");
  $desc_cat = mysql_result($resultado,$i,"projetos.desc_proj");
  echo "<b>Codigo do projetos:</b> $categoria<br>";
  echo "<b>Nome do projetos:</b> $desc_cat<br>";
  // Confirma exclusão...S/N
  $resultado = mysql_query("DELETE FROM projetos WHERE cod_cat='$categoria'");
  echo("<script type='text/javascript'> alert('Exclusão realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
  }
?>
</div>
</BODY>
</HTML>
