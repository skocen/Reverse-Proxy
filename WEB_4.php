<?php
echo'
<!DOCTYPE html>
<html>
<title>WEB 4</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="WEB_4.css">
<body>
<div class="bgimg w3-display-container w3-animate-opacity w3-text-black">
  <div class="w3-display-topleft w3-padding-large w3-xlarge">
    HTTPS connection established
  </div>
  <div class="w3-display-middle">
    <h1 class="w3-jumbo w3-animate-top w3-center">WEB 4</h1>
    <h3 class="w3-animate-top w3-center">Dynamic website created with PHP</h3>
    <hr class="w3-border-grey" style="margin:auto;width:50%">
    <p class="w3-large w3-center w3-animate-top">Powered by Apache and centOS</p>
    <img class="center w3-animate-top w3-large" height="50%" width="50%" src="WEB_4.svg">
    <p class="w3-large w3-center w3-animate-top">OS info:'.php_uname().'</p>
    <p class="w3-large w3-center w3-animate-top">PHP version:'.phpversion().'</p>
    <p class="w3-large w3-center w3-animate-top">Current time:'.date("d.m.Y h:i:s ").'</p>
  </div>
  <div class="w3-display-bottomleft w3-padding-large">
    Made by Sebastijan Kocen
  </div>
</div>
</body>
</html>';
?>