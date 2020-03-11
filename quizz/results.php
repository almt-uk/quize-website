<?php
  session_start();
  if(isset($_SESSION["quizzSessionID"]))
  {
    header("Location: ../",  true);
    exit;
  }

  if(!isset($_SESSION['isLoggedIn']))
  {
    $isLoggedIn = false;
  }
  else
  {
    $isLoggedIn = $_SESSION['isLoggedIn'];
  }

  $quizzSessionID = $_SESSION["quizzSessionID"];
  $answerChose = $_SESSION["answerChose"];
  $currentQuestion = $_SESSION["currentQuestion"];
  $quizzData = $_SESSION["quizzData"];
  $questionRowsData = $_SESSION["questionRowsData"];

  unset($_SESSION["quizzSessionID"]);
  unset($_SESSION["answerChose"]);
  unset($_SESSION["currentQuestion"]);
  unset($_SESSION["quizzData"]);
  unset($_SESSION["questionRowsData"]);

  $path = $_SERVER['DOCUMENT_ROOT'];
  require_once $path . '/db_handler/web.php';
  $db = new DbHandlerWeb();
  $db->initializeAPI("xtoAkWqVGp4nDtW6tZL1AaJUCl9I3tYcqjfTBhSu", "PHZ7dh4vHtbJoF7kD2RtZQUxi3opTFeXvpa0Jp7R");
  
?>

