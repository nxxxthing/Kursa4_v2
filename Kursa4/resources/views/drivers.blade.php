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


<p class="instructionName">Переваги роботи водієм з нами</p>
<div class="element">
    <img class="pic" src="page3/1.png">
    <div class="list">
        <p class="title">Заробляй більше грошей</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Справедлива комісія</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Гідний тариф</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Грошові бонуси та винагороди</p>
        </div>
    </div>
</div>

<div class="elementRev">
    <img class="pic" src="page3/2.png">
    <div class="list">
        <p class="title">Простіші умови</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Вільний графік роботи</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Відсутність обов’язкових замовлень</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Відсутність вступних платежів</p>
        </div>
    </div>
</div>

<div class="element">
    <img class="pic" src="page3/3.png">
    <div class="list">
        <p class="title">Більше можливостей</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Відкрита інформація про замовлення</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Клієнти з рейтингами та відгуками</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Пряма комунікація з пасажиром</p>
        </div>
    </div>
</div>

<div class="elementRev">
    <img class="pic" src="page3/4.png">
    <div class="list">
        <p class="title">Надійність та впевненість</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Безпечна співпраця</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Швидка підтримка</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Ми на зв’язку 24/7</p>
        </div>
    </div>
</div>


<div class="Block--greygrey">
    <p class="instructionName">Як стати нашим водієм</p>
    <div class="TotalServiceBlock">
        <div class="serviceBlock--drivers">
            <img class="el" src="page3/5.png">
            <p class="serviceText--drivers">Мати автомобіль</p>
        </div>
        <div class="serviceBlock--drivers">
            <img class="el" src="page3/6.png">
            <p class="serviceText--drivers">Мати смартфон або планшет</p>
        </div>
        <div class="serviceBlock--drivers">
            <img class="el" src="page3/7.png">
            <p class="serviceText--drivers">Зареєструватися на нашому сайті</p>
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
