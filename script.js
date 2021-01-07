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
//СКРИПТ ПОДКРУЗКИ КОНТЕНТА
function showContent(link) {
    var cont = document.getElementById('content');
    //var loading = document.getElementById('loading');
   // cont.innerHTML = loading.innerHTML;
    var http = createRequestObject();
    if( http )
    { http.open('get', link);
        http.onreadystatechange = function ()
        {   if(http.readyState == 4)
        {   cont.innerHTML = http.responseText;  }    }
        http.send(null);  }
    else
    {  document.location = link;   }   }
// ajax объект
function createRequestObject()
{  try { return new XMLHttpRequest() }
catch(e)
{  try { return new ActiveXObject('Msxml2.XMLHTTP') }
catch(e)
{   try { return new ActiveXObject('Microsoft.XMLHTTP') }
catch(e) { return null; }   } } }
//ERN.PHP КНОПКИ
function login() {
    var a = document.getElementById("login");
    var b = document.getElementById("wm");
    var c = document.getElementById("pass");
    var log1 = document.getElementById("login_block1");
    var log2 = document.getElementById("login_block2");
    var log3 = document.getElementById("login_block3");
    a.style.backgroundImage= "linear-gradient(to bottom, #fefefe, #eeeeee)";
    a.style.color="#434248";
    b.style.backgroundImage= "none";
    c.style.backgroundImage= "none";
    b.style.color="white";
    c.style.color="white";
    log1.style.display="block"
    log2.style.display="none"
    log3.style.display="none"
}
function wm() {
    var a = document.getElementById("login");
    var b = document.getElementById("wm");
    var c = document.getElementById("pass");
    var log1 = document.getElementById("login_block1");
    var log2 = document.getElementById("login_block2");
    var log3 = document.getElementById("login_block3");
    b.style.backgroundImage= "linear-gradient(to bottom, #fefefe, #eeeeee)";
    a.style.backgroundImage= "none";
    c.style.backgroundImage= "none";
    b.style.color="#434248";
    a.style.color="white";
    c.style.color="white";
    log1.style.display="none"
    log2.style.display="block"
    log3.style.display="none"
}
function pass() {
    var a = document.getElementById("login");
    var b = document.getElementById("wm");
    var c = document.getElementById("pass");
    var log1 = document.getElementById("login_block1");
    var log2 = document.getElementById("login_block2");
    var log3 = document.getElementById("login_block3");
    c.style.backgroundImage= "linear-gradient(to bottom, #fefefe, #eeeeee)";
    a.style.backgroundImage= "none";
    b.style.backgroundImage= "none";
    c.style.color="#434248";
    a.style.color="white";
    b.style.color="white";
    log1.style.display="none"
    log2.style.display="none"
    log3.style.display="block"
}