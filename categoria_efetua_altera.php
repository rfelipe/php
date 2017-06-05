<?php
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
<?php
  // Captura os valores dos campos do formulario...
  $id    = $_POST["id_novo"];
  $nome  = $_POST["nome_novo"];
  $sql   = "UPDATE categoria SET cod_cat='$id',desc_cat='$nome' WHERE cod_cat='$id'";
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $res = mysql_query($sql);
  echo("<script type='text/javascript'> alert('Alteração realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
?>
</BODY>
</HTML>


