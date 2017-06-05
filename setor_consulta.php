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

//$conn=mysql_connect("localhost","root","") or die ("Erro na conexão");
//$db=mysql_select_db("empresa") or die ("Erro no banco");

// Realiza a conexão com o Banco de Dados...
include "conecta.inc";

$sql=("select * from setor");
$query=mysql_query($sql);
$total=mysql_num_rows($query);

if ($total == 0)
echo "Nenhum registro encontrado!";
else

{
echo"Quantidade de registros encontrados: ".$total.'<br><br>';
echo "<a href='manutencao_sistema.php'>| Manutenção Geral |</a><br><br>";


echo "&nbsp&nbspId_setor&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspsetor";
echo"<hr align= center width=60%>";
$sql2 = ("SELECT cod_set,nome_set FROM setor
ORDER BY `setor`.`cod_set`
");
//$sql2=("select * from setor");
$query2=mysql_query($sql2);
?>

<style type="text/css">
<!--
body,td,th {
font-family: Verdana, Arial, Helvetica, sans-serif;
font-size: 12px;
}
a:link {
color: #0099FF;
}
a:visited {
color: #0099FF;
}
a:hover {
color: #99CC00;
}
a:active {
color: #0099FF;
}
.texto_paginacao_pgatual {color:#FF0000}
-->
</style>
<table width="20%" border="0" cellspacing="2" cellpadding="2" cellspacing="2">
<?php
while ($mostrar=mysql_fetch_array($query2)){ ?>
<tr>
<td scope="col"><?php print $mostrar['cod_set'];?></td>
<td scope="col"><?php print $mostrar['nome_set'];?></td>
</tr>
<?php }?>
</table>
<table width="60%" border="0" cellspacing="2" cellpadding="2" cellspacing="2">
<tr>
<td height="70" scope="col">

<?php	
}
// Calculando pagina anterior

?>
</td>
</tr>
</table>
</div>