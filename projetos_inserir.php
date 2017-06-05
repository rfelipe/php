<HTML>
<HEAD>
 <TITLE>Inserção de projetos</TITLE><style type="text/css">
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
$desc_cat = $_POST["desc_cat"];
if (empty($desc_cat))
{ 
 echo("<script type='text/javascript'> alert('Campo inválido, digite novamente!'); location.href='projetos_inclui.php';</script>");
} 
// Realiza a conexão com o Banco de Dados...
include "conecta.inc";
// Realiza a query de inclusao...
$sql = "INSERT INTO projetos(cod_proj,desc_proj) VALUES('','$desc_cat')";
$res = mysql_query($sql);
echo("<script type='text/javascript'> alert('Inclusão de categoria realizada com sucesso!'); location.href='projetos_inclui.php';</script>");
?>
</div>
</BODY>
</HTML>