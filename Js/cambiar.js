
document.addEventListener('DOMContentLoaded', function() {
    var slider = document.querySelector('.slider');
    function nextSlide() {
        slider.style.backgroundImage = 'url("../Img/bosu.png")';
    }

    setInterval(nextSlide, 10000); // Cambia la imagen cada 10 segundos
});
