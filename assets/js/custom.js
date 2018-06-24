
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

$(document).on('click', '#submitcontact', function (e) {
    var name = $('#contact_name').val(), phone = $('#contact_phone').val(), message = $('#contact_message').val();
    e.preventDefault;
    if (name == '' || phone == '' || message == '') {
        $('#contactForm input, #contactForm textarea').attr('placeholder', 'Por favor completa este campo para continuar')
    } else {
        $.ajax({
            type: "POST",
            url: "assets/scripts/conocer.php",
            data: $('#contactForm').serialize(),
            success: function (msg) {
                if (msg == 'SEND') {
                    $('.success_box').fadeIn();
                    $('.error_box').fadeOut();
                    $('#contactForm')[0].reset();
                    setTimeout(function () {
                        $('.success_box').fadeOut("slow");
                    }, 8000);
                } else {
                    $('.success_box').fadeOut();
                    $('.error_box').fadeIn().find('h3').text(msg);
                }
                console.log(msg);
            },
            error: function (error) {
                console.log('Disculpe, existió un problema');
                console.log(error);
            },
            complete: function (xhr, status) {
                $('#contactForm').submit();
            }
        });
    }
})


/////////////////////////////////////////////////////////////////////////////////
//////////////////////////////////////////////////////////////////////////////
///////////// ANIMACION DE PRELOADER                ///////////////
////////////////////////////////////////////////////////////////////////////////
/////////////////////////////////////////////////////////////////////////////////