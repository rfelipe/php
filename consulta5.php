<div align="center">
<?php

//$conn=mysql_connect("localhost","root","") or die ("Erro na conexão");
//$db=mysql_select_db("empresa") or die ("Erro no banco");

// Realiza a conexão com o Banco de Dados...
include "conecta.inc";

if (!isset($_GET["pagina"])) {
$pagina = 1;
}
else {
$pagina = $_GET["pagina"];

}

$max=10;
$inicio = $pagina - 1;
$inicio = $max * $inicio;

$sql=("select * from funcionario");
$query=mysql_query($sql);
$total=mysql_num_rows($query);

if ($total == 0)
echo "Nenhum registro encontrado!";
else

{
echo"Quantidade de registros encontrados: ".$total.'<br><br>';
echo "<a href='http://127.0.0.1/projects/sistema_novo/manutencao_sistema.php'>| Manutenção Geral |</a><br><br>";

echo "Id&nbsp&nbsp&nbsp&nbspNome&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSex&nbsp&nbspEndereço&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspCidade&nbsp&nbsp&nbsp&nbsp&nbsp&nbspEst&nbsp&nbspSalário&nbsp&nbsp&nbsp&nbspCategoria&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspSetor&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbspProjeto";
echo"<hr align= center width=60%>";
$sql2 = ("SELECT id_func,nome,sex,ender,cid,est,sal,desc_cat,nome_set,desc_proj FROM funcionario INNER JOIN setor ON setor.cod_set = funcionario.cod_set 
                          INNER JOIN categoria ON categoria.cod_cat = funcionario.cod_cat
                          INNER JOIN projetos ON projetos.cod_proj = funcionario.cod_proj
ORDER BY `funcionario`.`id_func` ASC 
LIMIT $inicio,$max
");
//$sql2=("select * from funcionario LIMIT $inicio,$max");
$query2=mysql_query($sql2);
?>

<style type="text/css">
<!--
body,td,th {
background: blue url("ozora.jpg")
	no-repeat fixed 130px 0px;
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
<table width="60%" border="0" cellspacing="2" cellpadding="2" cellspacing="2">
<?php
while ($mostrar=mysql_fetch_array($query2)){ ?>
<tr>
<td scope="col"><?php print $mostrar['id_func'];?></td>
<td scope="col"><?php print $mostrar['nome'];?></td>
<td scope="col"><?php print $mostrar['sex'];?></td>
<td scope="col"><?php print $mostrar['ender'];?></td>
<td scope="col"><?php print $mostrar['cid'];?></td>
<td scope="col"><?php print $mostrar['est'];?></td>
<td scope="col"><?php print $mostrar['sal'];?></td>
<td scope="col"><?php print $mostrar['desc_cat'];?></td>
<td scope="col"><?php print $mostrar['nome_set'];?></td>
<td scope="col"><?php print $mostrar['desc_proj'];?></td>
</tr>
<?php }?>
</table>
<table width="60%" border="0" cellspacing="2" cellpadding="2" cellspacing="2">
<tr>
<td height="70" scope="col">

<?php	
}
// Calculando pagina anterior
$menos = $pagina - 1;
// Calculando pagina posterior
$mais = $pagina + 1;
$pgs = ceil($total / $max);
if($pgs > 1 ) 
{
if($menos >0) 
echo "<a href=\"?pagina=$menos\" class='texto_paginacao'>Anterior</a> "; 

if (($pagina-4) < 1 )

$anterior = 1;

else 
$anterior = $pagina-4;

if (($pagina+4) > $pgs )
$posterior = $pgs;
else

$posterior = $pagina + 4;

for($i=$anterior;$i <= $posterior; $i++) 
if($i != $pagina) 
echo " <a href=\"?pagina=".($i)."\" class='texto_paginacao'>$i</a>";

else
echo " <strong class='texto_paginacao_pgatual'>".$i."</strong>";

if($mais <= $pgs) 
echo " <a href=\"?pagina=$mais\" class='texto_paginacao'>Proxima</a><br><br>";
}

?>

</td>
</tr>
</table>
</div>