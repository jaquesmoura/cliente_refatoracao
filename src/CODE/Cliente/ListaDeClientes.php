<?php

namespace CODE\Cliente;

use CODE\Cliente\ClientePF;
use CODE\Cliente\ClientePJ;

class ListaDeClientes{

    public static $client_list;  

    public static function init()
    {
    	self::$client_list = array ( '1' => new ClientePF(1,"Jaques Moura","385.222.682-15","Av. Parintins 489 - Cachoeirinha",5),
                                '2' => new ClientePF(2,"Lucilana Moura","222.222.222-22","Av. Parintins 489 - Cachoeirinha",5),
                                '3' => new ClientePF(3,"Evelyn Moura","333.222.222-22","Av. Parintins 489 - Cachoeirinha",5),
                                '4' => new ClientePF(4,"Emanuele Moura","444.222.222-22","Av. Parintins 489 - Cachoeirinha",5),
                                '5' => new ClientePF(5,"Kaleb Santos","555.222.222-22","Av. Dois 543 - Centro",0),
                                '6' => new ClientePJ(6,"Fred Krueger Company","93.362.629/0001-62","Av. Dois 543 - Centro",5),
                                '7' => new ClientePF(7,"Jason Mraz","777.222.222-22","Av. Itacolomy 200 - Cidade Nova",0),
                                '8' => new ClientePJ(8,"Jackson Five Company","18.672.681/0001-08","Av. Wakusese 111 - Flores",5),
                                '9' => new ClientePF(9,"Luana Piovani","999.222.222-22","Av. Wandyn 2389 - Flores",0),
                                '10' => new ClientePF(10,"Maysa Carvalho","111.222.222-22","Av. Conte Teles 999 - Aleixo",0)
                            );
    }

}

