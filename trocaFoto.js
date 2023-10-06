function trocarImagem(imagemMiniatura) {
    var imagemPrincipal = document.getElementById("imgProduto");
    imagemPrincipal.src = imagemMiniatura.src;
    imagemPrincipal.alt = imagemMiniatura.alt;
}