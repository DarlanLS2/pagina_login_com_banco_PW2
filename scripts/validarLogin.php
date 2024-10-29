<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <?php
    include "../config/conexaoBanco.php";
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $email = $_POST["email"];
      $senha = $_POST["senha"];
      $query = mysqli_query($conexao, "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'");
      if (mysqli_num_rows($query) > 0) {
        echo "Sucesso ao fazer Login";
      } else {
        echo "Digite um email e senha valido";
      };
    }
  ?>
</body>
</html>