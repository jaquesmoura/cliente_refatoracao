<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$id_cliente = $_GET["id"];

CODE\Cliente\ListaDeClientes::$client_list = array ( '1' => new CODE\Cliente\ClientePF(1,"Jaques Moura","385.222.682-15","Av. Parintins 489 - Cachoeirinha",5),
                                '2' => new CODE\Cliente\ClientePF(2,"Lucilana Moura","222.222.222-22","Av. Parintins 489 - Cachoeirinha",5),
                                '3' => new CODE\Cliente\ClientePF(3,"Evelyn Moura","333.222.222-22","Av. Parintins 489 - Cachoeirinha",5),
                                '4' => new CODE\Cliente\ClientePF(4,"Emanuele Moura","444.222.222-22","Av. Parintins 489 - Cachoeirinha",5),
                                '5' => new CODE\Cliente\ClientePF(5,"Kaleb Santos","555.222.222-22","Av. Dois 543 - Centro",0),
                                '6' => new CODE\Cliente\ClientePJ(6,"Fred Krueger Company","93.362.629/0001-62","Av. Dois 543 - Centro",5),
                                '7' => new CODE\Cliente\ClientePF(7,"Jason Mraz","777.222.222-22","Av. Itacolomy 200 - Cidade Nova",0),
                                '8' => new CODE\Cliente\ClientePJ(8,"Jackson Five Company","18.672.681/0001-08","Av. Wakusese 111 - Flores",5),
                                '9' => new CODE\Cliente\ClientePF(9,"Luana Piovani","999.222.222-22","Av. Wandyn 2389 - Flores",0),
                                '10' => new CODE\Cliente\ClientePF(10,"Maysa Carvalho","111.222.222-22","Av. Conte Teles 999 - Aleixo",0)
                            ); 


$cliente = CODE\Cliente\ListaDeClientes::$client_list[$id_cliente]; 

?>

<!DOCTYPE html>
<html>
<head>
        <title>Clientes</title>

        <link rel="stylesheet" href="/css/bootstrap.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.css">
        <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <!-- Fixed navbar -->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Clientes</a>
        </div>
      </div>
    </nav>

<div class="container theme-showcase" role="main">

        <div class="page-header">
                <h1>Visualizando usuário: <strong> <?= $cliente->getNome() ?>  </strong></h1>
        </div>
        <div class="row">
                <div class="col-md-12">
                        <div class="panel panel-default">
                                <div class="panel-body">
                                        <form>
                                                <div class="form-group">
                                                        <label for="nome">Nome</label>
                                                        <input type="text" class="form-control" value="<?= $cliente->getNome()  ?>" disabled>
                                                </div>
                                                <div class="form-group">
                                                        <label for="cpf_cnpj"><?= $cliente->getTipoCadastroNacional() ?></label>
                                                        <input type="text" class="form-control" value="<?= $cliente->getCadastroNacional() ?>" disabled>
                                                </div>

                                                <div class="form-group">
                                                        <label for="endereco">Endereco</label>
                                                        <input type="text" class="form-control" value="<?= $cliente->getEndereco() ?>" disabled>
                                                </div>
                                                <!-- <a href="/usuarios" class="btn btn-info btn-sm">Voltar</a>                            
                                                <a href="/usuarios/{{ $usuario->id }}/editar" class="btn btn-info btn-sm">Editar cadastro</a>-->

                                        </form>
                                </div>
                        </div>
                </div>
        </div>

</div>

</body>

</html>
