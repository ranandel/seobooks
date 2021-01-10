<? include "config_register.php"; ?>
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
    <form method="POST">
        Логин <input name="login" type="text" required><br>
        Пароль <input name="password" type="password" required><br>
        <input name="submit" type="submit" value="Зарегистрироваться">
    </form>
        </div>
    </div>

    <!--ПРАВАЯ КОЛОНКА-->
    <? include "right_block.php"; ?>
</div>
<!--ФУТЕР-->
<? include "footer.php"; ?>
</body>
</html>