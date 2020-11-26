<?php
/*
بسم الله الرحمن الرحیم 
--------------------
برای دریافت کلی سورس و قالب و افزونه حتما داخل کانال عضو شوید 

حمایت کنید تا بیشتر افزونه و سورس و قالب درکانال قرار بدیم

کانال سورس خونه ! پر از سورس هاي ربات هاي تلگرامي !
لطفا در کانال ما عضو شويد 

@newsabaweb

https://t.me/newsabaweb
*/


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
set_time_limit(300);
error_reporting(0);
include('database.php');
$connect->query('SET CHARACTER SET utf8mb4');
##----------[fake update]----------##
$telegram_ip_ranges = [['lower' => '149.154.160.0', 'upper' => '149.154.175.255'],['lower' => '91.108.4.0','upper' => '91.108.7.255']];
$ip_dec = (float) sprintf('%u', ip2long($_SERVER['REMOTE_ADDR']));$ok=false;
foreach ($telegram_ip_ranges as $telegram_ip_range) if (!$ok) {
$lower_dec = (float) sprintf('%u', ip2long($telegram_ip_range['lower']));
$upper_dec = (float) sprintf('%u', ip2long($telegram_ip_range['upper']));
if ($ip_dec >= $lower_dec and $ip_dec <= $upper_dec) $ok=true; }
if (!$ok) die("Hmm, I don't trust you...");



define('API_KEY','1451591023:AAFpQHzNYgHRObkbPm7tqak3Y7aKGVWzoaM');
//========================================//
function newsabaweb($method,$datas=[]){
    $url = 'https://api.telegram.org/bot'.API_KEY.'/'.$method;
$ch = curl_init();
    curl_setopt($ch,CURLOPT_URL,$url);
    curl_setopt($ch,CURLOPT_RETURNTRANSFER,true);
    curl_setopt($ch,CURLOPT_POSTFIELDS,$datas);
    $res = curl_exec($ch);
    if(curl_error($ch)){
        var_dump(curl_error($ch));
    }else{
        return json_decode($res);
    }
}
//========================================//
#function
function sendmsg($user_id,$phone,$msg_id,$key = null) {
newsabaweb('sendmessage', [
'chat_id'=>$user_id, 
'text'=>$phone, 
'reply_to_message_id'=>$msg_id,
'reply_markup'=>$key,
]);
}
//=======================================//
#variables
$get = json_decode(file_get_contents('php://input'));
$phone = $get->message->text;
$user_id = $get->message->from->id;
$msg_id = $get->message->message_id;
mkdir("data/$chat_id");
//=====================================//
#data
$fox = file_get_contents("data/$user_id/sms.txt");
$fox5 = file_get_contents("data/$user_id/sms5.txt");
$fox30 = file_get_contents("data/$user_id/sms30.txt");
$fox80 = file_get_contents("data/$user_id/sms80.txt");
$fox100 = file_get_contents("data/$user_id/sms100.txt");
$fox130 = file_get_contents("data/$user_id/sms130.txt");
$fox150 = file_get_contents("data/$user_id/sms150.txt");
$fox180 = file_get_contents("data/$user_id/sms180.txt");
$fox200 = file_get_contents("data/$user_id/sms200.txt");
//====================(@MrNimble)======================//
#menu
$menu = json_encode([
'keyboard'=>[
[['text'=>'😈 اسپم شماره 😈']],
[['text'=>'🚦 راهنما'],['text'=>'▫️ کانال ما ▫️']],
],"resize_keyboard"=>true]);
//====================(@MrNimble)======================//
#back
$back = json_encode([
'keyboard'=>[
[['text'=>'🔙 بازگشت به منوی قبلی']],
],"resize_keyboard"=>true]);
mkdir("data");
mkdir("data/$user_id");


  $connect = mysqli_connect("sql303.gigfa.com", "gigfa_27320549", "d85453a");
  if (!mysqli_select_db($connect, 'gigfa_27320549_sabatarget')) {
    mysqli_close($connect);
    die("ERROR: Can't Select Database;" . mysqli_error($connect));
  }
  //check for user

              $userid = $user_id;
			  
  $result = mysqli_query($connect, "SELECT '$userid' FROM users WHERE userid = '$userid' AND membership = 'membership' LIMIT 1" ); 
  $rows = mysqli_num_rows($result);  	 
if  ($rows['userid'] == $userid  ){

}else{

	$query = "INSERT INTO users(userid, membership) VALUES('$userid', '$membership')";
    mysqli_query($connection, $query);

}


//========================================//
#select




  $connect = mysqli_connect("sql303.gigfa.com", "gigfa_27320549", "d85453a");
  if (!mysqli_select_db($connect, 'gigfa_27320549_sabatarget')) {
    mysqli_close($connect);
    die("ERROR: Can't Select Database;" . mysqli_error($connect));
  }
  //check for user

              $userid = $user_id;

  $result = mysqli_query($connect, "SELECT '$userid' FROM users WHERE userid = '$userid' AND membership = 'membership' LIMIT 1" ); 
  $rows = mysqli_num_rows($result);  	 
  $membership = $rows['membership'];
  $check_payment = $rows['membership'];

 if ($check_payment==1 ){



$select = json_encode([
'keyboard'=>[
[['text'=>'5 تا تستی 😂']],
[['text'=>'🗃 30 عدد'],['text'=>'🗃 50 عدد️']],
[['text'=>'🗃 80 عدد'],['text'=>'🗃 100 عدد️']],
[['text'=>'🗃 130 عدد'],['text'=>'🗃150 عدد️']],
[['text'=>'🗃 180 عدد'],['text'=>'🗃 200 عدد️']],
[['text'=>'🔙 بازگشت به منوی قبلی']],
],"resize_keyboard"=>true]);


 }
