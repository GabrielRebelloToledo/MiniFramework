<?php

namespace App\Controllers;

use MF\Controller\Action;
use App\Models\Produto;
use App\Models\Info;
use MF\Model\Container;

class IndexController extends Action {

	
	public function index() {

		//$this->view->dados = array('Sofá', 'Cadeira', 'Cama');

		//instacia de conexao
		//$conn = Connection::getDb();
		//intanciar o modelo 
		//$produto = new Produto($conn);

		$produto = Container::getModel('Produto');

		$produtos = $produto->getProdutos();

		@$this->view->dados = $produtos;

		$this->render('index','layout1');
	}

	public function sobreNos() {

		//instacia de conexao
		//$conn = Connection::getDb();
		//intanciar o modelo 
		//$info = new Info($conn);

		$info = Container::getModel('Info');

		$informacoes = $info->getInfo();
		
		//$this->view->dados = array('Notebook', 'Smartphone');

		@$this->view->dados = $informacoes;
		$this->render('sobreNos','layout2');
	}

	
}


?>