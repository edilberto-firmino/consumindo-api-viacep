<?php

require __DIR__.'/vendor/autoload.php';

use \App\WebService\ViaCep;

/**pede o cep no eterminal, é necessário colocar o cep no terminal junto com o caminho da pasta
 * exemplo: php index.php 61801500
 */
 
if(!isset($argv[1])){
    die("cep não definido");
}

//retorno dos dados via terminal chamando na classe ViaCep
$dadosCEP = ViaCep::consultarCEP($argv[1]);
print_r($dadosCEP);