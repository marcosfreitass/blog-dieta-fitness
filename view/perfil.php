<?php
session_start();

if ((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true)) {
    unset($_SESSION["email"]);
    unset($_SESSION["senha"]);
    header("Location: index.php");
    exit();
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dieta Fitness</title>

    <!--icone-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Existem diversas formas de linkar o css ao html, posso adicionar a tag style e escrever o css por aqui no html ou linkar o arquivo, como estou fazendo agora, para linkar o arquivo, digite "/" e o localize-->

    <link rel="stylesheet" href="css/perfil.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">

</head>

<body>

    <header class="header">
        <a href="nutricao.php" class="logo"> BLOG DIETA FITNESS</a>
        <nav class="navbar">
            <a href="nutricao.php">Início</a>
            <a href="perfil.php">Perfil</a>
            <a href="nutricao.php#about">Sobre</a>
            <a href="nutricao.php#services">Nosso Plano</a>
            <a href="../controller/sair.php" class="input">Deslogar</a>
        </nav>
        <div class="fas fa-bars" id="menu"></div>
    </header>

    <!--Esse comando input é para criar uma caixa de texto para digitar, o placeholder é para adicionar um nome dentro caixa de texto-->
    <!-- Quando colocamos o type do input como password, ele se transforma em senha, não mostrando quais caracteres são digitados-->
    <!-- O br no caso está sendo usado para quebra de linha, cada br quebra 1 linha-->
    <!-- o H1 é um título, o maior que tem-->
    <!-- A div cria um bloco, um espaço vazio para ser usado-->
    <!-- O comando button cria um botão, o nome dele é: enviar-->
    <!-- A class é uma maneira de identificar um grupo de elementos como abaixo, já o Id é um identificador único para um elemento. -->

    <main>
        <section class="tela-login">
            <h1>Meu Perfil</h1>
            <div class="col-md-9">
                <div class="tab-content">
                    <div class="tab-pane fade active show" id="account-general">
                        <div class="card-body media align-items-center">
                            <img src="img/icon-usuario.png" alt class="d-block ui-w-80">
                            <div class="media-body ml-4">
                                <form method="post" action="../controller/modificarController.php" id="formEditar">
                                    <label class="btn btn-outline-primary"></label> &nbsp;
                                    <input type="text" placeholder="CPF" class="cpf" name="cpf" readonly
                                        value="<?php echo $_SESSION['cpf']; ?>">
                                    <input type="text" name="nome" placeholder="nome" class="login" readonly
                                        value="<?php echo $_SESSION['nome']; ?>">
                                    <input type="email" name="email" placeholder="email" class="login" readonly
                                        value="<?php echo $_SESSION['email']; ?>">
                                    <input type="password" name="senha" placeholder="senha" class="login" readonly
                                        value="<?php echo $_SESSION['senha']; ?>">
                                    <button type="button" name="editar" class="button" onclick="habilitarModificacao()"
                                        id="botaoEditar">Editar Conta</button>
                                    <button type="submit" name="salvar" class="button" style="display: none;">Salvar
                                        Alterações</button>
                                </form>
                                <form method="POST" action="../controller/apagarController.php"
                                    onsubmit="return confirmarExclusao();">
                                    <input type="hidden" name="confirmacao" id="confirmacao" value="false">
                                    <button type="submit" name="apagar" class="button">Apagar Conta</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <script>
    function habilitarModificacao() {
        let camposEntrada = document.querySelectorAll('.login');
        camposEntrada.forEach(function(campo) {
            campo.removeAttribute('readonly');
        });
        let botaoEditar = document.getElementById('botaoEditar');
        botaoEditar.innerHTML = 'Salvar';
        botaoEditar.setAttribute('onclick', 'salvarEdicoes()');
        botaoEditar.style.display = 'none';
        document.querySelector('button[name="salvar"]').style.display = 'inline-block';
    }

    function salvarEdicoes() {
        alert('As informações do usuário foram alteradas com sucesso!');
        document.getElementById('formEditar').submit();
    }

    function confirmarExclusao() {
        let confirmacao = confirm('Tem certeza que deseja apagar sua conta? Não será possível voltar atrás!');
        document.getElementById('confirmacao').value = confirmacao ? 'true' : 'false';
        return confirmacao;
    }
    </script>
    <!-- segue link cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- segue swiper cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- segue link javascript link -->
    <script src="script.js"></script>
</body>

</html>