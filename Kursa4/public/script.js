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
        speed: 1250,
        slidesToShow: 1,
        adaptiveHeight: true,
    })
})

function myFunction() {
    document.getElementById("myDropdown").classList.toggle("show");
}


window.onclick = function(event) {
    if (!event.target.matches('.dropbtn')) {

        var dropdowns = document.getElementsByClassName("dropdown-content");
        var i;
        for (i = 0; i < dropdowns.length; i++) {
            var openDropdown = dropdowns[i];
            if (openDropdown.classList.contains('show')) {
                openDropdown.classList.remove('show');
            }
        }
    }
}
