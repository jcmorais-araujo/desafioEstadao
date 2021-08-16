<!DOCTYPE html>
<html lang="pt-br">

<head>

    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/logo_estadao_single.png">

    <link rel="stylesheet" href="./estiloIndex.css">

    <title>Notícias</title>

</head>

<body>

    <header>

        <nav id="navegacao">

            <ul>
                <div class="logo">
                    <a href="./index.php">
                        <img src="./img/background2.png" alt="">
                    </a>
                </div>
                <li><a class="ativo" href="./index.php">Home</a></li>
                <li><a href="./noticia.php">Notícia</a></li>
                <li style="float: right;"><a href="./contato.php">Contato</a></li>
            </ul>

        </nav>

    </header>
    <section>

        <form action="post.php" method="post" onsubmit="return validarFormulario()" name="meuFormulario">
            <fieldset>
                <legend>Nova notícia</legend>

                <div id="container">

                    <div class="titulo">
                        <label>Título:</label>
                        <input type="text" name="titulo" id="titulo">
                    </div>

                    <div class="subtitulo">
                        <label>Subtítulo:</label>
                        <input type="text" name="subtitulo" id="subtitulo">
                    </div>

                    <div class="conteudo">
                        <label>Conteúdo:</label>
                        <textarea name="conteudo" id="conteudo"></textarea>
                    </div>

                    <div class="enviar">
                        <button id="submit" type="submit" name="submit">Cadastrar</button>
                    </div>

                </div>
                
            </fieldset>

        </form>

    </section>

    <footer>
        <div class="footerSocial">
            <a href="https://www.linkedin.com/in/jo%C3%A3o-carlos-morais/" target="_blank">
                <img src="./icon/linkedin.svg" alt="linkedIn">
            </a>
            <a href="https://github.com/jcmorais-araujo" target="_blank">
                <img src="./icon/github.svg" alt="gitHub">
            </a>
            <a href="mailto:jcmorais.araujo@gmail.com" target="_blank">
                <img src="./icon/envelope-fill.svg" alt="email">
            </a>
            <a href="https://www.instagram.com/joca_morais/" target="_blank">
                <img src="./icon/instagram.svg" alt="instagram">
            </a>
        </div>
    </footer>

    <script src="./validateForm.js"></script>

</body>

</html>