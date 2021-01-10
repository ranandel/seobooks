<?php
function generateCode($length = 6)
{
    $chars = "abcdefghijklmnopqrstuvwxyzABCDEFGHI JKLMNOPRQSTUVWXYZ0123456789";
    $code = "";
    $clen = strlen($chars) - 1;
    while (strlen($code) < $length) {
        $code .= $chars[mt_rand(0, $clen)];
    }
    return $code;
}
$link = mysqli_connect("localhost", "root", "root", "seo_books");
if (isset($_POST['submit_avtoris'])) {
    $query = mysqli_query($link, "SELECT user_id, user_password FROM users WHERE user_login='" . mysqli_real_escape_string($link, $_POST['login']) . "' LIMIT 1");
    $data = mysqli_fetch_assoc($query);
    if ($data['user_password'] === md5(md5($_POST['password']))) {

        $hash = md5(generateCode(10));
        setcookie("id", $data['user_id'], time() + 60 * 60 * 24 * 30, "/");
        setcookie("hash", $hash, time() + 60 * 60 * 24 * 30, "/", null, null, true); // httponly !!!
        if (!empty($_POST['not_attach_ip'])) {
            $insip = ", user_ip=INET_ATON('" . $_SERVER['REMOTE_ADDR'] . "')";
        }
        mysqli_query($link, "UPDATE users SET user_hash='" . $hash . "' " . $insip . " WHERE user_id='" . $data['user_id'] . "'");

        // Переадресовываем браузер на страницу проверки нашего скрипта
        //exit("<meta http-equiv='refresh' content='0; url= /check.php'>");
    header("Location: check.php");
       // header("Location: ../check.php");
        exit();
    } else {
        print "Вы ввели неправильный логин/пароль";
    }
}
?>