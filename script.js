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