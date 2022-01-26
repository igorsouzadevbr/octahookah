<?php
/*
----------------------------------------
-       ADICIONAR MOIP NA APLICAÇÃO    - 
- VERSÃO: V2-SDK-PHP                   - 
- AUTOR: IGOR SOUZA <igor@cadenza.tech>-
- PROJETO: OCTA HOOKAH                 - 
----------------------------------------
*/

//PEGAR CLASSE - GET CLASS OF LOADER
require 'vendor/autoload.php';

//DEFINIR MOIP - DEFINE MOIP
use Moip\Moip;
use Moip\Auth\BasicAuth;

//DADOS DE ACESSO - ACCESS DATA
$token = 'PIZDFHHREZHFRGXIMUPK17RT9FRT2OVZ';
$key = 'WMZOXLDNLFSYVEOWFPV5DK28IW2L20GS73PTLP1O';

$moip = new Moip(new BasicAuth($token, $key), Moip::ENDPOINT_SANDBOX);




?>