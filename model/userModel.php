<?php

function conectarBanco() {
    $conexao = new mysqli("localhost", "root", "", "devweb");

    if ($conexao->connect_error) {
        die("Erro de conexão: " . $conexao->connect_error);
    }

    return $conexao;
}

function login($email, $senha) {
    $conexao = conectarBanco();

    $email = addslashes($email);
    $senha = addslashes($senha);

    $query = "SELECT * FROM cadastros WHERE email = '$email' AND senha = '$senha'";
    $result = $conexao->query($query);
    $usuario = $result->fetch_assoc();

    if ($result->num_rows > 0) {
        $_SESSION['cpf'] = $usuario['cpf'];
        $_SESSION['nome'] = $usuario['nome'];
        $_SESSION['email'] = $usuario['email'];
        $_SESSION['senha'] = $usuario['senha'];
        return true;
    } else {
        return false;
    }
}

function verificarCadastro($email, $cpf) {
    $conexao = conectarBanco();

    $email = addslashes($email);
    $cpf = addslashes($cpf);

    $query = "SELECT * FROM cadastros WHERE email = '$email' OR cpf = '$cpf'";
    $result = $conexao->query($query);

    return $result->num_rows > 0;
}

function cadastrar($cpf, $nome, $email, $senha) {
    if (verificarCadastro($email, $cpf)) {
        return false;
    }

    $conexao = conectarBanco();

    $cpf = addslashes($cpf);
    $nome = addslashes($nome);
    $email = addslashes($email);
    $senha = addslashes($senha);

    $query = "INSERT INTO cadastros VALUES (default,'$cpf','$nome', '$email', '$senha')";
    $result = $conexao->query($query);

    return $result;
}

function modificarCadastro($cpf, $nome, $email, $senha) {
    $conexao = conectarBanco();

    $email = addslashes($email);

    $query = "SELECT * FROM cadastros WHERE email = '$email' AND cpf <> '$cpf'";
    $result = $conexao->query($query);

    if ($result->num_rows > 0) {
        return false;
    }

    $query = "UPDATE cadastros SET nome='$nome', email='$email', senha='$senha' WHERE cpf='$cpf'";
    $result = $conexao->query($query);

    if ($result) {
        $_SESSION['nome'] = $nome;
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        return true;
    } else {
        return false;
    }
}

function apagarCadastro($email) {
    $conexao = conectarBanco();

    $email = addslashes($email);

    $query = "DELETE FROM cadastros WHERE email='$email'";
    $result = $conexao->query($query);

    if ($result) {
        session_destroy();
        header("Location: ../view/index.php");
        exit;
    } else {
        return false;
    }
}

?>