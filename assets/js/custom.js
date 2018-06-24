
$('.logoslider').mousemove(function (e) {
    var amountMovedX = (e.pageX * -1 / 6);
    var amountMovedY = (e.pageY * -1 / 6);
    $(this).css('background-position', amountMovedX + 'px ' + amountMovedY + 'px');
});

if ($(window).width() < 990) {
    $('.mobilevideobg').show();
} else {
    $('.desktopvideobg').show();
}

setTimeout(function () {
    $('.fadeinbot').fadeIn('slow', function () {
        $('.fadeinbotimg').animate({'top': '10%'}, 1000);
    });
}, 0);



/////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
///////////// ANIMACION DE PRELOADER                ///////////////
////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////