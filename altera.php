<?php
  //Inclui o arquivo de verifica��o para verificar se existe sessao..
  include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Altera��o de Funcion�rios</TITLE>
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
  echo"<h3>Altera��o de Funcion�rios</h3>";
  echo"<p><i>Aten��o! Ao alterar os campos do Funcion�rio certifique-se antes, atrav�s de uma consulta pr�via no Banco de Dados</i></p>";
  echo"<form method='POST' action='alter_ok.php'>";
  echo"<b>Entre com o ID:</b><input type='text' name='id'size=3></p>";
  echo"<input type='submit' value='Enviar'>";
  echo"<input type='reset' value='Limpar' name='B2'>";
  echo"</form>";
  echo"Data:$novadata - Hora:$novahora<br><br>";
  echo "<b><a href='manutencao_sistema.php'>| Manuten��o Geral |</a>&nbsp&nbsp&nbsp";
?>
</div>
</BODY>
</HTML>
