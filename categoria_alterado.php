<?php
  //Inclui o arquivo de verificação para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Alteração de Categoria</TITLE>
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
  $id = $_POST["id"];
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $total = mysql_query("SELECT * FROM categoria");
  $resultado = mysql_query("SELECT * FROM categoria WHERE cod_cat='$id'");
  $rows = mysql_num_rows($resultado);
  if ($rows==0)
  {
  echo("<script type='text/javascript'> alert('ID  $id inválido!'); location.href='categoria_altera.php';</script>");
  mysql_close($conex);
  }
  for ($i = 0; $i < $rows; $i++)
  {
  $id = mysql_result($resultado,$i,"categoria.cod_cat");
  $nome = mysql_result($resultado,$i,"categoria.desc_cat");

  echo "<h3>Alteração de Categoria</h3>";
  echo "<hr><br>";
  echo"<form method='POST' action='categoria_efetua_altera.php'>";
  echo "<b>ID da categoria:<input name='id_novo' type='type' value='$id' size=3><br>";
  echo "<b>Nome da categoria:<input name='nome_novo' type='type' value='$nome' size=50><br>";
  echo "<input type='submit' value='Alterar'><br>";
  echo "</form>";
  echo "<br><b><a href='manutencao_sistema.php'>| Manutenção Geral |</a>&nbsp&nbsp&nbsp";
  echo "<br><hr>";
  }
?>
</div>
</BODY>

</HTML>
