<?php

include 'conexao.php';

$name = $_POST['nome'];
$sobrename = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$number = $_POST['idade'];
$tel = $_POST['telefone'];

$query = mysqli_query($conn, "INSERT INTO usuarios (nome, sobrenome, email, senha, idade, telefone) 
VALUES ('$name', '$sobrename', '$email', '$senha', '$number', '$tel')");







?>