<?php
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/
/*
● سورس ربات دریافت لایک و فالور اینستاگرام و فروش آن
● نویسنده : @Source_Home,@Source_Home
● کانال ما : @Source_Home
● دیتابیس ربات : Mysqli
● لطفا با ذکر منبع کپی نمایید 
*/
ob_start();
error_reporting(0);

// database php version 7.0^
$servername = "sql303.gigfa.com"; // localhost or host ip
$username = "gigfa_27320549"; // یوزرنیم دیتابیس
$password = "d85453a"; // پسورد دیتابیس
$dbname = "gigfa_27320549_sabatarget"; // اسم دیتابیس
$connect = new mysqli($servername, $username, $password, $dbname);

##----------[Bot Config]----------##
define('API_KEY','1451591023:AAFpQHzNYgHRObkbPm7tqak3Y7aKGVWzoaM');
$admins = array('208138806');
$kanal = array('@NewSabaweb');
$join = array('member','administrator','creator'); // دست نزنید
$no_send = array('/start','/panel','➡️','↪️','من'); // دست نزنید
/*
کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 
@source_home
https://t.me/source_home
*/