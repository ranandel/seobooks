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
                <div class="content_text">
                    <p>Перед входом проверьте адрес сайта в адресной строке.</p><br>
                    <img src="images/login_adres.png">
                    <div class="register_switch">
                        <label>Вход в аккаунт</label>
                        <label>Через LoginWM <img src="images/wmlogin.png" ></label>
                    </div>
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