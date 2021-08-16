<?php

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    function get_data()
    {
        $informacao = array();
        $informacao[] = array(
            'titulo' => $_POST['titulo'],
            'subtitulo' => $_POST['subtitulo'],
            'conteudo' => $_POST['conteudo'],
        );
        return json_encode($informacao);
        echo $informacao['titulo'];
    }

    $nome = "noticia";
    $arquivo_nome = 'noticias/' . $nome . '.json';
    file_put_contents("$arquivo_nome", get_data());

    header('Location:noticia.php');
}
?>