<!-- saved from url=(0022)http://internet.e-mail -->
<?php
// Recebemos os dados digitados pelo usu�rio
$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

// Realiza a conex�o com o Banco de Dados...
include "conecta.inc";
if($conex)
    //Criamos o comando que efetua a busca do banco
	$sql = "SELECT usuario,senha,nome FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";
	//Executamos o comando
	$rs = mysql_query($sql, $conex);
	//Retornamos o numero de linhas afetadas
	$num = mysql_num_rows($rs);
	//Verificamos se alguma linha foi afetada, caso sim retornamos suas informa��es
	if($num > 0)
	   {
			//Retorna os dados do banco
			$rst = mysql_fetch_array($rs);
			$usuario= $rst["usuario"];
			$senha 	= $rst["senha"];
			$nome 	= $rst["nome"];
			

			//Inicia a sess�o
			session_start();
			//Registra os dados do usu�rio na sess�o
			$_SESSION["usuario"]= $usuario;
			$_SESSION["senha"]	= $senha;
			$_SESSION["nome"]	= $nome;

			
			//Encerra a conex�o com o banco
			mysql_close($conex);
			//Redireciona para a manuten��o do sistema
    		echo "<meta http-equiv='refresh' content='5;URL=manutencao_sistema.php'>";

		}
else
	{
		//Encerra a conex�o com o banco
		mysql_close($conex);
		//Caso nenhuma linha seja retornada emite o alerta e retorna
		echo("<script type='text/javascript'> alert('Usu�rio n�o cadastrado!'); location.href='index.html';</script>");
        
	}
?>

