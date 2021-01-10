<!DOCTYPE HTML>
<html lang="ru">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="js/script.js"></script>
    <meta charset="utf-8">
    <meta name="description"
          content="Рекламодателям. Profitcentr - рекламное агентство №1. быстро, доступно, качественно! Многофункциональный сервис заданий.">
    <title>ProfiTCentR - Рекламное агентство. Эффективная раскрутка сайтов</title>
    <link rel="icon" href="/favicon.ico">
    <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<!--КНОПКИ FIXED-->
<? include "fixed_button.php"; ?>
<!--ШАПКА-->
<? include "header.php"; ?>
<!--КОНТЕНТ БЛОК 3 КОЛОНКИ-->
<div class="content_block">
    <!--ЛЕВАЯ КОЛОНКА-->
    <? include "left_block.php"; ?>
    <!--СРЕДНЯЯ КОЛОНКА-->
    <div class="content" id="content">
        <div class="name_block">
            <h1 class="zagolovok">Вход в аккаунт</h1>
            <div class="content_text"><center>
                    <p class="zag">Перед входом проверьте адрес сайта в адресной строке.</p>
                    <img src="images/login/login_adres.png"></center>
                <div class="register_switch">
                    <label id="login">Вход в аккаунт</label>
                    <label id="wm">Через LoginWM <img src="images/login/wmlogin.png" ></label>
                    <label id="pass">Я забыл пароль</label>
                </div>
                <form method="post" id="formx">
                    <div id="login_block1" class="login_block1">
                        <table>
                            <tr>
                                <td rowspan="4">
                                    <img src="images/login/welcome.jpg"  >
                                </td>
                            </tr>
                            <tr>
                                <td >
                                    <span class="tx"> Логин или e-mail:</span><input name="login" type="text" required><hr>
                                    <span class="tx">Пароль:</span><input name="password" type="password" required><hr>
                                    <center> <span id="vopros"> Сколько будет </span> <img id="reload" title="Обновить" class="refresh" src="images/login/refresh.png"> </center>
                                    <span class="tx"> Ответ: </span><input type="text" id="otvet" value="">


                                </td>
                            </tr>
                        </table>
                        <input class="hochy"  type="submit" id="vxod" name="submit_avtoris" value="Авторизоваться" >
                        <p id="crash"></p>
                        <a href="login.php?do=logout">Выход</a>
                        <br><br><br>
                        <div>
                            <?include "config_login.php"; ?>
                        </div>
                    </div>
                    <div id="login_block2" class="login_block2">
                        2222222222
                    </div>
                    <div id="login_block3" class="login_block3">
                        333333333
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!--ПРАВАЯ КОЛОНКА-->
    <? include "right_block.php"; ?>
</div>
<!--ФУТЕР-->
<? include "footer.php"; ?>
</body>
</html>