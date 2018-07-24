<?php 

$cep="01001000";
$link="https://viacep.com.br/ws/01001000/json/";

$ch= curl_init($link);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); //VAI E VOLTA RESPOSTA
curl_setopt($ch,CURLOPT_SSL_VERIFYPEER, 0);

//excecutar
$response = curl_exec($ch);

curl_close($ch);

$data = json_decode($response,true);
//[""] específico
print_r($data["localidade"]);
 ?>

