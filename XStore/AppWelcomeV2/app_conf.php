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
    //Welcome images
    'welcomeImages'      => array(1=>'http://www.brilliantstore.com/promotion/facebook/banner3.jpg'),
    //Welcome images action URLS
    'welcomeImageTargetUrls'  => array(1=>false),

    //FAN page images
    'fanPageImages' 	 => array(1=>'http://www.brilliantstore.com/promotion/facebook/img/t27_1.jpg',
				  2=>'http://www.brilliantstore.com/promotion/facebook/img/t27_2.jpg',
				  3=>'http://www.brilliantstore.com/promotion/facebook/img/t27_3.jpg',
				 ),
    //FAN page images action URLs
    'fanPageImageTargetUrls'=> array(1=>'http://www.brilliantstore.com/in-ear-headphones-os-ep0051.html',
				  2=>'http://www.brilliantstore.com/other-office-equipment-os-hq0014.html',
				  3=>'http://www.brilliantstore.com/',
				 ),
				 
    'couponWSUrl'=>'http://www.brilliantstore.com/mycart/getfbcouponcode.php',
    'couponWSToken'=>'5fb687e254e3367a96849622a53d1aab',

);

include("./app_conf.overrides.php");
