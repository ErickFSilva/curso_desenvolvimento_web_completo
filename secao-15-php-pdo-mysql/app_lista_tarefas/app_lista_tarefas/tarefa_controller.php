<?php

    /**  
     * - Conterá boa parte das regras de negócio
     * - Ele manipulará 'tarefa.model.php', 'tarefa.service.php' e 'conexao.php'
     * - Será responsável por instanciar os objetos tarefas e através de 'tarefa_services.php', utilizando a conexão, controlar a percistência dessa tarefa no banco de dados.
    */

    // Incorporando classes
    require "../app_lista_tarefas/tarefa.model.php";
    require "../app_lista_tarefas/tarefa.service.php";
    require "../app_lista_tarefas/conexao.php";

    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    // Bloco para Nova Tarefa
    if($acao == 'inserir') {

        // Instância de Tarefa
        $tarefa = new Tarefa(); // tarefa.model.php
        $tarefa->__set('tarefa', $_POST['tarefa']);

        // Instância de Conexão
        $conexao = new Conexao();

        // Instância de Terefa Services
        // Este objeto irá recuperar o objeto e conexão, do objeto de tarefa, para a realização das operações junto ao DB.
        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->inserir();

        // 
        header('Location: nova_tarefa.php?inclusao=1');

    }
    else if($acao == 'recuperar') {

        $tarefa = new Tarefa();
        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefas = $tarefaService->recuperar();

    }
    else if($acao == 'atualizar') {

        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        if($tarefaService->atualizar()) {

            if(isset($_GET['pag']) && $_GET['pag'] == 'index') {
                
                header('Location: index.php');

            }
            else {

                header('Location: todas_tarefas.php');

            }

        }

    }
    else if($acao == 'remover') {

        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        
        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->remover();

        if(isset($_GET['pag']) && $_GET['pag'] == 'index') {
                
            header('Location: index.php');
            
        }
        else {

            header('Location: todas_tarefas.php');

        }

    }
    else if($acao == 'marcarRealizada') {

        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);

        $conexao = new Conexao();

        $tarefaService = new TarefaService($conexao, $tarefa);
        $tarefaService->marcarRealizada();

        if(isset($_GET['pag']) && $_GET['pag'] == 'index') {
                
            header('Location: index.php');
            
        }
        else {

            header('Location: todas_tarefas.php');

        }

    }
    else if($acao == 'recuperarTarefasPendentes') {

        $tarefa = new Tarefa();
        $tarefa->__set('id_status', 1);
        $conexao = new Conexao();
        $tarefaService = new TarefaService($conexao, $tarefa);

        $tarefas = $tarefaService->recuperarTarefasPendentes();

    }

?>