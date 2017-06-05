<HTML>
<HEAD>
 <TITLE>Inserção de Funcionários</TITLE>
</HEAD>
<BODY>
<?php
// Captura os valores dos campos do formulario...
$nome = $_POST["nome"];
$ender = $_POST["ender"];
$cid = $_POST["cid"];
$est = $_POST["est"];
$sex = $_POST["sex"];
$sal = $_POST["sal"];
$set = $_POST["set"];
$cat = $_POST["cat"];
$proj= $_POST["proj"];
if (empty($nome))
{ 
 echo("<script type='text/javascript'> alert('Campo inválido, digite novamente!'); location.href='inclui.php';</script>");
} 
if(empty($ender))
{ 
 echo("<script type='text/javascript'> alert('Campo inválido, digite novamente!'); location.href='inclui.php';</script>");
} 
if(empty($cid))
{ 
 echo("<script type='text/javascript'> alert('Campo inválido, digite novamente!'); location.href='inclui.php';</script>");
} 
if(empty($sal))
{ 
 echo("<script type='text/javascript'> alert('Campo inválido, digite novamente!'); location.href='inclui.php';</script>");
} 
// Realiza a conexão com o Banco de Dados...
include "conecta.inc";
// Realiza a query de inclusao...
$sql = "INSERT INTO funcionario(nome,ender,cid,est,sex,sal,cod_set,cod_cat,cod_proj) VALUES('$nome','$ender','$cid','$est','$sex','$sal',$set,$cat,$proj)";
$res = mysql_query($sql);
echo("<script type='text/javascript'> alert('Inclcusão de funcionário realizada com sucesso!'); location.href='inclui.php';</script>");
?>
</BODY>
</HTML>
