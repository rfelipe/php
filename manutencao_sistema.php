<?php
include("verifica.php");
// Dados de Autenticação do Usuário...
echo "<center>Usuário autenticado<br>";
echo "Seja Bem-Vindo: " ."<b>". $_SESSION["nome"]
?>
<html>
<head>
<title><h2> Manutenção Geral dos Funcionários</h2></title>
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
</head>
<body>
<div align="center">
<div class="logo">
</div>
<p align="center"><b><font size="3">MANUTENÇÃO GERAL DOS FUNCIONÁRIOS<br>
Banco de Dados : Empresa</font></b></p>
<table border="0" width="29%" height="1">
  <tr>
    <td width="194%" valign="top" height="23" bgcolor="gray" align="center" colspan="3"><b>Funcionários</b></td>
  </tr>
  <tr>
    <td width="194%" valign="top" height="23" bgcolor="white" align="center" colspan="3">
      <p align="left">:: <a href="inclui.php">Inclusão</a>
      <p align="left">:: <a href="exclui.php">Exclusão</a>
      <p align="left">:: <a href="altera.php">Alteração</a>
      <p align="left">:: <a href="consulta5.php">Consulta Geral</a>
      <p align="left">:: <a href="consulta1.php">Consulta por Sexo</a>
	  <p align="left">:: <a href="consulta3.php">Consulta por Estado</a>
	  <p align="left">:: <a href="consulta6.php">Consulta dos Funcionários por Setor</a>
	  <p align="left">:: <a href="consulta7.php">Consulta dos Funcionários por Categoria</a>
	  <p align="left">:: <a href="consulta8.php">Consulta dos Funcionários por Projeto</a>
  </tr>
  <tr>
    <td width="194%" valign="top" height="23" bgcolor="" align="center" colspan="3">&nbsp;</td>
  </tr>
  <tr>
    <td width="33%" valign="top" height="23" bgcolor="#FF9999" align="center"><b>Categorias</b></td>
    <td width="33%" valign="top" height="27" bgcolor="#6699FF" align="center"><b>Setores</b></td>
    <td width="34%" valign="top" height="23" bgcolor="#008000" align="center"><b>Projetos</b></td>
  </tr>
  <tr>
    <td width="33%" valign="top" height="1" bgcolor="white">
	<p align="left">:: <a href="categoria_inclui.php">Inclusão</a><br>
    <p align="left">:: <a href="categoria_exclui.php">Exclusão</a><br>
    <p align="left">:: <a href="categoria_altera.php">Alteração</a><br>
    <p align="left">:: <a href="categoria_consulta.php">Consulta</a><br>
    <td width="33%" valign="top" height="86" bgcolor="white">
	<p align="left">:: <a href="setor_inclui.php">Inclusão</a><br>
    <p align="left">:: <a href="setor_exclui.php">Exclusão</a><br>
    <p align="left">:: <a href="setor_altera.php">Alteração</a><br>
    <p align="left">:: <a href="setor_consulta.php">Consulta</a><br>
    <td width="34%" valign="top" height="1" bgcolor="white">
	<p align="left">:: <a href="projetos_inclui.php">Inclusão</a><br>
    <p align="left">:: <a href="projetos_exclui.php">Exclusão</a><br>
    <p align="left">:: <a href="projetos_altera.php">Alteração</a><br>
    <p align="left">:: <a href="projetos_consulta.php">Consulta</a><br>
  </tr>
</table><br>
<b><a href='logout.php'>| Sair do Sistema |</a>
</div>
</body>
</html>

