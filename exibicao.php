<?php
require_once 'config.php';

$senhaSecreta = "130314";
if($_SERVER["REQUEST_METHOD"]== "POST"){
    $senhadigitada = $_POST['senha'];

    if($senhadigitada === $senhaSecreta){
        $sql = "SELECT * FROM avaliacao";
        $result = $conn->query($sql);
    }else{
        echo "<h1>senha Incorreta!</h1>";
    }
}

?>

<div class="mensagens">
      <?php if(isset($result) && $result->num_rows >0) : ?>
        <h2 style="text-align:center;">Avaliações concluídas!</h2>
        <ul>
            <?php while($row = $result->fetch_assoc()) : ?>
              <li>
                    <strong>Nome: </strong>  <?php echo $row["nome"]; ?><br>
                    <strong>email: </strong>  <?php echo $row["email"]; ?><br>
                    <strong>Colaborador: </strong>  <?php echo $row["colaborador"]; ?><br>
                    <strong>Loja: </strong>  <?php echo $row["loja"]; ?><br>
                    <strong>Cidade: </strong>  <?php echo $row["cidade"]; ?><br>
                    <strong>nota: </strong>  <?php echo $row["nota"]; ?><br>
                    <strong>Observação: </strong>  <?php echo $row["observacoes"]; ?><br>
                    <strong>Data e Hora: </strong>  <?php echo $row["data"]." às".$row["data"]; ?><br><br>
              </li>
              <?php endwhile; ?>
        </ul>
      <?php else : ?>
        <p>Nenhuma mensagem encontrada. </p>
        <?php endif; ?>
    </div>

    <!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Exibição de mensagens</title>
  <style>
      body {
          font-family: Arial, Helvetica, sans-serif;
          background-image: linear-gradient(45deg, rgb(255, 72, 0), rgb(255, 196, 0));
          width: 100vw;
          height: 100vh;
          display: flex;
          justify-content: center;
          align-items: center;
          flex-flow: column;
      }

      form {
          background: rgb(0, 0, 0, 0.8);
          color: white;
          display: flex;
          flex-flow: column wrap;
          padding: 40px;
          border-radius: 10px;
          border: none;
      }

      input {
          width: 90%;
          height: 30px;
          margin-top: 15px;
          margin-bottom: 15px;
          padding: 10px;
          border: none;
      }

      textarea {
          width: 90%;
          margin-top: 15px;
          margin-bottom: 15px;
          padding: 10px;
          border: none;
      }

      button {
          background: dodgerblue;
          color: white;
          padding: 15px 10px;
          border: none;
          border-radius: 10px;
          cursor: pointer;
      }

button:hover {
         background-color: deepskyblue;
}

.mensagens {
        font-family: Arial, Helvetica, sans-serif;
        display: flex;
        flex-flow: column;
        background: #e6e6e6;
        padding: 20px;
        margin-top: 20px;
        border-radius: 10px;
}
  </style>
</head>
<body>