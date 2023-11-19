<?php
session_start();
include_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['editar'])) {
        echo "<script>window.location.href='../view/perfil.php';</script>";
        exit();
    } elseif (isset($_POST['salvar'])) {
        $cpf = $_SESSION['cpf'];
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $senha = $_POST['senha'];

        if (modificarCadastro($cpf, $nome, $email, $senha)) {
            echo "<script>alert('Perfil modificado com sucesso!');</script>";
        } else {
            echo "<script>alert('Email já cadastrado para outro usuário, tente outro!');</script>";
        }

        echo "<script>window.location.href='../view/perfil.php';</script>";
        exit();
    }
}

header("Location: ../view/perfil.php");
?>