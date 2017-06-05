<?php
  //Inclui o arquivo de verificação para verificar se existe sessao..
  include("verifica.php");
?>
<html>
<head>
<title>Exclusão de setor</title><style type="text/css">
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
echo"<h3>Exclusão de setor</h3>";
echo"<form method='POST' action='setor_excluido.php'>";
echo"<b>Entre com o codigo do setor a ser excluido:</b><input type='text' name='categoria'size=3></p>";
echo"<input type='submit' value='Enviar'>";
echo"<input type='reset' value='Limpar' name='B2'>";
echo"</form>";
echo"Data:$novadata - Hora:$novahora<br><br>";
echo "<b><a href='manutencao_sistema.php'>| Manutenção Geral |</a>&nbsp&nbsp&nbsp";
?>
</div>
</body>
</html>

