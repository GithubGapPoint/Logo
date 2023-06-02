const images = document.querySelectorAll('.slider-item');
const sliderLine = document.querySelector('.slider-line');
let count = 0;
let width;
var spanElement = document.querySelector(".value-left");

function init() {
    width = document.querySelector('.slider').offsetWidth;
    sliderLine.style.width = width * images.length + 'px';
    images.forEach(item => {
        item.style.width = width + 'px'
        item.style.height = 'auto'
    });
    rollSlider()
}
window.addEventListener('resize', init)
init();
document.querySelector('.slider-next').addEventListener('click', function() {
    count++;
    if (count >= images.length) {
        count = 0;
    }
    spanElement.innerHTML = (count + 1).toString();
    rollSlider();
});

document.querySelector('.slider-prev').addEventListener('click', function() {
    count--;
    if (count < 0) {
        count = images.length - 1;
    }
    spanElement.innerHTML = (count + 1).toString();
    rollSlider();
});

    // spanElement.innerHTML = (count + 1).toString();

function rollSlider() {
    sliderLine.style.transform = 'translate(-' + count * width + 'px)'
}