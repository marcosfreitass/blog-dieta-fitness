<?php
    session_start(); 
    if((!isset($_SESSION["email"]) == true) and (!isset($_SESSION["senha"]) == true)){
        unset($_SESSION["email"]);
        unset($_SESSION["senha"]);
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog Dieta Fitness</title>

    <!-- link css -->
    <link rel="stylesheet" href="css/nutricao.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<body>

    <!-- seção onde cabeçalho começa -->
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
    <!-- seçao onde cabeçalho termina -->

    <!-- onde o main começa-->
    <main>
        <!-- onde a seção inicial começa -->
        <section class="home">
            <div class="content">
                <h3>Bem-vindo ao nosso site! Está pronto para ter uma vida saudável?</h3>
            </div>
        </section>
        <!-- seção inicial termina -->

        <!-- inicio da seção sobre nos -->
        <section class="about" id="about">
            <h1 class="heading">SOBRE NÓS</h1>
            <div class="row">
                <div class="content">
                    <h3>A missão da nossa equipe é fornecer orientações para aprimorar sua saúde</h3>
                    <p>A saúde é um bem precioso que todos devemos valorizar. Uma alimentação equilibrada é fundamental
                        para
                        a saúde. Inclua uma variedade de frutas, legumes, grãos integrais, proteínas magras e gorduras
                        saudáveis em suas refeições. A atividade física regular pode ajudar a prevenir muitas doenças
                        crônicas, além de melhorar o humor e reduzir o estresse. Beber água suficiente todos os dias é
                        essencial para manter o corpo funcionando corretamente. O sono de qualidade é tão importante
                        para a
                        saúde quanto a dieta e o exercício. Tente manter uma rotina regular de sono. Visitas regulares
                        ao
                        médico para check-ups podem ajudar a detectar problemas de saúde antes que se tornem sérios.
                        Lembre-se, cada pessoa é única e pode precisar de diferentes tipos de cuidados de saúde. Sempre
                        consulte um profissional de saúde para obter conselhos personalizados. Sua saúde é sua maior
                        riqueza!</p>
                </div>
                <div class="image">
                    <img src="img/abacaxi.jpg" alt="">
                </div>
            </div>
        </section>
        <!-- fim da seção sobre nos -->

        <!-- inicio da seção de nosso plano -->
        <section class="services" id="services">
            <h1 class="heading">nosso plano</h1>
            <div class="box-container">
                <div class="box">
                    <div class="icon">
                        <img src="img/service-1.png" alt="">
                    </div>
                    <div class="content">
                        <h3>Assine nosso plano gratuito e receba dieta e acompanhamento gratuitamente, tanto no WhatsApp
                            quanto por e-mail.:</h3>
                        <div class="line"></div>
                        <p>PLANO NUTRICIONAL</p>
                        <ul>
                            <li><i class="fas fa-check"></i>Acompanhamento semanal com nosso nutricionista</li>
                            <li><i class="fas fa-check"></i>Acompanhamento com nosso educador físico</li>
                            <li><i class="fas fa-check"></i>Aplicativo para você organizar sua dieta</li>
                            <li><i class="fas fa-check"></i>Videochamada a cada 2 semanas para feedback da sua evolução
                            </li>
                    </div>
                </div>
            </div>
        </section>
        <!-- fim da seção nosso plano -->

        <section class="pricing" id="pricing">
            <h1 class="heading">Benefícios</h1>
            <div class="box-container">
                <div class="box">
                    <h3 class="title">PLANO GRATUITO</h3>
                    <div class="price">
                        <span class="currency">R$</span>
                        <span class="amount">00,00</span>
                        <span class="duration">Reais</span>
                    </div>
                    <ul>
                        <li> <i class="fas fa-check"></i> Plano de nutrição</li>
                        <li> <i class="fas fa-check"></i> Plano de Treino</li>
                        <li> <i class="fas fa-check"></i> Medição Corporal</li>
                    </ul>
                    <p>30 dias de consultoria</p>
                    <p>3 Personal Trainer</p>
                    <a href="#" class="btn">Consulte para mais informações</a>
                </div>
            </div>
            <div class="box-container">
                <div class="box">
                    <h3 class="title">PLANO PREMIUM</h3>
                    <div class="price">
                        <span class="currency">R$</span>
                        <span class="amount">95</span>
                        <span class="duration"> 3meses</span>
                    </div>
                    <ul>
                        <li> <i class="fas fa-check"></i>Plano Premium nutrição</li>
                        <li> <i class="fas fa-check"></i>Plano Premium Treino</li>
                        <li> <i class="fas fa-check"></i>Chamada de video diaria</li>
                    </ul>
                    <p>90 dias de consultoria</p>
                    <p>Treino Sempre com consultoria esporti</p>
                    <p>Treino e dieta sempre atualizados</p>
                    <a href="#" class="btn">Mais informações</a>
                </div>
            </div>
        </section>
        <!-- incio planos dieta dia a dia -->
        <section class="diet" id="diet">
            <h1 class="heading">Exemplos Dieta </h1>
            <div class="controls">
                <div class="buttons active" data-filter="all">
                    <img src="img/diet-1.png" alt="">
                    <h3>JANTA</h3>
                </div>
                <div class="buttons" data-filter="breakfast">
                    <img src="img/diet-2.png" alt="">
                    <h3>CAFÉ DA MANHÃ</h3>
                </div>
            </div>
            <div class="image-container">
                <div class="box lunch">
                    <div class="image">
                        <img src="img/hamburguer.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>HAMBÚRGUER ARTESANAL COM SALADA NATURAL.</h2>
                        <p>Ótimo valor em proteínas e carboidratos.</p>
                    </div>
                </div>
                <!-- <div class="box lunch">
                    <div class="image">
                        <img src="img/hamburguer.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>HAMBÚRGUER ARTESANAL COM SALADA NATURAL.</h2>
                        <p>Ótimo valor em proteínas e carboidratos.</p>
                    </div>
                </div> -->
                <div class="box breakfast">
                    <div class="image">
                        <img src="img/macarrao.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>MACARRÃO COM CARNE MOÍDA</h2>
                        <p>Ótimo valor nutricional e equilíbrio em carboidratos e proteínas.</p>
                    </div>
                </div>
                <div class="box breakfast">
                    <div class="image">
                        <img src="img/legumes.jpg" alt="">
                    </div>
                    <div class="content">
                        <h2>FRUTAS E VERDURAS</h2>
                        <p>Ótimo para equilíbrio de enzimas e alta fonte de fibra.</p>
                    </div>
                </div>
        </section>
        <!-- fim do plano dieta dia a dia -->
        <!-- seção de inscreva-se -->
        <!-- fim da seção inscreva-se -->
    </main>
    <!--fim do Main-->

    <!-- Inicio rodape final -->
    <footer>
        <section class="newsletter">
            <div class="content">
                <h1 class="heading">Inscrição abaixo</h1>
                <p>Coloquei seu e-mail abaixo. Você receberá um link para dar seguimento ao seu atendimento gratuito.
                </p>
                <form action="">
                    <input type="email" placeholder="Seu E-mail" class="email">
                    <input type="submit" value="Inscreva-se" class="btn">
                </form>
                <span>
                    &copy;Copyright Blog Dieta Fitness 2023-
                </span>
            </div>
        </section>
    </footer>
    <!-- FIM DO RODAPÉ-->
    <!-- segue link cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- segue swiper cdn link -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
    <!-- segue link javascript link -->
    <script src="script.js"></script>
</body>

</html>