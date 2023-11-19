<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8" />
    <title>Blog Dieta Fitness</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>

    <main class="container" id="container">

        <section class="form-container sign-up-container">
            <form action="../controller/cadastroController.php" method="POST" onsubmit="return validateCadastro()">
                <h2>CRIAR CONTA</h2>
                <span class="h3">Realize seu Cadastro</span>
                <input oninput="cpfValidateCadastro()" class="form-control" type="text" id="CPF" name="CPF"
                    placeholder="CPF" pattern="(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}/?\d{4}-?\d{2})">
                <span class="span-required"></span>
                <input oninput="nomeValidateCadastro()" class="form-control" type="text" id="nome" name="nome"
                    placeholder="Nome">
                <span class="span-required"></span>
                <input oninput="emailValidateCadastro()" class="form-control" type="email" id="emailCadastro"
                    name="email" placeholder="E-mail">
                <span class="span-required"></span>
                <input oninput="senhaValidateCadastro()" class="form-control" type="password" id="senhaCadastro"
                    name="senha" placeholder="Senha">
                <span class="span-required"></span>
                <input id="cadastrar" type="submit" value="CADASTRAR">
            </form>
        </section>

        <section class="form-container sign-in-container">
            <form action="../controller/loginController.php" method="POST" onsubmit="return validateLogin()">
                <h2>ENTRAR</h2>
                <div class="social-container">
                </div>
                <span class="h3">Faça seu Login</span>
                <input class="form-control" type="email" id="emailLogin" name="email" placeholder="E-mail">
                <span class="span-required">E-mail não cadastrado!</span>
                <input class="form-control" type="password" id="senhaLogin" name="senha" placeholder="Senha">
                <span class="span-required">Senha incorreta!</span>
                <input id="logar" type="submit" value="LOGAR">
            </form>
        </section>

        <section class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-left">
                    <h2>BEM-VINDO(A) DE VOLTA!</h2>
                    <h3 class="h3">Blog Dieta Fitness</h3>
                    <p>
                        Para manter-se conectado conosco, faça login com suas informações pessoais.
                    </p>
                    <button class="ghost" id="entrar">ENTRAR</button>
                </div>
                <div class="overlay-panel overlay-right">
                    <h2>SEJA BEM VINDO(A)!</h2>
                    <h3 class="h3">Blog Dieta Fitness</h3>
                    <p>Insira seus dados pessoais para se cadastrar na nossa plataforma!</p>
                    <button class="ghost" id="inscrever">Inscreva-se</button>
                </div>
            </div>
        </section>

    </main>

    <script>
    const inscreverButton = document.getElementById("inscrever");
    const entrarButton = document.getElementById("entrar");
    const container = document.getElementById("container");
    const camposCadastro = document.querySelectorAll('.form-container.sign-up-container .form-control');
    const spansCadastro = document.querySelectorAll('.form-container.sign-up-container .span-required');
    const camposLogin = document.querySelectorAll('.form-container.sign-in-container .form-control');
    const spansLogin = document.querySelectorAll('.form-container.sign-in-container .span-required');

    inscreverButton.addEventListener("click", () => {
        container.classList.add("right-panel-active");
    });

    entrarButton.addEventListener("click", () => {
        container.classList.remove("right-panel-active");
    });

    function setError(spansArray, camposArray, index, message) {
        spansArray[index].textContent = message;
        spansArray[index].style.display = 'inline';
        camposArray[index].style.border = '3px solid #e63636';
    }

    function removeError(spansArray, camposArray, index) {
        spansArray[index].style.display = 'none';
        camposArray[index].style.border = '';
    }

    function cpfValidateCadastro() {
        const cpfRegex = /^(\d{3}\.?\d{3}\.?\d{3}-?\d{2})|(\d{2}\.?\d{3}\.?\d{3}\/?\d{4}-?\d{2})$/;
        const cpf = camposCadastro[0].value;

        if (!cpfRegex.test(cpf)) {
            setError(spansCadastro, camposCadastro, 0, 'Exemplo: 123.456.789-00');
        } else {
            removeError(spansCadastro, camposCadastro, 0);
        }
    }

    function nomeValidateCadastro() {
        const nome = camposCadastro[1].value;

        if (nome.length < 15) {
            setError(spansCadastro, camposCadastro, 1, 'Mínimo 15 caracteres');
        } else {
            removeError(spansCadastro, camposCadastro, 1);
        }
    }

    function emailValidateCadastro() {
        const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        const email = camposCadastro[2].value;

        if (!emailRegex.test(email)) {
            setError(spansCadastro, camposCadastro, 2, 'Exemplo: exemplo123@gmail.com');
        } else {
            removeError(spansCadastro, camposCadastro, 2);
        }
    }

    function senhaValidateCadastro() {
        const senha = camposCadastro[3].value;

        if (senha.length < 8) {
            setError(spansCadastro, camposCadastro, 3, 'Mínimo de 8 caracteres');
        } else {
            removeError(spansCadastro, camposCadastro, 3);
        }
    }

    function emailValidateLogin() {
        const emailRegex = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
        const email = camposLogin[0].value;

        if (!emailRegex.test(email)) {
            setError(spansLogin, camposLogin, 0, 'Exemplo: exemplo123@gmail.com');
        } else {
            removeError(spansLogin, camposLogin, 0);
        }
    }

    function senhaValidateLogin() {
        const senha = camposLogin[1].value;

        if (senha.length < 8) {
            setError(spansLogin, camposLogin, 1, 'Mínimo de 8 caracteres');
        } else {
            removeError(spansLogin, camposLogin, 1);
        }
    }

    camposCadastro[0].addEventListener("input", cpfValidateCadastro);
    camposCadastro[1].addEventListener("input", nomeValidateCadastro);
    camposCadastro[2].addEventListener("input", emailValidateCadastro);
    camposCadastro[3].addEventListener("input", senhaValidateCadastro);

    camposLogin[0].addEventListener("input", emailValidateLogin);
    camposLogin[1].addEventListener("input", senhaValidateLogin);

    function validateLogin() {
        emailValidateLogin();
        senhaValidateLogin();

        for (let i = 0; i < spansLogin.length; i++) {
            if (spansLogin[i].style.display === 'inline') {
                alert("Cadastro não encontrado.");
                return false;
            }
        }

        return true;
    }

    function validateCadastro() {
        cpfValidateCadastro();
        nomeValidateCadastro();
        emailValidateCadastro();
        senhaValidateCadastro();

        for (let i = 0; i < spansCadastro.length; i++) {
            if (spansCadastro[i].style.display === 'inline') {
                alert("Por favor, preencha todos os campos corretamente.");
                return false;
            }
        }

        return true;
    }
    </script>

</body>

</html>