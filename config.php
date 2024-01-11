<?php

//CONFIGURAÇÕES DE CREDENCIAIS
$server = 'localhost';
$usuario = 'root';
$senha = '';
$banco = 'frimesa_banco';

//CONEXÃO COOM NOSSO BANCO DE DADOS
$conn = new mysqli($server, $usuario, $senha, $banco);

//VERIFICAR CONEXÃO
if($conn->connect_error){
  die("Falha ao se comunicar com banco de dados: ".$conn->connect_error);
}

?>