<?php
include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Alteração de setor</TITLE><style type="text/css">
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
  // Captura os valores dos campos do formulario...
  $id    = $_POST["id_novo"];
  $nome  = $_POST["nome_novo"];
  $sql   = "UPDATE setor SET cod_set='$id',nome_set='$nome' WHERE cod_set='$id'";
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $res = mysql_query($sql);
  echo("<script type='text/javascript'> alert('Alteração realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
?>
</div>
</BODY>
</HTML>


