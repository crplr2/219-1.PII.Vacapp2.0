window.addEventListener('resize',function(){
    document.getElementById('acercaTexto').style.fontSize = '5px';
});



document.body.addEventListener('copy',function(){
    document.getElementById('acercaTexto').style.transform = 'rotate(20deg)';
});


document.body.addEventListener('keypress',function(){
    alert('Para que quieres escribir  si no hay donde??');
});

document.body.addEventListener('paste',function(){
    alert('Para que quieres pegar si no hay donde??');
});


document.getElementById('header').addEventListener('mouseup',function(){
    document.getElementById('header').style.backgroundColor = 'purple';
});


document.getElementById('header').addEventListener('dblclick',function(){
    document.getElementById('header').style.backgroundColor = 'red';
});



document.getElementById('acercaImagen').addEventListener('auxclick',function(){
    document.getElementById('acercaImagen').src = 'https://cdn2-www.dogtime.com/assets/uploads/gallery/30-impossibly-cute-puppies/impossibly-cute-puppy-30.jpg';
});


document.getElementById('footer-hotel').addEventListener('mousemove',function(){
    document.getElementById('footer-hotel').style.backgroundColor = 'purple';
});


document.getElementById('acercaImagen').addEventListener('dragstart',function(){
    document.getElementById('acercaImagen').src = 'https://img.buzzfeed.com/buzzfeed-static/static/2017-01/31/16/asset/buzzfeed-prod-fastlane-01/sub-buzz-29032-1485899452-1.jpg?crop=625:630;0,60&downsize=700:*&output-format=auto&output-quality=auto';
});


document.getElementById('footer-hotel').addEventListener('mouseleave',function(){
    document.getElementById('footer-hotel').style.backgroundColor = 'red';
});




