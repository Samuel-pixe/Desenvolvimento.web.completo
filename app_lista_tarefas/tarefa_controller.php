<?php 
	
	require "../../app_lista_tarefas/tarefa.model.php";
	require "../../app_lista_tarefas/tarefa.service.php";
	require "../../app_lista_tarefas/conexao.php";
	
	//echo '<pre>';
	//print_r($_POST);
	//echo '</pre>';

	$acao = isset($_GET['acao']) ? $_GET['acao']: $acao;

	if($acao== 'inserir')
	{
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa', $_POST['tarefa']);
	
		$conexao = new Conexao();
	
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();
		
		//echo '<pre>';
		//print_r($tarefaService);
		//echo '</pre>';
	
		header('Location: nova_tarefa.php?inclusao=1');
	}else if($acao == 'recuperar'){
		$tarefa = new Tarefa();
		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefas = $tarefaService->recuperar();
	} else if($acao == 'atualizar') {

		$tarefa = new Tarefa();
		$tarefa->__set('id', $_POST['id'])
			->__set('tarefa', $_POST['tarefa']);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		if($tarefaService->atualizar()) {
			header('location: todas_tarefas.php');
		}


	} else if($acao == 'remover') {

		$tarefa = new Tarefa();
		$tarefa->__set('id', $_GET['id']);

		$conexao = new Conexao();

		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->remover();

		header('location: todas_tarefas.php');
	}
 ?>



 /*

 if(isset($_GET['acao']) && $_GET['acao']=='inserir')
	{
		$tarefa = new Tarefa();
		$tarefa->__set('tarefa', $_POST['tarefa']);
	
		$conexao = new Conexao();
	
		$tarefaService = new TarefaService($conexao, $tarefa);
		$tarefaService->inserir();
	
		header('Location: nova_tarefa.php?inclusao=1');
	}else if($acao == 'recuperar'){

	}


*/