else
	
	{
		
		
		
sendmsg($user_id,"

سلام کاربر عزیزم موجودی شما کافی نمیباشد 
برای استفاده از ربات حساب خود را شارژ کنید

برای شارژ حساب خود روی لینک زیر کلیک کنید


http://127.0.0.1/payment.php


",$msg_id,$back);

		
		
		
		
	}
	





//=======================================//
#start
if($phone == "/start" or $phone == "🔙 بازگشت به منوی قبلی") {
file_put_contents("data/$user_id/sms.txt","none");
		$user = file_get_contents('Member.txt');
	$members = explode("\n",$user);
	if(!in_array($chat_id,$members)){
		$add_user = file_get_contents('Member.txt');
		$add_user .= $chat_id."\n";
		file_put_contents('Member.txt',$add_user);
	}
sendmsg($user_id,"سلام کاربر گرامی

 به ربات sms bomber خوش امدید 💚

با این ربات میتوانید به راحتی هر شماره ای را که دوست دارید پیام بصورت اسپم ارسال کنید 😁😂

🔺 مسولیت استفاده از این ربات بر عهده خودتان است 🔻

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id,$menu);
}
//========================================//
#spam
if($phone=="😈 اسپم شماره 😈") {
file_put_contents("data/$user_id/sms.txt","none");
sendmsg($user_id,"✨ در این مرحله تعدادی پیام هایی که میخواهید به کاربر ارسال
شود را از منوی زیر انتخاب کنید:

🔻 مسولیت استفاده برعهده خودتان است 🔻",$msg_id,$select);
}
//======================================//
if($phone=="5 تا تستی 😂") {
file_put_contents("data/$user_id/sms5.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox5 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms5.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال 5 عدد پیام تستی به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 5; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id,"5 عدد پیام برای تست به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//======================================//
if($phone=="🗃 30 عدد") {
file_put_contents("data/$user_id/sms30.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox30 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms30.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 30 عدد پیام  به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 30; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 30 عدد پیام  به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//======================================//
if($phone=="🗃 50 عدد") {
file_put_contents("data/$user_id/sms50.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox50 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms50.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 50 عدد پیام  به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 50; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 50 عدد پیام به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//===================================//
if($phone=="🗃 80 عدد") {
file_put_contents("data/$user_id/sms80.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox80 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms80.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 80 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 80; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 80 عدد پیام برای به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($phone=="🗃 100 عدد") {
file_put_contents("data/$user_id/sms100.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox100 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms100.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 100 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 100; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 100 عدد پیام به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//=========================================//
if($phone=="🗃 130 عدد") {
file_put_contents("data/$user_id/sms130.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox130 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms130.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 130 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 130; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 130 عدد پیام به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($phone=="🗃 150 عدد") {
file_put_contents("data/$user_id/sms150.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox150 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms150.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 150 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 150; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 150 عدد پیام به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($phone=="🗃 180 عدد") {
file_put_contents("data/$user_id/sms180.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox180 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms180.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 180 عدد پیام به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 180; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 180 عدد پیام به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($phone=="🗃 200 عدد") {
file_put_contents("data/$user_id/sms200.txt","attack");
sendmsg($user_id,"✨شماره فردی را که میخواهید پیام ها به او ارسال شوند را رسال کنید :

❗️ برای مثال:
09123456789",$msg_id,$back);
}
elseif($fox200 == "attack"&&$phone!="🔙 بازگشت به منوی قبلی") {
if(is_numeric($phone)) {
file_put_contents("data/$user_id/sms200.txt","none");
sendmsg($user_id,"🔗 شروع فرایند ارسال  🗃 200 عدد پیام تستی به شماره ارسال شده ❗️

📍  نتیجه ارسال بزودی برای شما ارسال میشود ✔️",$msg_id);
for($i=1; $i <= 200; $i++) {
file_get_contents("/Api/api.php?tel=$phone");
}
sendmsg($user_id," 🗃 200 عدد پیام  به شماره $phone ارسال شد ✅

🌟 وبسایت ما:
🆔 www.saba-web.ir

🌟 کانال ما:
🆔 @newsabaweb",$msg_id);}
 else {
sendmsg($user_id,"❗️لطفا شماره را بصورت عدد ارسال کنید️",$msg_id);}
}
//========================================//
if($phone=="🚦 راهنما") {
sendmsg($user_id,"راهنمای استفاده از ربات:

کار با ربات بسیار اسان است فقط کافی است

که شما شماره فرد مورد نظرتون رو به ربات بدبد و میزان پیام را نیز مشخص کنید

ربات بصورت خودکار به مقدار تعیین شده به شماره ارسالی شما

پیامک از سمت api ارسال خواهد کرد

موفق باشید",$msg_id,$back);
}
if($phone=="▫️ کانال ما ▫️") {
sendmsg($user_id,"

کانال صباوب 

⚜️کانالی متفاوت😊 آموزش.ترفند.نرم افزار 
❤️مارو با دوستان خود به اشتراک بگذارید❤️

🆔 @newsabaweb",$msg_id,$back);
}
?>