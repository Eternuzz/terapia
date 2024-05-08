function Good(value){
    var icono = document.querySelector('.icono_modal');
    var c = document.querySelector('.modal_alerta');
    var text = document.querySelector('.text_modal');




    if(value=="Si"){
        icono.style.backgroundImage = 'url("../Img/checked.png")';
        text.textContent = 'Succes!';
    }else if(value=="No"){
        icono.style.backgroundImage = 'url("../Img/mal.png")';
        text.textContent = 'Error!';
    }

    c.style.display = 'flex';


    setTimeout(function() {
      c.style.display = 'none';
     }, 3000);
      
}