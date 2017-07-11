<?php

namespace CODE\Cliente;

use CODE\Cliente\Cliente;

class ClientePJ extends Cliente{

	public function __construct($id, $nome, $endereco, $cnpj, $classificacao){
		$this->id = $id;
		$this->nome = $nome;
		$this->setCnpj($cnpj);
		$this->endereco = $endereco;
		$this->classificacao = $classificacao;
	}

	public function __construct1($id, $nome, $endereco, $cnpj, $classificacao, $enderecoCobranca){
		$this->id = $id;
		$this->nome = $nome;
		$this->setCnpj($cnpj);
		$this->endereco = $endereco;
		$this->classificacao = $classificacao;
		$this->enderecoCobranca = $enderecoCobranca;
	}

	public function getCnpj(){
		return $this->cnpj;
	}

	public function setCnpj($cnpj){
		$this->cnpj = $cnpj;
		$this->tipoPessoa = "PJ";
	}

}