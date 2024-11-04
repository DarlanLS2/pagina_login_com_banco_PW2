<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./assets/style.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Red+Hat+Mono:ital,wght@0,300..700;1,300..700&display=swap" rel="stylesheet">
  <title>Document</title>
</head>
<body>
  <main>
    <div class="boxTitulo">
      <h1>Login</h1>
    </div>
    <form action="./scripts/validarLogin.php" method="post">
      <div class="boxInput">
        <p for="email">Email:</p>
        <input type="text" name="email"/>
      </div>
      <div class="boxInput">
        <p for="senha">Senha:</p>
        <input type="text" name="senha"/>
      </div>
      <input class="inputSubmit" type="submit" value="Entrar">
    </form>
</main>
</body>
</html>