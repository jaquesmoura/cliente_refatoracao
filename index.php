<?php

define('CLASS_DIR', 'src/');
set_include_path(get_include_path().PATH_SEPARATOR.CLASS_DIR);

spl_autoload_register();   

$params = $_GET;

if (array_key_exists('ord', $params)){
	$ord = $_GET["ord"];
}
else
{
	$ord = 1;
} 

CODE\Cliente\ListaDeClientes::init();

if ($ord == '1'){
	asort(CODE\Cliente\ListaDeClientes::$client_list);
}else{
	arsort(CODE\Cliente\ListaDeClientes::$client_list);
}

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
        <h1>Clientes</h1>
        </div>
        <div class="row">
                <div class="col-md-12">
                        <table class="table table-hover">
                                <thead>
                                        <tr>
                                                <th>Nome</th>
                                                <th>Tipo Pessoa</th>
                                                <th>Classificacao</th>
                                                <th>
                                                <a href="index.php?ord=1" class="btn btn-success btn-xs">Ord Asc</a>
                                                </th>
                                                <th>
                                                <a href="index.php?ord=0" class="btn btn-success btn-xs">Ord Dsc</a>
                                                </th>                                                
                                        </tr>
                                </thead>
                                <tbody>
                                		<!--<?php print_r(CODE\Cliente\ListaDeClientes::$client_list); ?>-->
                                        <?php foreach (CODE\Cliente\ListaDeClientes::$client_list as $client){ ?> 
                                        <tr>
                                                <td><?= $client->getNome() ?></td>
                                                <td><?= $client->getTipoPessoa() ?></td>
                                                <td><?= $client->getClassificacao() ?></td>
                                                <td>
                                                <a href="visualiza.php?id=<?= $client->getId() ?>" class="btn btn-success btn-xs">Ver</a>
                                                </td>
                                        </tr>
                                        <?php } ?>
                                </tbody>
                        </table>
                </div>
        </div>
</div>

</body>

</html>