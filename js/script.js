
var btnElement = document.getElementById("btnLigar");

btnElement.addEventListener('click', function(){

    let element = document.createElement("LI");
    let textElem1 = document.createTextNode("<?php  $c = new ControleRemonto(); ?>");
    let textElem2 = document.createTextNode("<?php  $c->ligar(); ?>");
    // let textElem3 = document.createTextNode("<?php  $c->abrirMenu(); ?>");

    element.appendChild(textElem1);
    element.appendChild(textElem2);
    // element.appendChild(textElem3);

   var sle = document.getElementById('controle').appendChild(element);
    console.log(sle);




   
})
