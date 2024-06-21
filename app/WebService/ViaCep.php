<?php
namespace App\WebService;


class ViaCep{

/**
 * metodo responsavel por consultar um cep no viacep
 * @param string $cep
 * @return array
 */

    
    public static function consultarCEP($cep){
        //inicia o url
        $curl = curl_init();
        
        //configurações do curl
        curl_setopt_array($curl, [
            CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_CUSTOMREQUEST => 'GET',
            CURLOPT_SSL_VERIFYHOST => false,
            CURLOPT_SSL_VERIFYPEER => false,
        ]);

        //response
        $response = curl_exec($curl);

        if ($response === false) {
            echo 'Erro ao realizar a requisição cURL: ' . curl_error($curl);
        }
        
        //fecha a conexão curl
        curl_close($curl);
        
        //retorno da cep em json
        $array = json_decode($response ,true);
        return isset($array['cep']) ? $array : 'cep inválido';            

    }
    
    
}