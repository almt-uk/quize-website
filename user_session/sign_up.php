<?php
  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once $path . '/db_handler/web.php';
  if(!isset($_COOKIE['isLoggedIn']) || !$_COOKIE['isLoggedIn'])
  {
    $isLoggedIn = false;
  }
  else
  {
    $isLoggedIn = true;
    
  }
?>

<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="description" content="Log In to your ZeoFlow Account.">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Register | Quest Mode</title>';
echo '';
echo '<!-- Disable tap highlight on IE -->';
echo '<meta name="msapplication-tap-highlight" content="no">';
echo '';
echo '<!-- Web Application Manifest -->';
echo '<link rel="manifest" href="manifest.json">';
echo '';
echo '<!-- Add to homescreen for Chrome on Android -->';
echo '<meta name="mobile-web-app-capable" content="yes">';
echo '<meta name="application-name" content="ZeoFlow">';
echo '<meta name="theme-color" content="#ffffff">';
echo '';
echo '<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<link rel="stylesheet" href="../assets/style/cookieConsent.css" type="text/css">';
echo '<link rel="stylesheet" href="../assets/style/material.css" type="text/css">';
echo '<script src="../assets/script/cookieConsent.js" type="text/javascript"></script>';
echo '';
echo '<style>';
echo 'img[alt="www.000webhost.com"] {';
echo 'display: none !important;';
echo '}';
echo '/* colors */';
echo ':root {';
echo '--pure-material-primary-rgb: 85, 8, 194;';
echo '--pure-material-onsurface-rgb: 0, 0, 0;';
echo '}';
echo '';
echo '/* Body Style */';
echo 'body {';
echo 'margin: 0;';
echo 'background-color: #f5f5f5;';
echo '}';
echo '.unselectable {';
echo '-webkit-user-select: none; /* Safari */';
echo '-moz-user-select: none; /* Firefox */';
echo '-ms-user-select: none; /* IE10+/Edge */';
echo 'user-select: none; /* Standard */';
echo '}';
echo 'a {';
echo 'text-decoration:none';
echo '}';
echo '';
echo '/* Prevent Resizing on Padding */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '';
echo '/* Toolbar Elements Style */';
echo '.toolbarHolder {';
echo 'background-color: #ffffff;';
echo 'width: 100%;';
echo 'height: 58px;';
echo 'top: 0;';
echo 'position: fixed;';
echo 'z-index: 11;';
echo '}';
echo '.toolbarShadow {';
echo 'box-shadow: 0 0px 0px 0 rgba(0, 0, 0, 0.671),';
echo '0 4px 8px 0 rgba(0, 0, 0, 0.19);';
echo '}';
echo '.toolbarContent {';
echo 'display: inline-block;';
echo 'height: 42px;';
echo 'margin-top: 8px;';
echo 'margin-left: 50%;';
echo 'transform: translate(-50%, 0%);';
echo '}';
echo '.titleToolbar {';
echo 'float: left;';
echo 'color: #3b3b3b;';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 27px;';
echo 'font-family: "PT Sans";';
echo 'padding-left: 10px;';
echo 'padding-top: 3px;';
echo '-webkit-filter: drop-shadow(0px 0px 1px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 1px #222);';
echo '}';
echo '.titleToolbar:hover {';
echo 'color: #000000;';
echo '-webkit-filter: drop-shadow(0px 0px 4px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 4px #000000);';
echo 'cursor: pointer;';
echo '}';
echo '';
echo '/* Toolbar User Session Style */';
echo '.toolbarUserSessionHolder {';
echo 'float: right;';
echo 'width: fit-content;';
echo 'height: 38px;';
echo 'padding: 10px;';
echo 'padding-right: 20px;';
echo '}';
echo '.toolbarUserSessionLogIn {';
echo 'float: left;';
echo 'margin-left: 10px;';
echo 'margin-top: 4px;';
echo 'padding-top: 6px;';
echo 'margin-bottom: 4px;';
echo 'padding-bottom: 6px;';
echo 'font-weight: 900;';
echo 'font-size: 16px;';
echo 'padding-left: 18px;';
echo 'padding-right: 18px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo 'background-color: #ffffff;';
echo 'border-radius: 5px;';
echo '}';
echo '.toolbarUserSessionLogIn:hover {';
echo 'transform: scale(0.9);';
echo 'background-color: #ececec;';
echo '-moz-box-shadow: inset 0 0 10px #000000;';
echo '-webkit-box-shadow: inset 0 0 10px #000000;';
echo 'box-shadow: inset 0 0 10px #000000;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(81, 255, 0, 0.5));';
echo 'filter: drop-shadow(0px 0px 3px rgb(118, 255, 63));';
echo 'cursor: pointer;';
echo '}';
echo '';
echo '/* Website Content Holder */';
echo '.contentHolder {';
echo 'padding-top: 90px;';
echo 'padding-bottom: 30px;';
echo 'width: 100%;';
echo 'position: absolute;';
echo '}';
echo '';
echo '/* Sign Up Holder Style */';
echo '.signUpHolder {';
echo 'width: 400px;';
echo 'background-color: rgb(236, 236, 236);';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo 'padding: 10px;';
echo 'padding-left: 20px;';
echo 'padding-right: 20px;';
echo 'position: fixed;';
echo 'top: 50%;';
echo 'left: 50%;';
echo 'transform: translateY(-50%) translateX(-50%);';
echo 'border-radius: 20px;';
echo '-webkit-filter: drop-shadow(0px 0px 7px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 7px #222);';
echo '}';
echo '.signUpTitle {';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 25px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(0, 0, 0);';
echo 'margin-bottom: 5px;';
echo '}';
echo '.codeHolder {';
echo 'width: 100%;';
echo 'margin-top: 2px;';
echo 'text-align: center;';
echo 'font-weight: 900;';
echo 'font-size: 17px;';
echo 'color: rgb(0, 0, 0);';
echo '}';
echo '.inputHolder {';
echo 'width: 90%;';
echo 'font-weight: 900;';
echo 'font-size: 18px;';
echo 'font-family: "PT Sans";';
echo 'position: relative;';
echo 'left: 50%;';
echo 'transform: translateX(-50%);';
echo '}';
echo '.toolbarUserSessionSignUp {';
echo 'position: relative;';
echo 'left: 50%;';
echo 'transform: translateX(-50%);';
echo 'width: fit-content;';
echo 'margin-top: 20px;';
echo 'padding-top: 6px;';
echo 'margin-bottom: 10px;';
echo 'padding-bottom: 6px;';
echo 'font-weight: 900;';
echo 'font-size: 16px;';
echo 'padding-left: 18px;';
echo 'padding-right: 18px;';
echo 'font-family: "PT Sans";';
echo 'color: rgb(255, 255, 255);';
echo 'background-color: #c50000;';
echo '-webkit-filter: drop-shadow(0px 0px 4px #8d0000c0);';
echo 'filter: drop-shadow(0px 0px 4px #8d0000be);';
echo '-moz-box-shadow: inset 0 0 10px #00000083;';
echo '-webkit-box-shadow: inset 0 0 10px #00000083;';
echo 'box-shadow: inset 0 0 10px #00000083;';
echo 'border-radius: 5px;';
echo '}';
echo '.toolbarUserSessionSignUp:hover {';
echo 'position: relative;';
echo 'left: 50%;';
echo 'transform: translateX(-50%) scale(0.9);';
echo 'background-color: #ff1d1d;';
echo '-moz-box-shadow: inset 0 0 10px #000000;';
echo '-webkit-box-shadow: inset 0 0 10px #000000;';
echo 'box-shadow: inset 0 0 10px #000000;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(255, 40, 40, 0.5));';
echo 'filter: drop-shadow(0px 0px 3px rgb(255, 88, 88));';
echo 'cursor: pointer;';
echo '}';
echo '';
echo '</style>';
echo '';
echo '</head>';
echo '<body>';
echo '';
echo '<div class="toolbarHolder toolbarShadow unselectable" id="toolbar">';
echo '<div class="toolbarContent">';
echo '<div class="titleToolbar" onclick="' . header("Location: ../index") . '">';
echo 'Quest Mode';
echo '</div>';
echo '</div>';
echo '<div class="toolbarUserSessionHolder">';
echo '<div class="toolbarUserSessionLogIn" onclick="window.open("log_in.html", "_self");">';
echo 'Log In';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div class="contentHolder">';
echo '<div class="signUpHolder">';
echo '<div class="signUpTitle">';
echo 'Sign Up';
echo '</div>';
echo '<div class="inputHolder">';
echo '<label class="pure-material-textfield-outlined codeHolder">';
echo '<input class="inputHolder" id="quizzCode" placeholder=" " type="email" required>';
echo '<span>Email</span>';
echo '</label>';
echo '</div>';
echo '<div class="inputHolder">';
echo '<label class="pure-material-textfield-outlined codeHolder">';
echo '<input class="inputHolder" id="quizzCode" placeholder=" " type="password" required>';
echo '<span>Password</span>';
echo '</label>';
echo '</div>';
echo '<div class="inputHolder">';
echo '<label class="pure-material-textfield-outlined codeHolder">';
echo '<input class="inputHolder" id="quizzCode" placeholder=" " type="text" required>';
echo '<span>Username</span>';
echo '</label>';
echo '</div>';
echo '<div class="inputHolder">';
echo '<label class="pure-material-textfield-outlined codeHolder">';
echo '<input class="inputHolder" id="quizzCode" placeholder=" " type="text" required>';
echo '<span>University</span>';
echo '</label>';
echo '</div>';
echo '<div class="toolbarUserSessionSignUp">';
echo 'Sign Up';
echo '</div>';
echo '</div>';
echo '</div>';
echo '';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '';
echo '</body>';
?>