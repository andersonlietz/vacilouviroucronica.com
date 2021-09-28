function leiaMais(){
var pontos=documet.getElementById ("pontos");
var maisTexto=document.getElementById ("mais");
var btnLeiaMais=document.getElementById ("btnLeiaMais");
if(pontos.style.display==="none"){
pontos.style.display="inline";
maisTexto.style.display="none";
btnLeiaMais.innerHTML="Leia Mais";
}else{

    pontos.stile.display="none";
maistexto.styledisplay="inline";
btnLeiaMais.innerHTML="Leia Menos";
}

}
let time=2000,
currentImageIndex = 0,
images = document
.querySelectorAll("#galeria img")
max = images.length;
function nextImage() {
    classList.remove("selected")
    currentImageIndex++

    if (
        currentImageIndex >= max)
    
    currentImageIndex=0
 images [currentImageIndex].classList.add("selected")
}
function start() {
    setInterval(()=>{
    //troca de image
    },time)

}
window.addEventListener("load", start)