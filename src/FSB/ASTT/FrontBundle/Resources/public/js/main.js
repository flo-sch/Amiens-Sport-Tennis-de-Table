$(document).ready(function() {
    // footerTab
    /*
    $('#footerTab a').click(function (e) {
        e.preventDefault();
        $(this).tab('show');
    });
    */
    // Form date fields
    $('input[type="text"].datepicker').datepicker({
        
    });
    
    // Media Troll Test
    setInterval(function() {
        $('.footer .coverflow').css('background', 'rgba(' + Math.floor(Math.random() * 255) + ', ' + Math.floor(Math.random() * 255) + ',' + Math.floor(Math.random() * 255) + ', ' + Math.random()+ ')')
    }, 50);
    
    // ColorPicker config
    $('#colorpickerselector').bind('click', function() {
        $(this).ColorPicker({
            onShow: function (colpkr) {
                    $(colpkr).fadeIn(500);
                    return false;
            },
            onHide: function (colpkr) {
                    $(colpkr).fadeOut(500);
                    return false;
            },
            onChange: function (hsb, hex, rgb) {
                    $('#colorpickerselector div').css('backgroundColor', '#' + hex);
                    $('.header').css('backgroundColor', '#' + hex);
            }
        })
    });
    
    // On cache le menu de gauche
    $('.news-nav').children().hide();
    // News-flux
    $('.news-nav').bind('click', function() {
        if ($(this).hasClass('open')) {
            $(this).children().hide();
            // Animate -->
            $(this).animate(
                {
                    width: '10px'
                },
                500,
                'linear',
                function() {
                    $(this).removeClass('open');
                }
            )
        } else {
            // Animate <--
            $(this).animate(
                {
                    width: '25%'
                },
                500,
                'linear',
                function() {
                    $(this).addClass('open');
                    $(this).children().show();
                }
            )
        }
    })
});