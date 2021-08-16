<?php

$arquivo = "noticias/noticia.json";
$resultado = json_decode(file_get_contents($arquivo));

foreach ($resultado as $key => $noticia) {
    //echo $noticia->titulo;
    //echo $noticia->subtitulo;
    //echo "<p>" . $noticia->conteudo . "</p>";
}

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="./icon/logo_estadao_single.png">
    <link rel="stylesheet" href="./estiloNoticia.css">
    <title>Notícia Cadastrada</title>

</head>

<body>

    <header>
        <nav id="navegacao">

            <ul>
                <div class="logo">
                    <a href="./index.php">
                        <img src="./img/background2.png" alt="#">
                    </a>
                </div>
                <li><a href="./index.php">Home</a></li>
                <li><a class="ativo" href="./noticia.php">Notícia</a></li>
                <li style="float: right;"><a href="./contato.php">Contato</a></li>
            </ul>

        </nav>

    </header>
    <section>

        <form>

            <fieldset>
                <legend>Notícia Cadastrada</legend>

                <div id="container">
                    <div class="titulo">
                        <p>
                            <?php echo "<h1>" . $noticia->titulo . "</h1>"; ?>
                        <p>
                    </div>
                    <div class="subtitulo">
                        <p>
                            <?php echo "<h2>" . $noticia->subtitulo . "</h2>"; ?>
                        </p>
                    </div>
                    <div class="conteudo">
                        <p>
                            <?php echo $noticia->conteudo; ?>
                        </p>
                    </div>
                </div>
            </fieldset>

        </form>

    </section>

    <footer>
        <div class="footer__social">
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