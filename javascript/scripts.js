

document.body.addEventListener('contextmenu',function(e){
    e.preventDefault();
    alert('Esta prohibido dar click derecho ')
});


var primerTexto = document.getElementById('primerTexto');
primerTexto.addEventListener('keyup', function(){
    if (primerTexto.value === 'secreto'){
        primerTexto.style.color = 'pink';
    }
});

primerTexto.addEventListener('dblclick',function(){
    primerTexto.style.fontSize = '50px';
});

primerTexto.addEventListener('focusout',function(){
    primerTexto.style.fontSize = '5px';
});



var segundoTexto = document.getElementById('segundoTexto');
segundoTexto.addEventListener('focus',function(){
    segundoTexto.style.visibility = "hidden";
});



document.body.addEventListener('keydown',function(e){
    var key = e.keyCode; 
    var ctrl = false;
    if(e.ctrlKey) ctrl = true
    
    if ( key == 67 && ctrl ) {
        e.preventDefault();
        alert('Esta prohibido copiar en la pagina')
    } 
});


var botonSubmit = document.getElementById('botonSubmit');
botonSubmit.addEventListener('mouseover',function(){
    botonSubmit.style.marginRight = '500px';
});



var footer = document.getElementById('footer-hotel');
footer.addEventListener('click',function(){
    footer.style.textDecoration = 'line-through';
});


document.body.addEventListener('wheel',function(){
    document.getElementById('admin').style.visibility = "visible";
});


document.getElementById('home').addEventListener('drag',function(){
    document.getElementById('admin').style.visibility = "hidden";
});




