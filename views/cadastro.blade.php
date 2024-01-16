<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="cadastro.css">
    <title>Cadastro</title>
</head>
<body>
<div class="container">
      <img id="fod"src="images/ifood.png" alt="">
      <p>CADASTRO</p>
      <form action="#" method="post">
        <label for="nome">Nome completo:</label>
        <input type="text" id="nome" name="nome" required>
        <label for="email">E-mail:</label>
        <input type="email" id="email" name="email" required>
        <label for="senha">Senha:</label>
        <input type="password" id="senha" name="senha" required>
        <label for="confirma_senha">Confirmar senha:</label>
        <input type="password" id="confirma_senha" name="confirma_senha" required>
        <label for="telefone">Telefone:</label>
        <input type="tel" id="telefone" name="telefone" pattern="[0-9]{10}" placeholder="(XX)XXXX-XXXX" required>
        <button type="submit">Cadastrar</button>
      </form>
    </div>
</body>
</html>