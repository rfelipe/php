<?php
		//Inicia a sessão
		session_start();
		//Verifica se há dados ativos na sessão
		if(!isset($_SESSION["usuario"]) || !isset($_SESSION["nome"]))
  	{
			//Caso não exista dados registrados, exige login
			echo("<script type='text/javascript'> alert('Acesso negado ao sistema.O Usuário não foi autenticado!'); location.href='index.html';</script>");
            exit;
  	}
?>

