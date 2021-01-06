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
    <? include "content_index.php"; ?>
<!--ПРАВАЯ КОЛОНКА-->
    <? include "right_block.php"; ?>
</div>
<!--ФУТЕР-->
    <? include "footer.php"; ?>
<!--<script>
    document.querySelectorAll('ul li a').forEach(function(el) {
        if ( window.location.pathname.indexOf(el.getAttribute('href')) > -1 ) {
            el.classList.add('active');
        }
    });
</script>-->
</body>
</html>