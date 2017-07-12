<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);
spl_autoload_register();

$id_cliente = $_GET["id"];

CODE\Cliente\ListaDeClientes::init();

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
