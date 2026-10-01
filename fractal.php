<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; }

// Query string => handler. sayHello() lists these keys, so the two can't drift.
$routes = array(
    "404"      => "notfound",
    "no"       => "no",
    "redirect" => "redirect",
    "login"    => "login",
    "logout"   => "logout",
    "admin"    => "admin",
);
($routes[$_SERVER['QUERY_STRING'] ?? ''] ?? 'sayHello')();

function sayHello() {
    global $routes;
    openPage('Fractal');
    echo "<p>This document has different arguements that can be passed to it.<br />You can try the following Query Strings
    <ul>\n        <li>" . implode("</li>\n        <li>", array_keys($routes)) . "</li>\n    </ul>";
    closePage();
};

function notfound() { 
    openPage('404 File not found');
    echo "
        <div class='square max-w-md'>
            <div class='square-title'>Error</div>
            <div class='square-content'>
     <p class='text-6xl font-rubik font-bold'>404</p>
     <span class='text-sm text-muted-foreground'>File or resource cannot<br />be located</span></div></div>"; 
    closePage();
};

function no() {
    openPage('Denied');
    echo "No we aren't going to allow you to access that."; 
    closePage();
};

function redirect() {
    openPage('Redirecting');
    echo "You will be redirected to your intended destination in a moment.";
    closePage();
};

function login()  { unavailable('Login', 'in'); };
function logout() { unavailable('Logout', 'out'); };

function unavailable($what, $direction) {
    openPage($what);
    echo "
    <div class='square max-w-md'>
        <div class='square-title'>" . $what . "</div>
        <div class='square-content'>
            <p>We currently don't have the ability<br />to log users " . $direction . " at this time.<br /><br />Please check back soon.<br /><br /><a class='text-the-color hover:text-foreground transition-colors' href='/'>Click here to return home</a></p>
        </div>
    </div>";
    closePage();
};

function admin() {
    openPage('Administrative Access');
    echo "This is a secure area, you may not enter";
    closePage();
};

?>
