document.addEventListener('DOMContentLoaded', function() {
    var slider = document.querySelector('.slider');
    var slides = document.querySelectorAll('.slider img');
    var currentSlide = 0;
    var slideWidth = slides[0].clientWidth;

    function nextSlide() {
        currentSlide = (currentSlide + 1) % slides.length;
        slider.style.transform = 'translateX(' + (-slideWidth * currentSlide) + 'px)';
    }

    setInterval(nextSlide, 10000); // Cambia la imagen cada 10 segundos
});
