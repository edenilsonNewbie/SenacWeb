<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title><?php echo $title; ?></title>
        <link rel="stylesheet" href="/css/normalize.css">
        <link rel="stylesheet" href="/css/main.css">

        <!--  Importar a Fonte Roboto na página  -->
        <link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
    </head>
    <body>
        <div class="centralizar">
            <header id="cabecalho">                
                <!-- Adicionar .logo -->
                <a href="/" class="logo">
                    <img src="/img/logo_1.png" alt="Logo IMDB" />    
                </a>

                <!-- Adicionar Menu -->
                <nav class="menu">
                    <a class="menu-link" href="/">Home</a>
                    <a class="menu-link" href="/lista">Lista de Filmes</a>
                    <a class="menu-link" href="/sobre">Sobre</a>
                </nav>

                <!-- Adicionar Campo de Pesquisa -->
                <form class="form-pesquisa">
                    <input type="text" name="pesquisa" />
                    <button>Pesquisar</button>
                </form>
            </header>

            <?php include_once $page . '.php'; ?>

            <footer id="rodape">
                <p>
                    <!-- &copy; é um HTML Entities. -->
                    &copy; CopyRight - "Site do Link" - Todos os Direitos Reservados 
                    <br />

                    <!-- E-mail de Contato -->
                    <a href="mailto:ederimoldi@gmail.com">ederimoldi@gmail.com</a>
                </p>
            </footer>
        </div>

    </body>
</html>