//Genisis
$(function () {
    var i = 0; //used in the settings toggle. Probably a better way to do this

    $("#settingsButton").click(function() {
        $("#settingsMenu").toggleClass( "hover" );
        $("#settingsMenu").slideToggle( 250 );
        switchSettingsText();
    });

    function switchSettingsText() {
        if (i % 2 == 0) {
            $("#settingsSpan").html("Open Settings");
        }
        else if (i % 2 != 0) {
            $("#settingsSpan").html("Close Settings");
        }
        else {
            $("#settingsSpan").html("Close Settings");
        }

        i++;    
    }

    var button = $('.changeColor');
    var color;

    button.click(function () {
        color = $(this).css("background-color");
        $(".theBGcolor").animate({
            backgroundColor: color
        }, 500);
        $(".theColor").animate({
            color: color
        }, 500);
        $.cookie('setColor', color, {
            expires: 365,
            path: '/'
        });
    });

    if (typeof ($.cookie('setColor')) != "undefined") {
        color = $.cookie('setColor');
        $(".theColor theBGcolor").css("background-color", color);
    }

    //How animations should work...
    // Two functions will exist, animations to play every time a page is loaded
    // And a function to play animations only once when the page is first loaded 
    //http://jsfiddle.net/gmDRM/351/

    $.gl = {};
    $.gl.intervalID = -1;
    $.gl.countDown = 6.00;
    $.gl.beat = 0.00;
    $.gl.step = 1.00;
    $.gl.div = null;
    $.gl.orig = null; // char array

    function randomLetter() {
        return String.fromCharCode(Math.floor(((Math.random() * 1000) % 73) + 49));
    }

    function unscramble(__id) {
        if ($.gl.intervalID == -1) {
            $.gl.countDown = 6.00;
            $.gl.beat = 0.00;
            $.gl.step = 0.00;
            $.gl.div = $(__id);
            $.gl.intervalID = window.setInterval(unscramblechar, 1);
        } else {
            window.clearInterval($.gl.intervalID);
            $.gl.intervalID = -1;
        }
    }

    function unscramblechar() {
        var spans = $('span', $($.gl.div));
        $.gl.countDown -= 0.1;
        $.gl.step += 0.1;
        $.gl.beat += 0.1;
        var charIndex = Math.floor(((Math.random() * 1000) * 1000) % $.gl.orig.length);

        if ($.gl.countDown <= 0) {
            window.clearInterval($.gl.intervalID);
            $.gl.intervalID = -1;
            // fill in correct letters
            for (var i = 0; i < spans.length; i++) {
                $(spans[i]).text($.gl.orig[i]);
            }
        }

        if ($.gl.beat >= 0.01) {
            // fill with random chars
            var ch = $(spans[charIndex]).text();
            if (ch != '' && ch != $.gl.orig[charIndex]) {
                $(spans[charIndex]).text(randomLetter());
            }
            $.gl.beat = 0.00;
        }

        if ($.gl.step >= 0.08) {
            // fill with correct char
            var ch = $(spans[charIndex]).text();
            if (ch != '' && ch != $.gl.orig[charIndex]) {
                $(spans[charIndex]).text($.gl.orig[charIndex]);
            }
            $.gl.step = 0.00;
        }
    }

    $.gl.orig = $('#msg').text().split('');
    $('#msg').empty();
    for (var i = 0; i < $.gl.orig.length; i++) {
        if ($.gl.orig[i] != ' ') {
            $('#msg').append('<span>' + randomLetter() + '</span>');
        } else {
            $('#msg').append('<span> </span>');
        }
    }
    unscramble('#msg');

    setTimeout(waitForDoc, 200);

    function waitForDoc() {
        var i = -1;
        var arr = $(".animateSquare");
        (function () {
            if (arr[++i])
                $(arr[i]).delay(100).animate({
                    height: "175px"
                }, 50, "linear", arguments.callee);
        })();
    }

});
