<?php
session_start();
include_once('../model/userModel.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    if (isset($_POST['apagar'])) {
        if (isset($_POST['confirmacao']) && $_POST['confirmacao'] === 'true') {
            $email = $_SESSION['email'];

            if (apagarCadastro($email)) {
                session_destroy();
                header("Location: ../view/index.php");
                exit;
            } else {
                echo "<script>alert('Erro ao apagar a conta.');</script>";
                echo "<script>window.location.href = '../view/perfil.php';</script>";
            }
        } else {
            echo "<script>window.location.href = '../view/perfil.php';</script>";
            exit;
        }
    }
} else {
    header("Location: ../view/index.php");
}
?>