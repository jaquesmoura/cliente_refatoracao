<?php

namespace CODE\Cliente;

use CODE\Cliente\Cliente;

class ClientePF extends Cliente{

	public function __construct($id, $nome, $endereco, $cpf, $classificacao){
		$this->id = $id;
		$this->nome = $nome;
		$this->setCpf($cpf);
		$this->endereco = $endereco;
		$this->classificacao = $classificacao;
	}

	public function __construct2($id, $nome, $endereco, $cpf, $classificacao, $enderecoCobranca){
		$this->id = $id;
		$this->nome = $nome;
		$this->setCpf($cpf);
		$this->endereco = $endereco;
		$this->classificacao = $classificacao;
		$this->enderecoCobranca = $enderecoCobranca;
	}	

	public function getCpf(){
		return $this->cpf;
	}

	public function setCpf($cpf){
		$this->cpf = $cpf;
		$this->tipoPessoa = "PF";
	}

}
