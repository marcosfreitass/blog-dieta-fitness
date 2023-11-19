<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    include_once "../model/userModel.php";

    $cpf = $_POST["CPF"];
    $nome = $_POST["nome"];
    $email = $_POST["email"];
    $senha = $_POST["senha"];

    $cadastroResult = cadastrar($cpf, $nome, $email, $senha);

    if ($cadastroResult) {
        echo "<script>alert('Cadastro bem sucedido. Por favor, faça o login!');";
        echo "window.location.href='../view/index.php';</script>";
        exit();
    } else {
        echo "<script>alert('CPF ou E-mail já cadastrados, tente outro.');";
        echo "window.location.href='../view/index.php';</script>";
        exit();
    }
}
?>