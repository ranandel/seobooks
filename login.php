    <!DOCTYPE HTML>
    <html>
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
        <meta charset="utf-8">
        <title>ProfiTCentR - Рекламное агентство. Эффективная раскрутка сайтов</title>
        <link rel="icon" href="/favicon.ico">
        <script src="script.js"></script>
        <link rel="stylesheet" type="text/css" href="style.css">
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
                    <img src="images/login_adres.png"></center>
                    <div class="register_switch">
                        <label id="login" onclick="login()">Вход в аккаунт</label>
                        <label id="wm" onclick="wm()">Через LoginWM <img src="images/wmlogin.png" ></label>
                        <label id="pass" onclick="pass()">Я забыл пароль</label>
                    </div>
                    <form action="post">
                    <div id="login_block1" class="login_block1">
                        <table>
<tr>
                                <td rowspan="4">
                                  <img src="images/welcome.jpg"  >
                                </td>
<td>
                                 Логин или e-mail:  <input type="text"><hr>
</td>

                               Пароль:<input type="text"><hr>


                               Отметьте все <b>изображения с пандой </b><img class="refresh" src="images/refresh.png">
                                    <div class="capcha">
                                        <div>1</div>
                                        <div>2</div>
                                        <div>3</div>
                                        <div>4</div>
                                        <div>5</div>
                                    </div>


                        </table>


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