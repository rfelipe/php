<HTML>
<HEAD>
 <TITLE>Inserção de Funcionários</TITLE>
</HEAD>
<BODY>
<?php
// Captura os valores dos campos do formulario...
$desc_cat = $_POST["desc_cat"];
if (empty($desc_cat))
{ 
 echo("<script type='text/javascript'> alert('Campo inválido, digite novamente!'); location.href='categoria_inclui.php';</script>");
} 
// Realiza a conexão com o Banco de Dados...
include "conecta.inc";
// Realiza a query de inclusao...
$sql = "INSERT INTO categoria(cod_cat,desc_cat) VALUES('','$desc_cat')";
$res = mysql_query($sql);
echo("<script type='text/javascript'> alert('Inclcusão de categoria realizada com sucesso!'); location.href='categoria_inclui.php';</script>");
?>
</BODY>
</HTML>