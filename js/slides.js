$(function() {
    var header = $('.header');
    var backgrounds = new Array(
    'url(../../img/zorg.jpg)',
    'url(../../img/zorg2.jpg)',
    'url(../../img/zorg3.jpg)',
    'url(../../img/zorg4.jpg)'
    );
    var current = 0;

    function nextBackground() {
        header.css(
        'background-image',
        backgrounds[current = ++current % backgrounds.length]
        );

        setTimeout(nextBackground, 7000);
        }
        setTimeout(nextBackground, 7000);
        header.css('background-image', backgrounds[0]);
    });
