<?php
		//Inicia a sess�o
		session_start();
		//Verifica se h� dados ativos na sess�o
		if(!isset($_SESSION["usuario"]) || !isset($_SESSION["nome"]))
  	{
			//Caso n�o exista dados registrados, exige login
			echo("<script type='text/javascript'> alert('Acesso negado ao sistema.O Usu�rio n�o foi autenticado!'); location.href='index.html';</script>");
            exit;
  	}
?>

