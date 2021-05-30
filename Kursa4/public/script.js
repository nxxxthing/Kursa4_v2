document.getElementById('button').addEventListener('click',
    function () {
        document.querySelector('.bg-modal').style.display = 'flex';
    });

document.querySelector('.close').addEventListener('click', function () {
    document.querySelector('.bg-modal').style.display = 'none';
});


document.getElementById('button1').addEventListener('click',
    function () {
        document.querySelector('.bg-modal').style.display = 'flex';
    });

$(function (){
    $('.slider').slick({
        arrows: true,
        dots: true,
        infinite: true,
        speed: 300,
        slidesToShow: 1,
        adaptiveHeight: true,
    })
})
