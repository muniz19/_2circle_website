<?php

include 'conexao.php';
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD - Cadastrar</title>
</head>
<body>
    <h1>Cadastrar Usuario</h1>
    
    <form method="POST" action="form-cadastro.php">
     <label>Nome: </label>
     <input type="nome" name="nome" placeholder="Digite seu nome"><br><br>

     <label>Sobrenome: </label>
     <input type="sobrenome" name="sobrenome" placeholder="Digite seu Sobrenome"><br><br>

     <label>E-mail: </label>
     <input type="email" name="email" placeholder="Digite seu email"><br><br>

     <label>Senha: </label>
     <input type="password" name="senha" placeholder="Digite sua senha"><br><br>
     
     <label>Confirme sua senha: </label>
     <input type="password" name="confirme-senha" placeholder="Confirme sua senha"><br><br>

     <label>Idade: </label>
     <input type="number" name="idade" placeholder="Digite sua idade"><br><br>

     <label>Telefone: </label>
     <input type="tel" name="Telefone" placeholder="Digite seu telefone"><br><br>

      <input type="submit" value="Cadastre-se">
    </form>
</body>
</html>


