<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="max-width-1024px.css">
    <link rel="stylesheet" href="max-width-768px.css">
    <link rel="stylesheet" href="max-width-576px.css">
</head>
<body class="page">


<header>
    <div class="allHeader">
        <div class="Header">
            <p>Треба поїздка?</p>
            <a href="#" id="button" class="headerYelEl" style="color:#000000">
                <div class="headerYelEl"><p> Замовити
                        машину</p></div>
            </a>
            <p><a href="tel:+88005553535"> 8-800-555-35-35 </a></p>
        </div>
    </div>
    <div class="allMenu">
        <div class="Menu">
            <div class="logoANDtext">
                <img class="logo" src="page1/disability_1.png">
                <a href="web">FakeTaxi</a>
            </div>
            <div class="menu"><p><a href="clients">Клієнтам</a></p></div>
            <div class="menu"><p><a href="drivers">Водіям</a></p></div>
            <div class="menu"><p><a href="cities">Міста</a></p></div>
            <div class="menu"><p><a href="contacts">Контакти</a></p></div>
        </div>
    </div>


    <div class="allHeaderMobile">
        <div class="Header">
            <p>Треба поїздка?</p>
            <a href="#" id="button" class="headerYelEl" style="color:#000000">
                <div class="headerYelEl"><p> Замовити
                        машину</p></div>
            </a>
            <p><a href="tel:+88005553535"> 8-800-555-35-35 </a></p>
        </div>
    </div>
    <div class="allMenuMobile">
        <div class="Menu">
            <div class="logoANDtext">
                <img class="logo" src="page1/disability_1.png">
                <a href="web">FakeTaxi</a>
            </div>
            <div>
                <div class="dropdown">
                    <button onclick="myFunction()" class="dropbtn"
                            style="background: url(page1/image_14_1.png) no-repeat;">
                    </button>
                    <div id="myDropdown" class="dropdown-content">
                        <a href="web">Головна</a>
                        <a href="clients">Клієнтам</a>
                        <a href="drivers">Водіям</a>
                        <a href="cities">Міста</a>
                        <a href="contacts">Контакти</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
<div class="bg-modal">
    <div class="modal-content">
        <div class="close">+</div>
        <form action="web" method="POST">
            @csrf
            <p>Заповніть дані для замовлення</p>
            <input type="text" placeholder="Ім'я" name="name">
            <input type="text" placeholder="Номер" name="number">
            <input type="text" placeholder="Звідки" name="from">
            <input type="text" placeholder="Куди" name="where">
            <div class="check">
                <input type="radio" name="option" value="v1" checked="checked">Економ<Br>
                <input type="radio" name="option" value="v2">Комфорт<Br>
                <input type="radio" name="option" value="v3">Вантажне
            </div>
            <div class="smth">
                <button class="sub">Замовити</button>
            </div>
        </form>
    </div>
</div>

<p class="instructionName">Контакти</p>
<div class="FakeTaxi">
    <img class="application" src="page5/image_29.png">
    <div class="mobile">
        <p class="mobileTitle">Замовити таксi</p>
        <div class="phone"><img class="phoneImg" src="page5/phone-call_1.png">
            <p class="phoneNumber">8-800-555-35-35 </p>
        </div>
        <div class="phone"><img class="phoneImg" src="page5/phone-call_1.png">
            <p class="phoneNumber">0-800-444-77-22</p>
        </div>
        <div class="phone"><img class="phoneImg" src="page5/phone-call_1.png">
            <p class="phoneNumber">0-800-666-55-77</p>
        </div>
    </div>

    <div class="mobile">
        <p class="mobileTitle">Служба пiдтримки</p>
        <div class="phone"><img class="phoneImg" src="page5/phone-call_4.png">
            <p class="phoneNumber">fakeTaxi@gmail.com</p>
        </div>
        <p class="mobileTitle">Загальнi питання</p>
        <div class="phone"><img class="phoneImg" src="page5/phone-call_4.png">
            <p class="phoneNumber">fakeInfo@gmail.com</p>
        </div>
        <div class="icon">
            <img class="icon2" src="page5/image_6.svg">
            <img class="icon2" src="page5/image_7.svg">
            <img class="icon2" src="page5/viber_1.svg">
            <img class="icon2" src="page5/image_8.svg">
        </div>
    </div>
</div>


<div class="Block--black">
    <p class="Contacts">Контакти</p>
    <div class="allCont">
        <p class="adress">Адреса <br> вул. Політехнічна, 12 <br><br><br> Телефон <br> <a href="tel:+88005553535">
                8-800-555-35-35 </a></p>
        <div class="contact">
            <p class="contacts">Email <br> fakeTaxi@gmail.com<br><br>Ми в соціальних мережах</p>
            <div>
                <a href="https://www.facebook.com/groups/ElonMusk/" target="_blank" class="icon"> <img
                        src="page1/check-mark_7.svg"> </a>
                <a href="https://www.instagram.com/elonmusk/" target="_blank" class="icon"> <img
                        src="page1/check-mark_8.svg"> </a>
                <a href="viber://chat?number=%2B380987300911" class="icon"> <img src="page1/check-mark_9.svg"> </a>
                <a href="https://t.me/nxxxthing" target="_blank" class="icon"> <img src="page1/check-mark_10.svg"> </a>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
