<?php
//Arquivo responsavel pela inicializacao do sistema
require_once 'sistema/configuracao.php';
include_once 'Helpers.php';

//this val is usually received by the DB in a date format like this
//Year:month:day Hour:minute:seconds
//we need a function to process this
contarTempo('2021-04-28 13:32:15'); 


echo 'The time() returns a unix time stamp such as ' . time(), '<hr>';
echo date('D, dS M Y') . ' and the time is now ' . date('H:i');