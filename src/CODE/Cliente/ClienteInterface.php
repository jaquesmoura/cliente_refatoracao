<?php

namespace CODE\Cliente;

interface ClienteInterface {

	public function getClassificacao();

	public function setClassificacao($classificacao);

	public function getEnderecoCobranca();

	public function setEnderecoCobranca($enderecoCobranca);

}