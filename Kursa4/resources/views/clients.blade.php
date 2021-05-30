<!DOCTYPE html>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('style.css') }}" rel="stylesheet">
    <link href="{{ asset('max-width-1024px.css') }}" rel="stylesheet">
    <link href="{{ asset('max-width-768px.css') }}" rel="stylesheet">
    <link href="{{ asset('max-width-576px.css') }}" rel="stylesheet">
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

<p class="instructionName">Переваги поїздок з нами</p>
<div class="element">
    <img class="pic" src="page2/image_1.png">
    <div class="list">
        <p class="title">Комфорт завжди і всюди</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Виклик авто в 27 містах України</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Зручне замовлення з додатку або за номером телефону</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Поїздки містом і між містами</p>
        </div>
    </div>
</div>

<div class="elementRev">
    <img class="pic" src="page2/image_2.png">
    <div class="list">
        <p class="title">Врахуємо всі побажання</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Маршрут на кілька адрес</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Вибір класу авто і опцій замовлення</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Точна ціна поїздки</p>
        </div>
    </div>
</div>

<div class="element">
    <img class="pic" src="page2/image_3.png">
    <div class="list">
        <p class="title">Будь економніше</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Оплата готівкою, карткою або бонусами</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Кешбек з поїздок на бонусний рахунок</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList"> Промокоди, знижки та акції</p>
        </div>
    </div>
</div>

<div class="elementRev">
    <img class="pic" src="page2/image_4.png">
    <div class="list">
        <p class="title">Надійність і безпека</p>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Відстеження авто на мапі онлайн</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Досвідчені водії з рейтингом і відгуками</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="textList">Підтримка 24/7</p>
        </div>
    </div>
</div>


<div class="Block--greygrey">
    <p class="instructionName">Послуги для наших клієнтів</p>
    <div class="TotalServiceBlock">
        <div class="serviceBlock">
            <img class="el" src="page2/box_1.png">
            <p class="serviceText">Кур’єрська доставка</p>
        </div>
        <div class="serviceBlock">
            <img class="el" src="page2/home_1.png">
            <p class="serviceText">Міжміське таксі</p>
        </div>
        <div class="serviceBlock">
            <img class="el" src="page2/car-steering-wheel_1.png">
            <p class="serviceText">«Тверезий водій»</p>
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
