<?php
include('conexao.php');

$email = $_POST['email'];
$senha = $_POST['senha'];

        $sql_code = "SELECT * FROM usuarios WHERE email = '$email' AND senha = '$senha'";
        $sql_query = mysqli_query($conn, $sql_code);

        $quantidade = $sql_query->num_rows;

        if($quantidade == 1) {

            $usuario = $sql_query->fetch_assoc();

            if(!isset($_SESSION)) {
                session_start();
            }

            $_SESSION['id'] = $usuario['id'];
            $_SESSION['nome'] = $usuario['nome'];

            header("Location: ponte-login.php");
        } else {
            echo "Falha ao logar! E-mail ou senha incorretos";
           

            } 
?>