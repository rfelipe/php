<?php
  //Inclui o arquivo de verifica��o para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Consulta Geral dos funcion�rios por Estado</TITLE>
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
<form method="POST" action="consulta_est.php">
<p>
<b>&nbsp;Consulta por Estado:</b><br>
<select name="estado" id="select">
<option value="RS">Rio Grande do Sul</option>
<option value="SC">Santa Catarina</option>
<option value="PR">Paran�</option>
</select>
<p><input type="submit" value="Enviar" name="B1">
<input type="reset" value="Limpar" name="B2"></p>
<a href="manutencao_sistema.php"><b>| Manuten��o Geral |</a>
</form>
</div>
</BODY>
</HTML>
