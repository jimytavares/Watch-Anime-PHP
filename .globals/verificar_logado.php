<?php

session_start();

if((!isset ($_SESSION['login']))){
  
  unset($_SESSION['login']);
  unset($_SESSION['nickname']);
  header('location: /WATCH-ANIME-PHP/trunk/index.php');

}

?>