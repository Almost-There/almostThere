/*
The Messy animations.jquery.js document.
Written by LuckyMonkey

This work is licensed under a Creative Commons Attribution 3.0 Unported License.
(Not that you would want to use it...)

Thoughts on Function Loading:
  Reasons why Functions would or would not be loaded are as follows, this will allow a readable array
  to be used to group these functions into one of four classes.

    A function as defined as "fancy"
    "Fancy Function"
    A function that may cause browser compatibility issues, also possibly laggy or bulky or unnessary
    Functions that are used for UI should not be fancy, only those that provide a polish.

    A function that has already been viewed by the user
    "Seen Function"
    A function that may also be fancy, that is played on a users's first visit or
    first visit for a certian amount of time.

    A function that is loaded on every page load
    "Always Function"
    A function that must be run every time the page is loaded.

    A function that is triggered on an event
    "Event Function"
    A function that executes when triggered by an event and doesn't follow the above rules.
*/

// http://jsfiddle.net/gmDRM/351
// JSFiddle for Fliptext plugin

// http://jsfiddle.net/9eKqj/22/
// JSFiddle for New Squares Plugin


//Genisis // Always Function
$(function () {
  //Client side color switching function // Event Function //
    var button = $('.changeColor');
    var color;

    button.click(function () {
        color = $(this).css("color");
        $(".theBGcolor").animate({
            backgroundColor: color
        }, 400);
        $(".theColor").animate({
            color: color
        }, 400);
        $.cookie('setColor', color, {
            expires: 365,
            path: '/'
        });
    });

    if (typeof ($.cookie('setColor')) != "undefined") {
        color = $.cookie('setColor');
        $(".theColor theBGcolor").css("color", color);
    }


// Text Scrambler // Always Fancy Function //
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
            $.gl.countDown = 7.00;
            $.gl.beat = 0.01;
            $.gl.step = 0.01;
            $.gl.div = $(__id);
            $.gl.intervalID = window.setInterval(unscramblechar, 1);
        } else {
            window.clearInterval($.gl.intervalID);
            $.gl.intervalID = -1;
        }
    }
// These are the crys of a web developer... I have no idea what the fuck I'm doing.. totally lost... please help
// I Hate javascript.
    function unscramblechar() {
        var spans = $('span', $($.gl.div));
        $.gl.countDown -= 0.1; $.gl.step += 0.1; $.gl.beat += 0.1;
        var charIndex = Math.floor(((Math.random() * 1000) * 1000) % $.gl.orig.length);
        if ($.gl.countDown <= 0) {
            window.clearInterval($.gl.intervalID);
            $.gl.intervalID = -1;
            // fill in correct letters
            for (var i = 0; i < spans.length; i++) {
                $(spans[i]).text($.gl.orig[i]);
            } }

        if ($.gl.beat >= 0.01) {
            // fill with random chars
            var ch = $(spans[charIndex]).text();
            if (ch != '' && ch != $.gl.orig[charIndex]) {
                $(spans[charIndex]).text(randomLetter());
            } $.gl.beat = 0.00; }

        if ($.gl.step >= 0.08) {
            // fill with correct char
            var ch = $(spans[charIndex]).text();
            if (ch != '' && ch != $.gl.orig[charIndex]) {
                $(spans[charIndex]).text($.gl.orig[charIndex]);
            } $.gl.step = 0.00; }
    }

    $.gl.orig = $('.msg-type').text().split('');
    $('.msg-type').empty();
    for (var i = 0; i < $.gl.orig.length; i++) {
        if ($.gl.orig[i] != ' ') {
            $('.msg-type').append('<span>' + randomLetter() + '</span>');
        } else {
            $('.msg-type').append('<span> </span>');
        }
    }
    unscramble('.msg-type');

//Condition 1
    //Play Square Animation once and save the cookie that it has been seen.
//Event
    //A user navigates to a page with sqField on it for the first time [TO BE IMPLIMENTED] and also has fancy graphics turned on [TO BE IMPLIMENTED]


//Condition 2
    //Display Squares, do not play animation
//Event
    //A user navigates to a page with sqField on it a repeat time for that session, [TO BE IMPLIMENTED] or has fancy graphics off [TO BE IMPLIMENTED]


//Condition 3
    //Do not check for cookie or play animation, do not save cookie.
//Event
    //The page does not contain any squares to play the animation on, so it is not run

/*
$(function () { 
    if ($('sq').length)
    {
        console.log('#sqField was not found on the page, No animation functions were performed.');
    }
    else 
    {
    var seenYes=$.cookie('seen_fadeIn');
    if (seenYes!='1')
        {
        $('#sqField div').delay( 500 ).each(function(i)
            {
                $(this).delay((i++) * 50).fadeTo(1000, 1);
            }
        );
        $.cookie('seen_fadeIn', '1');
        console.log( 'Animation has been played, Cookie set for the rest of this session.');
        }
    else 
        {
            $('sqField .sq').css( "display", "inline" );
            $('sqfield .sqDub').css( "display", "inline" );
            console.log('Animation already seen this session, Not playing FadeIn Animation. Have a nice Day!');
        }
    }
} );
*/

    //Temporary while the function above is fixed.
$(function(){
    $('#sqField .sq').css( "display", "inline" )
    $('#sqField .sqDub').css( "display", "inline" );
});

$(function(){
    $( "#settingsButton" ).click(function() {
        $( "#allOfTheThings" ).animate({ "left": "-250px" }, "fast" );
    });
});

// This plays stage two animations.
$(function () { 
    var adSpace=$(".adSpace")
    var youtubeTitle=$(".youtubeTitle")
    adSpace.animate({opacity:'1'}, "slow");
    youtubeTitle.delay( 1000 ).slideUp( "slow" );

});
} );