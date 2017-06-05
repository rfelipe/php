<?php
include("verifica.php");
?>
<HTML>
<TITLE>Consulta Geral dos funcionários por Sexo</TITLE>
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
  $sexo = $_POST["sexo"];
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $resultado = mysql_query("SELECT * FROM funcionario WHERE sex='$sexo'");
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
  echo "<b><a href='http://127.0.0.1/projects/sistema_novo/manutencao_sistema.php'>| Manutenção Geral |</a>&nbsp&nbsp&nbsp";
?>
</div>
</BODY>
</HTML>
