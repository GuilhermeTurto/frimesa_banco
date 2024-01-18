<?php 
require_once 'config.php';

//PEGANDO OS DADOS VINDOS DO FORMULÁRIO
$nome = $_POST['nome'];
$email = $_POST['email'];
$colaborador = $_POST['colaborador'];
$loja = $_POST['loja'];
$cidade = $_POST['cidade'];
$nota = $_POST['nota'];
$observacoes = $_POST['observacoes'];
$data_atual = date('d/m/Y');
$hora_atual = date('H:i:s');

//PREPARAR COMANDO PARA TABELA
$smtp = $conn->prepare("INSERT INTO avaliacao (nome, email, colaborador, loja, cidade, nota, observacoes, data, hora) VALUES (?,?,?,?,?,?,?,?,?)");
$smtp->bind_param("sssssssss",$nome, $email, $colaborador, $loja, $cidade, $nota, $observacoes, $data_atual, $hora_atual);

//SE EXECUTAR CORRETAMENTE
if($smtp->execute()){
  echo "Mensagem enviada com sucesso!";
}else{
  echo "Erro no envio da mensagem: ".$smtp->error;
}

$smtp->close();
$conn->close();

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Mensagem enviada!</title>
</head>
<body>
  <h1>Mensagem enviada com sucesso!</h1>
</body>
</html>