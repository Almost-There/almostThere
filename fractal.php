<?php if(!file_exists("import.php")) { die("Error! <br />import.php wasn't imported; File cannot be found.<br /> Almost There cannot be loaded"); }
else { include 'import.php'; }

$qs = $_SERVER['QUERY_STRING'];
switch ($qs) {  
case "404":      notfound();    break;
case "no":       no();          break;
case "redirect": redirect();    break;
case "login":    login();       break;
case "logout":   logout();      break;
case "admin":    admin();       break;
default:         sayHello();    break;
};

// Every handler below renders a whole page: document shell, site chrome, then its content.
function openPage($title) {
    echo "<!DOCTYPE html>\n<html lang='en' class='dark'>\n<head>";
    head();
    echo "<title>Almost There - " . $title . "</title></head><body>";
    preBody();
};

function closePage() {
    postBody();
    echo "</body></html>";
};

function sayHello() {
    $title="Fractal";
    openPage($title);
    echo "<p>This document has different arguements that can be passed to it.<br />You can try the following Query Strings
    <ul>
        <li>notfound</li>
        <li>no</li>
        <li>redirect</li>
        <li>login</li>
        <li>logout</li>
        <li>admin</li>
    </ul>";
    closePage();
};

function notfound() { 
    $title='404 File not found';
    openPage($title);
    echo "
        <div class='square max-w-md'>
            <div class='square-title'>Error</div>
            <div class='square-content'>
     <p class='text-6xl font-rubik font-bold'>404</p>
     <span class='text-sm text-muted-foreground'>File or resource cannot<br />be located</span></div></div>"; 
    closePage(); 
};

function no() {
    $title='Denied';
    openPage($title); 
    echo "No we aren't going to allow you to access that."; 
    closePage(); 
};

function redirect() {
    $title='Redirecting';
    openPage($title);
    echo "You will be redirected to your intended destination in a moment.";
    closePage();
};

function login() {
    $title='Login';
    openPage($title);
    echo "<div>
    <!-- Login Square -->
    <div class='square max-w-md'>
        <div class='square-title'>Login</div>
        <div class='square-content'>
            <p>We currently don't have the ability<br />to log users in at this time.<br /><br />Please check back soon.<br /><br /><a class='text-the-color hover:text-foreground transition-colors' href='/'>Click here to return home</a></p>
        </div>
    </div>
    <!-- End Login Square -->
    </div>";
    closePage();
};

function logout() {
    $title='Logout';
    openPage($title);
    echo "<div>
    <!-- Logout Square -->
    <div class='square max-w-md'>
        <div class='square-title'>Login</div>
        <div class='square-content'>
            <p>We currently don't have the ability<br />to log users out at this time.<br /><br />Please check back soon.<br /><br /><a class='text-the-color hover:text-foreground transition-colors' href='/'>Click here to return home</a></p>
        </div>
    </div>
    <!-- End Logout Square -->
    </div>";
    closePage();
};

function admin() {
    $title='Administrative Access';
    openPage($title);
    echo "This is a secure area, you may not enter";
    closePage();
};

?>
