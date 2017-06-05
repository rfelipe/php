<?php
  //Inclui o arquivo de verificação para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Consulta por Categoria</TITLE>
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
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $resultado = mysql_query("SELECT id_func,nome,sex,ender,cid,est,sal,desc_cat FROM funcionario 
                          INNER JOIN categoria ON categoria.cod_cat = funcionario.cod_cat
ORDER BY `funcionario`.`id_func` ASC 
LIMIT 0 , 30
");
  $rows = mysql_num_rows($resultado);
  for ($i = 0; $i < $rows; $i++)
  {
  $id = mysql_result($resultado,$i,"funcionario.id_func");
  $nome = mysql_result($resultado,$i,"funcionario.nome");
  $sex = mysql_result($resultado,$i,"funcionario.sex");
  $ender = mysql_result($resultado,$i,"funcionario.ender");
  $cid = mysql_result($resultado,$i,"funcionario.cid");
  $est = mysql_result($resultado,$i,"funcionario.est");
  $sal = mysql_result($resultado,$i,"funcionario.sal");
  $cat = mysql_result($resultado,$i,"desc_cat");
  echo "<br>";
  echo "Código:$id<br>";
  echo "Nome:$nome<br>";
  echo "Sexo:$sex<br>";
  echo "Endereço:$ender<br>";
  echo "Cidade:$cid<br>";
  echo "Estado:$est<br>";
  echo "Salário:$sal<br>";
  echo "<b>Categoria:</b>$cat<br>";
  }
  echo"<br><a href='manutencao_sistema.php'><b>| Manutenção do Sistema |</a>";
?>
</div>
</BODY>
</HTML>
