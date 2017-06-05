<?php
include("verifica.php");
?>
<HTML>
<HEAD>
 <TITLE>Alteração de Funcionários</TITLE>
</HEAD>
<BODY>
<?php
  // Captura os valores dos campos do formulario...
  $id    = $_POST["id_novo"];
  $nome  = $_POST["nome_novo"];
  $ender = $_POST["ender_novo"];
  $cid   = $_POST["cid_novo"];
  $est   = $_POST["est_novo"];
  $sex   = $_POST["sex_novo"];
  $sal   = $_POST["sal_novo"];
  $sql   = "UPDATE funcionario SET id_func='$id',nome='$nome',ender='$ender',cid='$cid',est='$est', sex='$sex',sal='$sal' WHERE id_func='$id'";
  // Realiza a conexão com o Banco de Dados...
  include "conecta.inc";
  $res = mysql_query($sql);
  echo("<script type='text/javascript'> alert('Alteração realizada com sucesso!'); location.href='manutencao_sistema.php';</script>");
  mysql_close($conex);
?>
</BODY>
</HTML>


