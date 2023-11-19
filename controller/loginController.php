<?php
session_start();
include_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $email = $_POST['email'];
    $senha = $_POST['senha'];

    if (login($email, $senha)) {
        $_SESSION['email'] = $email;
        $_SESSION['senha'] = $senha;
        header("Location: ../view/nutricao.php");
    } else {
        echo "<script>alert('Cadastro não encontrado, o login falhou! ');</script>";
        echo "<script>window.location.href = '../view/index.php';</script>";
    }
} else {
    header("Location: ../view/index.php");
}
?>