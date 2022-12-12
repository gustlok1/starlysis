itens = document.querySelector(".main--projetos");
if(document.querySelectorAll('.main--projetos--item').length > 2){
    itens.style.justifyContent = "space-around";
}
else{
    itens.style.justifyContent = "flex-start";
}

function toggleUpload(){
    div = document.querySelector('.popup');
    if(div.classList == "popup active"){
        div.classList.toggle('active');
        setTimeout(()=>{document.querySelector(".popup--background").style.height="0vh"},100);
        setTimeout(()=>{div.style.display="none"},400);
    }
    else{
        setTimeout(()=>{div.classList.toggle('active')},200);
        setTimeout(()=>{document.querySelector(".popup--background").style.height="100vh"});
        div.style.display="flex";
    }
}

function ajustesTextos(){
    titulos = document.querySelectorAll(".main--projetos--tituloUnico");
    divs = document.querySelectorAll(".main--projetos--descricao");
    for($i=0;$i<divs.length;$i++){
        conteudoTitulo = titulos[$i].innerHTML;
        if(conteudoTitulo.length > 15){
            titulos[$i].innerHTML = conteudoTitulo.slice(0,15);
        }
        conteudo = divs[$i].innerHTML;
        divs[$i].innerHTML = conteudo.slice(0, 130) + "...";
    }
}
ajustesTextos()

//178
//data - 19 
//limite 15