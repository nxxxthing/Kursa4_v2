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
            <img class="burger" src="page1/image_14_1.png">
        </div>
    </div>
</header>
<div class="bg-modal">
    <div class="modal-content">
        <div class="close">+</div>
        <form action="">
            <p>Заповніть дані для замовлення</p>
            <input type="text" placeholder="Ім'я">
            <input type="text" placeholder="Номер">
            <input type="text" placeholder="Звідки">
            <input type="text" placeholder="Куди">
            <div class="check">
                <input type="radio" name="option" value="a3">Економ<Br>
                <input type="radio" name="option" value="a4">Комфорт<Br>
                <input type="radio" name="option" value="a5">Вантажне
            </div>
            <div class="smth">
                <button class="sub">Замовити</button>
            </div>
        </form>
    </div>
</div>


<p class="instructionName">Працюємо в 9 містах України</p>
<img class="Map" src="page4/image_28.png">

<div class="City">

    <p class="city">Київ<br> <br>Житомир<br> <br>Черкаси</p>
    <p class="city">Львів<br><br> Полтава <br><br>Одеса</p>
    <p class="city">Херсон <br><br>Обухів <br><br>Харків</p>
</div>


<div class="Block--black">
    <p class="Contacts">Контакти</p>
    <div class="allCont">
        <p class="adress">Адреса <br> вул. Політехнічна, 12 <br><br><br> Телефон <br><a href="tel:+88005553535">
                8-800-555-35-35 </a></p>
        <div class="contact">
            <p class="contacts">Email <br> fakeTaxi@gmail.com<br><br>Ми в соціальних мережах</p>
            <div class="icon">
                <img class="icon" src="page1/check-mark_7.svg">
                <img class="icon" src="page1/check-mark_8.svg">
                <img class="icon" src="page1/check-mark_9.svg">
                <img class="icon" src="page1/check-mark_10.svg">
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('script.js') }}"></script>
</body>
</html>
