<?php
  //Inclui o arquivo de verificação para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Consulta Geral dos funcionários por Sexo</TITLE>
</HEAD>
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
<BODY>
<div align="center">
<div class="logo">
</div>
<form method="POST" action="consulta_sexo.php">
<p>
<b>&nbsp;Consulta por Sexo:</b><br>
<select name="sexo" id="select">
<option value="m">Masculino</option>
<option value="f">Feminino</option>
</select>
<p><input type="submit" value="Enviar" name="B1">
<input type="reset" value="Limpar" name="B2"></p>
<a href="manutencao_sistema.php"><b>| Manutenção Geral |</a>
</form>
</div>
</BODY>
</HTML>
