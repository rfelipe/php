<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Cadastro de projetos</TITLE><style type="text/css">
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
$data = date("y-m-d");
$hora = date("h:i:s");
$novadata = substr($data,6,2)."/".substr($data,3,2)."/".substr($data,0,2);
$novahora = substr($hora,0,2)."h".substr($hora,3,2)."mm";
echo"<h3>Inclusão de projetos</h3><br>";
echo"<form method='POST' action='projetos_inserir.php'>";
echo"<b>Novo projetos....:</b><input type='text' name='desc_cat' size=20></p>";


// Final de Rotina
echo"<p><input type='submit' value='Enviar 'name='B1'><input type='reset' value='Limpar' name='B2'></p>";
echo"</form>";
echo"Data:$novadata - Hora:$novahora<br><br>";
echo "<a href='manutencao_sistema.php'>| Manutenção Geral |</a>&nbsp&nbsp&nbsp";
?>
</div>
</BODY>
</HTML>
