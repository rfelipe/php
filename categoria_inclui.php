<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Cadastro de categoria</TITLE>
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
$data = date("y-m-d");
$hora = date("h:i:s");
$novadata = substr($data,6,2)."/".substr($data,3,2)."/".substr($data,0,2);
$novahora = substr($hora,0,2)."h".substr($hora,3,2)."mm";
echo"<h3>Inclusão de categoria</h3><br>";
echo"<form method='POST' action='categoria_inserir.php'>";
echo"<b>Nova categoria....:</b><input type='text' name='desc_cat' size=20></p>";


// Final de Rotina
echo"<p><input type='submit' value='Enviar 'name='B1'><input type='reset' value='Limpar' name='B2'></p>";
echo"</form>";
echo"Data:$novadata - Hora:$novahora<br><br>";
echo "<a href='http://127.0.0.1/projects/sistema_novo/manutencao_sistema.php'>| Manutenção Geral |</a>&nbsp&nbsp&nbsp";
?>
</div>
</BODY>
</HTML>
