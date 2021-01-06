<div class="left">
    <!--СТАТИТИКА-->
    <div class="statistika">
        Мы работаем<br><span class="st">0</span> лет <span class="st">0</span> месяцев <span class="st">1</span> дней
    </div>
    <div class="statistika">
        Всего участников<br><span class="st">1</span>
    </div>
    <div class="statistika">
        Новых за 24 часа<br><span class="st">1</span>
    </div>
    <div class="statistika">
        Мы выплатили<br><span class="st">0</span> руб.
    </div>
    <!--РЕГИСТРАЦИЯ-->
    <a href="#"><div class="reg"></div></a>
    <!--ВХОД-->
    <!--onClick="showContent('login.php')"-->
    <a href="login.php" ><div class="login"></div></a>
    <!--БАНЕР 100х100-->
    <div class="baner">
        <h1>Реклама (Баннер 100х100)</h1>
        <div class="baner_content">
            <a href="#"><img src="images/baner.gif" no-repeat></a>
        </div>
        <div class="banner_bt">
            <a href="#">Разместить</a>  | <a href="#">Смотреть все</a>
        </div>
    </div>
    <!--ДАТА И ВРЕМЯ-->
    <div id="date" class="data">
        <script>
            setInterval(function () {
                document.getElementById('date').innerHTML = date_time();
            }, 1000);
        </script>
    </div>
</div>