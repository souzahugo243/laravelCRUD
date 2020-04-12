// Menu Toogle
$("#menu-toggle").click(function(e) {
    e.preventDefault();
    $("#wrapper").toggleClass("toggled");
    });

//  Escondendo Div de Conteudo Cabecalho Card Header
setTimeout(function(){
var a = document.getElementById("cabecalho-card-header");
a.style="display:none"
}, 5000);