<?php
echo '<head>';
echo '<meta charset="utf-8">';
echo '<meta http-equiv="X-UA-Compatible" content="IE=edge">';
echo '<meta name="description" content="Log In to your ZeoFlow Account.">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
echo '<title>Quizz Results</title>';
echo '<!-- Disable tap highlight on IE -->';
echo '<meta name="msapplication-tap-highlight" content="no">';
echo '<!-- Web Application Manifest -->';
echo '<link rel="manifest" href="manifest.json">';
echo '<!-- Add to homescreen for Chrome on Android -->';
echo '<meta name="mobile-web-app-capable" content="yes">';
echo '<meta name="application-name" content="ZeoFlow">';
echo '<meta name="theme-color" content="#ffffff">';
echo '<link href="https://fonts.googleapis.com/css?family=PT+Sans&display=swap" rel="stylesheet">';
echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>';
echo '<link rel="stylesheet" href="../assets/style/cookieConsent.css" type="text/css">';
echo '<link rel="stylesheet" href="../assets/style/material.css" type="text/css">';
echo '<script src="../assets/script/cookieConsent.js" type="text/javascript"></script>';
echo '<style>';
echo 'img[alt="www.000webhost.com"] {';
echo 'display: none !important;';
echo '}';
echo '/* Body Style Style */';
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
echo '.hideElement {';
echo 'display: none;';
echo '}';
echo '/* Prevent Resizing on Padding Style */';
echo '* {';
echo '-moz-box-sizing: border-box;';
echo '-webkit-box-sizing: border-box;';
echo 'box-sizing: border-box;';
echo '}';
echo '/* Website Content Holder Style */';
echo '.contentHolder {';
echo 'width: 100%;';
echo 'height: 100%;';
echo 'position: absolute;';
echo 'padding-left: 150px;';
echo 'padding-right: 150px;';
echo '}';
echo '/* Answer Content Style */';
echo '/* Result Style */';
echo '.resultHolder {';
echo 'position: relative;';
echo 'top: 50%;';
echo 'left: 50%;';
echo 'padding-top: 40px;';
echo 'transform: perspective(1px) translateY(-60%) translateX(-50%);';
echo 'height: 70vh;';
echo '}';
echo '.resultsHolder {';
echo 'width: 50%;';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: translateY(-50%);';
echo 'background-color: rgb(0, 61, 25);';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'float: left;';
echo 'border-radius: 10px;';
echo '}';
echo '.resultOption {';
echo 'position: relative;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateX(-50%);';
echo 'width: 100%;';
echo 'height: 100px;';
echo 'padding: 10px;';
echo '}';
echo '.resultOptionHolder {';
echo 'height: 100%;';
echo 'width: 100%;';
echo 'border-radius: 10px;';
echo '-webkit-filter: drop-shadow(0px 0px 3px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 3px #222);';
echo '}';
echo '.resultOptionMore {';
echo 'position: relative;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateX(-50%);';
echo 'width: 50%;';
echo 'height: 40px;';
echo 'padding: 10px;';
echo '}';
echo '.resultMoreText {';
echo 'position: fixed;';
echo 'width: 100%;';
echo 'left: 50%;';
echo 'top: -20px;';
echo 'transform: perspective(1px) translateX(-50%);';
echo 'font-family: "PT Sans";';
echo 'color: rgb(255, 255, 255);';
echo 'font-weight: 900;';
echo 'font-size: 40px;';
echo 'text-align: center;';
echo 'text-shadow: 2px 0 rgb(2, 53, 36);';
echo '-webkit-filter: drop-shadow(0px 0px 2px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 2px #222);';
echo 'letter-spacing: 0px;';
echo '}';
echo '.resultFrame {';
echo '-moz-box-shadow: inset 0 0 5px #000000;';
echo '-webkit-box-shadow: inset 0 0 5px #000000;';
echo 'box-shadow: inset 0 0 5px #000000;';
echo 'border: 10px solid rgba(0, 0, 0, 0.418);';
echo 'background-color: #05923a;';
echo '}';
echo '.percentResult {';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'background-color: #00000059;';
echo 'width: 100%;';
echo '}';
echo '.percentResultNo {';
echo 'position: fixed;';
echo 'width: 100%;';
echo 'left: 50%;';
echo 'top: 2px;';
echo 'transform: perspective(1px) translateX(-50%);';
echo 'font-family: "PT Sans";';
echo 'color: rgba(206, 255, 126, 0.726);';
echo 'font-weight: 900;';
echo 'font-size: 40px;';
echo 'text-align: center;';
echo '-webkit-filter: drop-shadow(0px 0px 2px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 2px #222);';
echo 'letter-spacing: 0px;';
echo '}';
echo '@-webkit-keyframes gradientBG {';
echo '0% {';
echo 'background-position: 4% 50%;';
echo '}';
echo '50% {';
echo 'background-position: 96% 50%;';
echo '}';
echo '100% {';
echo 'background-position: 4% 50%;';
echo '}';
echo '}';
echo '@keyframes gradientBG {';
echo '0% {';
echo 'background-position: 4% 50%;';
echo '}';
echo '50% {';
echo 'background-position: 96% 50%;';
echo '}';
echo '100% {';
echo 'background-position: 4% 50%;';
echo '}';
echo '}';
echo '/* Countdown Style */';
echo '.countdownHolder {';
echo 'width: 90px;';
echo 'height: 90px;';
echo 'border-radius: 50%;';
echo 'background-color: rgb(0, 0, 0);';
echo '-webkit-filter: drop-shadow(0px 0px 5px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 5px #222);';
echo 'position: relative;';
echo 'top: 10px;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateX(-50%);';
echo 'z-index: 1;';
echo '}';
echo '.countdownHolder:hover {';
echo 'position: relative;';
echo 'top: 10px;';
echo 'left: 50%;';
echo 'transform: perspective(1px) translateX(-50%) scale(0.9);';
echo '}';
echo '.countdownTime {';
echo 'text-align: center;';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: perspective(1px) translateY(-50%);';
echo 'font-family: "PT Sans";';
echo 'text-shadow: 0px 1px, 1px 0px, 1px 1px;';
echo 'font-weight: 900;';
echo 'font-size: 34px;';
echo 'color: rgb(255, 255, 255);';
echo '}';
echo '/* Exp Gained Holder */';
echo '.gainExpHolder {';
echo 'width: 47%;';
echo 'position: relative;';
echo 'top: 50%;';
echo 'transform: translateY(-50%);';
echo 'margin-left: 3%;';
echo 'background: linear-gradient(135deg, #bb09d3, #f07510);';
echo 'background-size: 400% 400%;';
echo '-webkit-animation: gradientBG 6s ease infinite;';
echo 'animation: gradientBG 6s ease infinite;';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0,0,0,0.5));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'float: left;';
echo 'border-radius: 10px;';
echo '}';
echo '.expGainedHolder {';
echo 'padding-top: 10px;';
echo '}';
echo '.expGainedHolderExtra {';
echo 'padding-top: 50px;';
echo 'padding-bottom: 50px;';
echo '}';
echo '.expGainedTitle {';
echo 'text-align: center;';
echo 'font-family: "PT Sans";';
echo 'font-weight: 900;';
echo 'font-size: 20px;';
echo 'color: rgb(255, 255, 255);';
echo '-webkit-filter: drop-shadow(0px 0px 6px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 6px #222);';
echo '}';
echo '.expGainedContent {';
echo 'text-align: center;';
echo 'font-family: "PT Sans";';
echo 'text-shadow: 0px 1px, 1px 0px, 1px 1px;';
echo 'font-weight: 900;';
echo 'font-size: 30px;';
echo 'color: rgb(255, 255, 255);';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo '}';
echo '/* User Holder */';
echo '.notLoggedIn {';
echo 'margin-top: 10px;';
echo '}';
echo '.userSessionHolder {';
echo 'float: left;';
echo 'width: 50%;';
echo '}';
echo '.logInHolder, .signUpHolder {';
echo 'width: fit-content;';
echo 'font-family: "PT Sans";';
echo 'font-weight: 900;';
echo 'font-size: 20px;';
echo 'color: rgb(255, 255, 255);';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'background-color: #00000042;';
echo 'padding-top: 5px;';
echo 'padding-bottom: 5px;';
echo 'padding-left: 10px;';
echo 'padding-right: 10px;';
echo 'border-radius: 5px;';
echo '}';
echo '.logInHolder {';
echo 'position: relative;';
echo 'left: 70%;';
echo 'transform: translateX(-50%);';
echo '}';
echo '.signUpHolder {';
echo 'position: relative;';
echo 'left: 30%;';
echo 'transform: translateX(-50%);';
echo '}';
echo '.logInHolder:hover {';
echo 'position: relative;';
echo 'left: 70%;';
echo 'transform: translateX(-50%) scale(0.9);';
echo 'cursor: pointer;';
echo '-webkit-filter: drop-shadow(0px 0px 20px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 20px #222);';
echo 'background-color: #1f58047a;';
echo '}';
echo '.signUpHolder:hover {';
echo 'position: relative;';
echo 'left: 30%;';
echo 'transform: translateX(-50%) scale(0.9);';
echo 'cursor: pointer;';
echo '-webkit-filter: drop-shadow(0px 0px 20px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 20px #222);';
echo 'background-color: #5804047a;';
echo '}';
echo '.contentSessionHolder {';
echo 'font-family: "PT Sans";';
echo 'font-weight: 900;';
echo 'font-size: 16px;';
echo 'color: rgb(255, 255, 255);';
echo '-webkit-filter: drop-shadow(0px 0px 10px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 10px #222);';
echo 'margin-top: 55px;';
echo 'margin-bottom: 10px;';
echo 'text-align: center;';
echo '}';
echo '/* Hero Picker Style */';
echo '.heroClassesHolder {';
echo 'position: relative;';
echo 'left: 50%;';
echo 'width: fit-content;';
echo 'margin-bottom: -300px;';
echo 'transform: translateX(-50%);';
echo '}';
echo '.heroClassHolder {';
echo 'float: left;';
echo 'background-color: #d3d3d3be;';
echo 'width: 90px;';
echo 'height: 90px;';
echo 'margin: 5px;';
echo 'border-radius: 50%;';
echo 'margin-top: 10px;';
echo 'margin-bottom: 20px;';
echo '}';
echo '.heroClassHolder:hover {';
echo 'cursor: pointer;';
echo 'position: relative;';
echo 'transform: scale(0.9);';
echo 'cursor: pointer;';
echo '-webkit-filter: drop-shadow(0px 0px 20px rgba(0, 0, 0, 0.774));';
echo 'filter: drop-shadow(0px 0px 20px #222);';
echo '}';
echo '.heroClassImg {';
echo 'border-radius: 50%;';
echo 'width: 90px;';
echo 'height: 90px;';
echo 'background-image: radial-gradient(#cecece, #ffffff);';
echo '}';
echo '</style>';
echo '</head>';
?>

