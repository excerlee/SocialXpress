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
    'welcomeBannerUrl'      => 'http://cloud.lbox.me/images/wholesale/201105/facebooksplash0523/en/image_01.jpg',
    'welcomeBannerActionUrl' => 'http://www.brilliantstore.com/',
    'fanBannerUrl' 	    => 'http://www.brilliantstore.com/img/banner-rc-helicopters.jpg',
    'fanBannerActionUrl'     => 'http://www.brilliantstore.com/electric-rc-helicopters.html',
);
