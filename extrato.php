<?php

class extrato{
	//declarando os atributos e encapsular os dados
	private $operacao;
	private $data;
	private $numero;

	//criando os getters e setters
	public function getOperacao(){//pega o valor do atributo
		return $this->operacao;
	}

	public function setOperacao($operacao){//armazena o valor no atributo
		$this->operacao= $operacao;
	}

	public function getNome(){//pega o valor do atributo
		return $this->nome;
	}

	public function setNome($nome){//armazena o valor no atributo
		$this->nome= $nome;
	}
}
?>