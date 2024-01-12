<?php
require_once 'config.php';

$senhaSecreta = "130314";
if($_SERVER["REQUEST_METHOD"]== "GET"){
    $senhadigitada = $_POST['senha'];

    if($senhadigitada === $senhaSecreta){
        $sql = "SELECT * FROM avaliacao";
        $result = $conn->query($sql);
    }else{
        echo "<h1>senha Incorreta!</h1>";
    }
}

?>

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
        display: flex;
        flex-flow: column;
        background: #e6e6e6;
        padding: 10px;
        margin-top: 20px;
        border-radius: 10px;
}
  </style>
</head>
<body>
    <form action="exibicao.php" method="get">
        <label for="senha">Senha:</label>
        <input type="password" name="senha" placeholder="Digite sua senha" required>
        <button type="submit">Enviar</button>
    </form>

    

</body>
</html>