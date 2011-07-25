<?php
//require_once("../conf/global_conf.php");

$app_canvas_url = "http://localhost/AppBasic/";

$fb_config = array(
  'appName' => 'Basic Store',
  'appid' => '231766590182305',
  'secret' => '1c53dc28d1aa0423755ee27d132ab61d',
  'cookie' => true,
  'baseurl' => 'http://ec2-50-17-121-184.compute-1.amazonaws.com/AppWelcome/index.php',
);

//The config below should be stored in a database 
$store_config = array(
    'storeName' => 'Brilliant Store',
    'welcomeImages'      => array(1=>'http://ec2-50-17-121-184.compute-1.amazonaws.com/brilliant/brilliant-welcome.jpg'),
    'welcomeImageTargetUrls'  => array(1=>false),
    'fanPageImages' 	 => array(1=>'http://ec2-50-17-121-184.compute-1.amazonaws.com/brilliant/brilliant-earphone.png',
				  2=>'http://ec2-50-17-121-184.compute-1.amazonaws.com/brilliant/brilliant-pear.png',
				  3=>'http://ec2-50-17-121-184.compute-1.amazonaws.com/brilliant/brilliant-coupon.png',
				 ),
    'fanPageImageTargetUrls'=> array(1=>'http://www.brilliantstore.com/in-ear-headphones-os-ep0051.html',
				  2=>'http://www.brilliantstore.com/other-office-equipment-os-hq0014.html',
				  3=>'http://www.brilliantstore.com/promotion/facebook/list.html'
				 ),
);