<?php
echo '<body>';
echo '<div class="contentHolder unselectable">';
echo '<div class="resultHolder" id="resultHolder">';
echo '<div class="resultsHolder">';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder resultFrame">';
echo '<div class="percentResultNo">';
echo '1. Name 134657';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder resultFrame">';
echo '<div class="percentResultNo">';
echo '2. Name 21212124';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder resultFrame">';
echo '<div class="percentResultNo">';
echo '3. Name 534637';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="resultOptionMore">';
echo '<div class="resultMoreText">';
echo '.....';
echo '</div>';
echo '</div>';
echo '<div class="resultOption">';
echo '<div class="resultOptionHolder resultFrame">';
echo '<div class="percentResultNo">';
echo '5. Name 32676';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<a href="../index.html">';
echo '<div class="countdownHolder unselectable" id="countdownHolder">';
echo '<div class="countdownTime" id="countdownTime">';
echo 'Done';
echo '</div>';
echo '</div>';
echo '</a>';
echo '</div>';
echo '<div class="gainExpHolder resultFrame">';
echo '<div class="expGainedHolder">';
echo '<div class="expGainedTitle">';
echo 'You have gained';
echo '</div>';
echo '<div class="expGainedContent">';
echo '2918 EXP';
echo '</div>';
echo '</div>';
echo '<div class="notLoggedIn">';
echo '<div class="userSessionHolder">';
echo '<div class="logInHolder">';
echo 'Log In';
echo '</div>';
echo '</div>';
echo '<div class="userSessionHolder">';
echo '<div class="signUpHolder">';
echo 'Sign Up';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div class="contentSessionHolder">';
echo 'in order to increase the exp for your character:';
echo '</div>';
echo '<div class="heroClassesHolder">';
echo '<div class="heroClassHolder">';
echo '<img class="heroClassImg"/>';
echo '</div>';
echo '<div class="heroClassHolder">';
echo '<img class="heroClassImg"/>';
echo '</div>';
echo '<div class="heroClassHolder">';
echo '<img class="heroClassImg"/>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '</div>';
echo '<div id="myCookieConsent">';
echo '<a id="cookieButton">Understood</a>';
echo '<div>To help personalise content and provide a safer experience, we use cookies. By clicking on or navigating the site, you agree to allow us to collect information on and off Quest Mode through cookies. Learn more, including about available controls: <a href="/">Cookie Policy</a>.</div>';
echo '</div>';
echo '</body>';
?>