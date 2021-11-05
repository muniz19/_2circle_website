<?php

include 'conexao.php';

$name = $_POST['nome'];
$sobrename = $_POST['sobrenome'];
$email = $_POST['email'];
$senha = $_POST['senha'];
$confirmesenha = $_POST['confirme-senha'];
$number = $_POST['idade'];
$tel = $_POST['telefone'];

$query = mysqli_query($conn, "INSERT INTO usuarios (nome, sobrenome, email, senha, confirme-senha, idade, telefone) 
VALUES ('$name', '$sobrename', '$email', '$senha', '$confirmesenha', '$number', '$tel')");

if($query){
    
    $q = mysqli_query($conn, "SELECT * FROM usuarios where nome='$name' and sobrenome='$sobrename'");
    while($row = mysqli_fetch_row($q)){
        $_SESSION['msg'] = $row[2];
    }
    

    header('Location: form-cadastro.php');
}





?>