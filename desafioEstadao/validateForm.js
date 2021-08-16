
function validarFormulario() {
    let titulo = document.forms["meuFormulario"]["titulo"].value;
    let subtitulo = document.forms["meuFormulario"]["subtitulo"].value;
    let conteudo = document.forms["meuFormulario"]["conteudo"].value;


    if (titulo == "") {
        alert("O título da notícia deve ser preechido.");
        return false;
    }

    if (subtitulo == "") {
        alert("O subtítulo da notícia deve ser preechido.");
        return false;
    }

    if (conteudo == "") {
        alert("O conteúdo da notícia deve ser preechido.");
        return false;
    }

}
