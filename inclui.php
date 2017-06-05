<?php
include("verifica.php");
?>
<HTML>
<HEAD>
<TITLE>Cadastro de Funcionários</TITLE>
<style type="text/css">
body {
	background: blue url("ozora.jpg")
	no-repeat fixed 130px 0px;
	}
	.logo {
	background: white url("logoozora.jpg")
	no-repeat 0px 0px;
	width:990px;
    height:200px;
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
echo"<h3>Inclusão de Funcionários</h3><br>";
echo"<form method='POST' action='inserir.php'>";
echo"<b>Nome....:</b><input type='text' name='nome'size=50></p>";
echo"<b>Endereço:</b> <input type='text'name='ender'size=50></p>";
echo"<b>Cidade..:</b><input type='text' name='cid' size=25></p>";
echo"<b>Estado..:";
echo"<b><select name='est'>;
<option value='RS'>RS</option>
<option value='SC'>SC</option>
<option value='PR'>PR</option>
</select></p>";
echo"<b>Sexo....:";
echo"<b><select name='sex'>;
<option value='M'>Masculino</option>
<option value='F'>Feminino</option>
</select></p>";
echo"<b>Salário.:</b><input type='text'name='sal'size=30></p>";
echo "<b>Setor..:</b><select name='set' id='tabela'>";

// Rotina para visualizar campos de uma tabela dentro do Select...
include ("conecta.inc");
//Consulta com a tabela
//Selecione tudo de nomedatabela em ordem crescente pelo nome 
$consulta=mysql_query("SELECT * FROM setor order by nome_set ASC"); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
   echo("<option value='".$dados['cod_set']."'>".$dados['nome_set']."</option>");
}
echo "</select>"; 
// Final de Rotina

echo "<b>&nbsp&nbspCategoria.:</b><select name='cat' id='tabela'></p>";

// Rotina para visualizar campos de uma tabela dentro do Select...
//Consulta com a tabela
//Selecione tudo de nomedatabela em ordem crescente pelo nome 
$consulta=mysql_query("SELECT * FROM categoria order by desc_cat ASC"); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
   echo("<option value='".$dados['cod_cat']."'>".$dados['desc_cat']."</option>");
}
echo "</select>"; 
// Final de Rotina

echo "<b>&nbsp&nbspProjeto..:</b><select name='proj' id='tabela'>";

// Rotina para visualizar campos de uma tabela dentro do Select...
//Consulta com a tabela
//Selecione tudo de nomedatabela em ordem crescente pelo nome 
$consulta=mysql_query("SELECT * FROM projetos order by desc_proj ASC"); 

//Fazendo o looping para exibição de todos registros que contiverem em nomedatabela
while ($dados = mysql_fetch_array($consulta)) 
{
   echo("<option value='".$dados['cod_proj']."'>".$dados['desc_proj']."</option>");
}
echo "</select>"; 
// Final de Rotina
echo"<p><input type='submit' value='Enviar 'name='B1'><input type='reset' value='Limpar' name='B2'></p>";
echo"</form>";
echo"Data:$novadata - Hora:$novahora<br><br>";
echo "<a href='http://127.0.0.1/projects/sistema_novo/manutencao_sistema.php'>| Manutenção Geral |</a>&nbsp&nbsp&nbsp";
?>
</div>
</BODY>
</HTML>
