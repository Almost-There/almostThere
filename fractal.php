<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; }

$qs = $_SERVER['QUERY_STRING'];
switch ($qs) {  
case "404":      notfound();    break;
case "no":       no();          break;
case "redirect": redirect();    break;
case "login":    login();       break;
case "logout":   logout();      break;
case "admin":    logout();      break;
default:         sayHello();    break;
};

function sayHello() {
    $title="Fractal";
    head(); 
    echo "<title>Almost There - " . $title . " </title></head><body>";
    preBody();
    echo "<p>This document has different arguements that can be passed to it.<br />You can try the following Query Strings
    <ul>
        <li>notfound</li>
        <li>no</li>
        <li>redirect</li>
        <li>login</li>
        <li>logout</li>
        <li>admin</li>
    </ul>";
    postBody();
    echo "</body></html>";
};

function notfound() { 
    global $A, $B, $C;
    $title='404 File not found';
    echo $A; head(); echo $B; preBody();
    echo "
        <div class='nudge'><div class='sq theBGcolor'>
            <div class='sqTitle'><a class='icn icon-warning'>&nbsp;</a>Error</a></div>
            <div class='sqBody'>
     <p style='font-size:60px;'>404</p><br />
     <span style='text-size:10px;'>File or resource cannot<br />be located</span></div></div>"; 
    postBody(); echo $C; 
};

function no() {
    global $A, $B, $C;
    $title='Denied';
    echo $A; head(); echo $B; preBody(); 
    echo "No we aren't going to allow you to access that."; 
    postBody(); echo $C; 
};

function redirect() {
    global $A, $B, $C;
    $title='Redirecting';
    echo $A; head(); echo $B; preBody();
    echo "You will be redirected to your intended destination in a moment.";
    postBody(); echo $C;
};

function login() {
    global $A, $B, $C;
    $title='Login';
    echo $A; head(); echo $B; preBody();
    echo "<div id='sqField' class='nudge'>
    <!-- Login Square -->
    <div class='sqDub  theBGcolor'>
        <div class='sqTitle'><a class='icn icon-lock2'>&nbsp;</a>Login<a class='sqSettings icn icon-settings'></a></div>
        <div class='sqBody'>
            <div class='nudge' style='float:left;color:#222222;'>
                <span class='fl'><a class='icn icon-lock2 fl' style='color:#222222;font-size:100px;display:block;'></a>We currently don't have the ability<br />to log users in at this time.<br /><br />Please check back soon.<br /><br /><a style='color:#222222;' href='index.php'>Click here to return home</a></span>
            </div>
        </div>
        <div class='sqBack'>
            <ul>
                <li><a>Show/Hide Square</a></li>
                <li><a>Display Order</a></li>
                <li><a>Like Button</a></li>
                <li><a>Copy Info to Clipboard</a></li>
            </ul>
        </div>
    </div>
    <!-- End Login Square -->
    </div>";
    postBody(); echo $C;
};

function logout() {
    global $A, $B, $C;
    $title='Logout';
    echo $A; head(); echo $B; preBody();
    echo "<div id='sqField' class='nudge'>
    <!-- Logout Square -->
    <div class='sqDub  theBGcolor'>
        <div class='sqTitle'><a class='icn icon-lock2'>&nbsp;</a>Login<a class='sqSettings icn icon-settings'></a></div>
        <div class='sqBody'>
            <div class='nudge' style='float:left;color:#222222;'>
                <span class='fl'><a class='icn icon-lock2 fl' style='color:#222222;font-size:100px;display:block;'></a>We currently don't have the ability<br />to log users out at this time.<br /><br />Please check back soon.<br /><br /><a style='color:#222222;' href='index.php'>Click here to return home</a></span>
            </div>
        </div>
        <div class='sqBack'>
            <ul>
                <li><a>Show/Hide Square</a></li>
                <li><a>Display Order</a></li>
                <li><a>Like Button</a></li>
                <li><a>Copy Info to Clipboard</a></li>
            </ul>
        </div>
    </div>
    <!-- End Logout Square -->
    </div>";
    postBody(); echo $C;
};

function admin() {
    global $A, $B, $C;
    $title='Administrative Access';
    echo $A; head(); echo $B; preBody();
    echo "This is a secure area, you may not enter";
    postBody(); echo $C;
};

?>
