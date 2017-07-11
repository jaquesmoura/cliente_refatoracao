<?php

namespace CODE\Cliente;

use CODE\Cliente\ClienteInterface;

abstract class Cliente implements ClienteInterface{
	protected $id;
	protected $nome;
	protected $tipoPessoa;
	protected $cpf;
	protected $cnpj;
	protected $endereco;
	protected $classificacao;
	protected $enderecoCobranca;

	public function getId(){
		return $this->id;
	}

	public function getNome(){
		return $this->nome;
	}
	
	public function setNome($nome){
		$this->nome = $nome;
	}

	public function getTipoPessoa(){
		return $this->tipoPessoa;
	}

	public function getTipoCadastroNacional(){
		if ($this->tipoPessoa == "PF"){
			return "CPF";
		}else{
			return "CNPJ";
		}
	}

	public function getCadastroNacional(){
		if ($this->tipoPessoa == "PF"){
			return $this->cpf;
		}else{
			return $this->cnpj;
		}
	}

	public function getPossuiEnderecoCobranca(){
		return ($this->endereco != $this->enderecoCobranca);
	}

	public function getEndereco(){
		return $this->endereco;
	}

	public function setEndereco($endereco){
		$this->endereco = $endereco;
	}

	public function getClassificacao(){
		return $this->classificacao;
	}

	public function setClassificacao($classificacao){
		$this->classificacao = $classificacao;
	}

	public function getEnderecoCobranca(){
		return $this->enderecoCobranca;
	}

	public function setEnderecoCobranca($enderecoCobranca){
		$this->enderecoCobranca = $enderecoCobranca;
	}	


}
