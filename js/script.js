//КНОПКА ВВЕРХ
$(function() {
    // при нажатии на кнопку up
    $('.up').click(function() {
        // переместиться в верхнюю часть страницы
        $("html, body").animate({
            scrollTop:0
        },1000);
    })
})
// при прокрутке окна
$(window).scroll(function() {
    // если пользователь прокрутил страницу более чем на 200px
    if ($(this).scrollTop()>200) {
        // то сделать кнопку up видимой
        $('.up').fadeIn();
    }
    // иначе скрыть кнопку up
    else {
        $('.up').fadeOut();
    }
});

//КНОПКА ВНИЗ
$(function() {
    // при нажатии на кнопку down
    $('.down').click(function() {
        // переместиться в нижнюю часть страницы
        $("html, body").animate({
            scrollTop:1000
        },1000);
    })
})
$(window).scroll(function() {
    // если пользователь прокрутил страницу более чем на 800px
    if ($(this).scrollTop()<800) {
        // то сделать кнопку down видимой
        $('.down').fadeIn();
    }
    // иначе скрыть кнопку down
    else {
        $('.down').fadeOut();
    }
});

//ДАТА и ВРЕМЯ
function zero_first_format(value)
{
    if (value < 10)
    {
        value='0'+value;
    }
    return value;
}
/* функция получения текущей даты и времени */
function date_time()
{
    var current_datetime = new Date();
    var day = zero_first_format(current_datetime.getDate());
    var month = zero_first_format(current_datetime.getMonth()+1);
    var year = current_datetime.getFullYear();
    var hours = zero_first_format(current_datetime.getHours());
    var minutes = zero_first_format(current_datetime.getMinutes());
    var seconds = zero_first_format(current_datetime.getSeconds());
    return day+"."+month+"."+year+" "+hours+":"+minutes+":"+seconds;
}

//LOGIN.PHP КНОПКИ
$(document).on('click', '#login', function() {
    $("#login").css({"backgroundImage":"linear-gradient(to bottom, #fefefe, #eeeeee)","color":"#434248"})
    $("#wm").css({"backgroundImage":"none","color":"white"})
    $("#pass").css({"backgroundImage":"none","color":"white"})
    $("#login_block1").css({"display":"block"})
    $("#login_block2").css({"display":"none"})
    $("#login_block3").css({"display":"none"})
});

$(document).on('click', '#wm', function() {
    $("#login").css({"backgroundImage":"none","color":"white"})
    $("#wm").css({"backgroundImage":"linear-gradient(to bottom, #fefefe, #eeeeee)","color":"#434248"})
    $("#pass").css({"backgroundImage":"none","color":"white"})
    $("#login_block1").css({"display":"none"})
    $("#login_block2").css({"display":"block"})
    $("#login_block3").css({"display":"none"})
});

$(document).on('click', '#pass', function() {
    $("#login").css({"backgroundImage":"none","color":"white"})
    $("#wm").css({"backgroundImage":"none","color":"white"})
    $("#pass").css({"backgroundImage":"linear-gradient(to bottom, #fefefe, #eeeeee)","color":"#434248"})
    $("#login_block1").css({"display":"none"})
    $("#login_block2").css({"display":"none"})
    $("#login_block3").css({"display":"block"})
});

//КАПЧА ВХОДА
function randomInteger(min, max) {
    // случайное число от min до (max+1)
    let rand = min + Math.random() * (max + 1 - min);
    return Math.floor(rand);
}
$(document).on('click', '#reload', function() {
    window.location.href = "http://seobooks/login.php";
});
switch (randomInteger(1,5)){
    case 1:
        $(function() {
            $("#vopros").append("<b>99+1</b> ");
            $(document).on('click', '#vxod', function() {
                if ($("#otvet").val()==100) {
                    window.location.href = "http://profhelp.com.ua";
                }
                else{
                   // alert("Не верный ответ!");
                }
            });
        });
        break;
    case 2:
        $(function() {
            $("#vopros").append("<b>1+44</b> ");
            $(document).on('click', '#vxod', function() {
                if ($("#otvet").val()==45) {
                    window.location.href = "http://profhelp.com.ua";
                }
                else{
                    //$("#crash").append("Не верный ответ!");
                    //alert("Не верный ответ!");
                }
            });
        });
        break;
    case 3:
        $(function() {
            $("#vopros").append("<b>76+4</b> ");
            $(document).on('click', '#vxod', function() {
                if ($("#otvet").val()==80) {
                    window.location.href = "http://profhelp.com.ua";
                }
                else{
                   // $("#crash").append("Не верный ответ!");
                   // alert("Не верный ответ!");
                }
            });
        });
        break;
    case 4:
        $(function() {
            $("#vopros").append("<b>201-1</b> ");
            $(document).on('click', '#vxod', function() {
                if ($("#otvet").val()==200) {
                    window.location.href = "http://profhelp.com.ua";
                }
                else{
                   // $("#crash").append("Не верный ответ!");
                   // alert("Не верный ответ!");
                }
            });
        });
        break;
    case 5:
        $(function() {
            $("#vopros").append("<b>41-1</b> ");
            $(document).on('click', '#vxod', function() {
                if ($("#otvet").val()==40) {
                    window.location.href = "http://profhelp.com.ua";
                }
                else{
                    //$("#crash").append("Не верный ответ!");
                   // alert("Не верный ответ!");
                }
            });
        });
        break;
}
