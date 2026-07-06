// script.js
$(document).ready(function() {
    $('#accessibility-button').click(function() {
        $('#accessibility-menu').toggleClass('active');
    });

    $('#zoom-in').click(function() {
        var currentSize = parseFloat($('body').css('font-size'));
        $('body').css('font-size', currentSize * 1.1);
    });

    $('#zoom-out').click(function() {
        var currentSize = parseFloat($('body').css('font-size'));
        $('body').css('font-size', currentSize / 1.1)
    });

    $('#fonte-grande').click(function() {
        // Implementar funcionalidade de Cursor Maior
        $('body').toggleClass('fontegrande');
    });

    $('#invert').click(function() {
        // Implementar funcionalidade de Inverter Cores
        $('body').toggleClass('inverted');
    });

    $('#contrast').click(function() {
        // Implementar funcionalidade de Contraste
        $('body').toggleClass('high-contrast');
    });

    $('#brightness').click(function() {
        // Implementar funcionalidade de Brilho
        $('body').toggleClass('high-brightness');
    });

    $('#grayscale').click(function() {
        // Implementar funcionalidade de Escala de Cinza
        $('body').toggleClass('grayscale');
    });
});