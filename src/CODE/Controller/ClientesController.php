<?php

namespace CODE\Controller;

use PDO;

use CODE\Cliente\ClientePF;
use CODE\Cliente\ClientePJ;

class ClientesController{


	public static $db;
	public $cliente;

    public function __construct()
    {
        $engine = 'mysql'; 
        $host = 'localhost'; 
        $database = 'clientes'; 
        $user = 'root'; 
        $pass = ''; 
        $dns = $engine.':dbname='.$database.";host=".$host; 
        self::$db = new PDO($dns, $user, $pass); 
   }


    public function add($cliente)
    {
    	try{
        	$st = self::$db->prepare(
            "insert into cliente (nome, tipo_pessoa, cpf_cnpj, endereco, classificacao, endereco_cobranca)
            values
 			(:nome, :tipo_pessoa, :cpf_cnpj, :endereco, :classificacao, :endereco_cobranca)"
        	);

        	$nome = $cliente->getNome();
        	$tipoPessoa = $cliente->getTipoPessoa();
        	$cadastroNacional = $cliente->getCadastroNacional();
        	$endereco = $cliente->getEndereco();
        	$classificacao = $cliente->getClassificacao();
        	$endereco_cobranca = $cliente->getEnderecoCobranca();

        	$st->bindParam(":nome", $nome , PDO::PARAM_STR);
        	$st->bindParam(":tipo_pessoa", $tipoPessoa , PDO::PARAM_STR);
        	$st->bindParam(":cpf_cnpj", $cadastroNacional , PDO::PARAM_STR);
        	$st->bindParam(":endereco", $endereco , PDO::PARAM_STR);
        	$st->bindParam(":classificacao", $classificacao , PDO::PARAM_INT);
        	$st->bindParam(":endereco_cobranca", $endereco_cobranca , PDO::PARAM_STR);

        	$executa = $st->execute();
       		/*if($executa){
        		echo $st->rowCount();
           		echo 'Dados inseridos com sucesso';
       		}
       		else{
       			print_r($st->errorInfo());
           		echo 'Erro ao inserir os dados';
       		}*/
   		}
   		catch(PDOException $e){
      		echo $e->getMessage();
   		}
    }

    public function retrieveAll()
    {
    	try{
        	$st = self::$db->prepare(
            "select * from cliente"
        	);
        	$executa = $st->execute();
        	$arr = array();
        	if($executa){
           		while($reg = $st->fetch(PDO::FETCH_OBJ)){ /* Para recuperar um ARRAY utilize PDO::FETCH_ASSOC */
           			if ($reg->tipo_pessoa == "PF")
           			{
                		array_push($arr,new ClientePF($reg->idcliente,$reg->nome,$reg->cpf_cnpj,$reg->endereco,$reg->classificacao));
           			}else
           			{
           				array_push($arr,new ClientePJ($reg->idcliente,$reg->nome,$reg->cpf_cnpj,$reg->endereco,$reg->classificacao));
           			}	
           		}
           		return $arr;
       		}
       		else{
           		echo 'Erro ao inserir os dados';
       		}
   		}
   		catch(PDOException $e){
      		echo $e->getMessage();
   		}    	
    }

    public function retrieve($idcliente)
    {
    	try{
        	$st = self::$db->prepare("select * from cliente where idcliente = :idcliente");
        	$st->bindParam(":idcliente", $idcliente , PDO::PARAM_INT);        	
        	$executa = $st->execute();
        	$arr = array();
        	if($executa){
           		while($reg = $st->fetch(PDO::FETCH_OBJ)){ /* Para recuperar um ARRAY utilize PDO::FETCH_ASSOC */
           			if ($reg->tipo_pessoa == "PF")
           			{
                		$this->cliente = new ClientePF($reg->idcliente,$reg->nome,$reg->cpf_cnpj,$reg->endereco,$reg->classificacao);
           			}else
           			{
           				$this->cliente = new ClientePJ($reg->idcliente,$reg->nome,$reg->cpf_cnpj,$reg->endereco,$reg->classificacao);
           			}	
           		}
           		return $this->cliente;
       		}
       		else{
           		echo 'Erro ao inserir os dados';
       		}
   		}
   		catch(PDOException $e){
      		echo $e->getMessage();
   		}    	    	
    }

    public function count()
    {
        $st = self::$db->prepare(
            "select * from cliente"
        );
 		$st->execute();
 		$count = $st->rowCount();
		$st->closeCursor();
		return $count;
    }

}