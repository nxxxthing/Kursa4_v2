<!DOCTYPE html>
<html lang="ru">
<head>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap" rel="stylesheet">
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
            <a href="#" id="button1" class="headerYelEl" style="color:#000000">
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
@if ($flag != 0)
    <div class="<?php if ($flag == 1) {
        echo 'alert-right';
    } else {
        echo 'alert-wrong';
    } ?>">
        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
        <?php if ($flag == 1) {
            echo "Замовлення прийнято! Очікуйте повідомлення з інформацією про машину.";
        } else {
            echo "Помилка! Перевірте правильність вводу даних.";
        } ?>
    </div>
@endif
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

<div class="map">
    <p class="logoB">Транспорт</p>
    <p class="logoS">Якому довіряєш</p>
    <img class="BigCar" src="page1/image_2.png">
</div>


<div class="Block">
    <p class="instructionName">Як це працює</p>
    <div class="instruction">
        <div><img class="instructionImg" src="page1/road_1.png">
            <p class="instructionText">Виберіть маршрут та машину</p>
        </div>
        <div><img class="instructionImg" src="page1/credit-card_1.png">
            <p class="instructionText">Перевірте дані бронювання та виберіть бажаний спосіб оплати.</p>
        </div>
        <div><img class="instructionImg" src="page1/png-clipart-yellow-car-top-view-yellow-car-top-view_1.png">
            <p class="instructionText">Наш водій забере вас за вказаним місцем і часом.</p>
        </div>
    </div>
</div>


<div class="Block Block--grey">
    <div class="forDrivers">
        <p class="textYellow">ДЛЯ ВОДІЇВ</p>
        <p class="textBlack">ВИ ХОЧЕТЕ ПРАЦЮВАТИ З НАМИ?</p>
        <p class="textMain">Відмінна можливість поповнення сімейного бюджету, тому що «Водій таксі» може
            бути як основною професією, так і поєднаної з іншими видами діяльності.</p>

        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="listText">Вільний графік</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="listText">Вступний внесок "0"</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="listText">Немає штрафів</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="listText">Зручна форма оплати</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="listText">Технічна підтримка</p>
        </div>
        <div class="listElement">
            <img src="page1/check-mark_6.png">
            <p class="listText">Стабільні замовлення</p>
        </div>
        <img class="PieceCar" src="page1/image_4.png">
        <a href="https://forms.gle/ZCdK3SJ3uNb2mk8Z8" style="color:#000000" target="_blank">
            <div class="becomeDriver"> Стати водієм
            </div>
        </a>
    </div>
</div>


<div class="Block--white">
    <p class="instructionName">Тарифи</p>
    <div class="TotalCarBlock">
        <div class="carBlock">
            <img class="car" src="page1/gratis-png-alquiler-de-coches-taxi-vehiculo-de-lujo-coche_1.png">
            <p class="aboutCar">Стандартний седан для їзди по місту до ваших послуг</p>
            <p class="price">30 грн. до 1 км</p>
            <p class="priceMore">Далі 5 грн за км</p>
        </div>

        <div class="carBlock">
            <img class="car" src="page1/234-2349788_taxi-img-taxi-png_1.png">
            <p class="aboutCar">Комфортний седан для їзди по місту до ваших послуг</p>
            <p class="price">45 грн. до 2 км</p>
            <p class="priceMore">Далі 6.5 грн за км</p>
        </div>

        <div class="carBlock">
            <img class="car" src="page1/image_3.png">
            <p class="aboutCar">Комфортний і місткий універсал до Ваших послуг.</p>
            <p class="price">50 грн. до 1 км</p>
            <p class="priceMore">Далі 5.5 грн за км</p>
        </div>
    </div>
</div>


<div class="Block--whitewhite">
    <div class="comment">
        <img class="arrow" src="page1/image_25.png">
        <div class="manANDtext"><img class="man" src="page1/image_11.png">
            <div class="commentAll"><p class="commentText">
                    Користуюся їх додатком, дуже зручно і просто, є зв'язок з водієм і геолокація, диспетчеру не треба
                    пояснювати з якого боку магазину стою) Ціна хороша за послуги, все подобається, буду користуватися
                    далі.</p>
                <p class="commentAutor">Яхачуп Іва</p>
            </div>
        </div>
        <img class="arrow" src="page1/image_24.png">
    </div>
    <img class="dots" src="page1/image_26.png">
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
