<?php
/* com o abstract a class Livro não 
pode mais ser instanciada*/
class Conta{
	/*declarando os atributos da classe e 
	encapsulando como private*/
	private $numero;
	private $cliente;
	private $saldo;
	private $limite;
	private $tipoConta;

	//Criando o construtor da classe
	function __construct($nome, $preco, $descricao, $usado, Categorias $categoria, $tipoLivro){
		$this->nome= $nome;
		$this->preco=$preco;
		$this->descricao= $descricao;
		$this->usado= $usado;
		$this->categoria=$categoria;
		$this->tipoLivro=$tipoLivro;
	}
	
	//Criando os métodos
	public function sacar($sacar){
		// Calcula o desconto e subtrai do preco
		$this->saldo -= $this->saldo - $sacar;
		return $this->saldo;
	}
	public function depositar($depositar){
		// Calcula o desconto e subtrai do preco
		$this->saldo -= $this->saldo + $depositar;
		return $this->saldo;
	}
	public function transferir($valorTransferido){
		// Calcula o desconto e subtrai do preco
		$this->saldo -= $this->saldo - $valorTransferido;
		return $this->preco;
	}

	public function precoComDesconto($desconto=0.1){
		// Calcula o desconto e subtrai do preco
		$this->preco -= $this->preco * $desconto;
		return $this->preco;
	}
	
	//Criando uma função para aplicar a reutilização de código
	public function calculaImposto(){
		//retorna 6,5% do valor do livro
		return $this->preco * 0.065;
	}

	// Criando os getters e setters dos atributos
	public function getNumero(){//pega o valor do atributo
		return $this->numero;
	}

	public function setNumero($numero){//armazena o valor no atributo
		$this->numero= $numero;
	}

	public function getCliente(){//pega o valor do atributo
		return $this->cliente;
	}

	public function setCliente($cliente){//armazena o valor no atributo
		$this->cliente= $cliente;
	}
	public function getSaldo(){//pega o valor do atributo
		return $this->saldo;
	}

	public function setSaldo($saldo){//armazena o valor no atributo
		$this->saldo= $saldo;
	}
	public function getLimite(){//pega o valor do atributo
		return $this->limite;
	}

	public function setLimite($limite){//armazena o valor no atributo
		$this->limite= $limite;
	}
	public function getTipoConta(){//pega o valor do atributo
		return $this->tipoConta;
	}

	public function setTipoConta($tipoConta){//armazena o valor no atributo
		$this->tipoConta= $tipoConta;
	}
	//convertendo para String
	function __toString(){
		return
		"Nome: ".$this->nome.
		"</br>Preço: ".$this->preco;

	}

	//criando o destrutor
	function __destruct(){
		//echo "Destruindo o objeto livro";
	}

}//fim da classe livro
?>