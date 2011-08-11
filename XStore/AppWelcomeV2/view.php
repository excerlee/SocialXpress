<?php
require_once('./app_conf.php');

function view($couponMsg) {
    
$view=<<<QQQ
<!-- !DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>"LIKE" = A Coupon Code</title>
</head>
<body-->
<div style="text-align: center; width: 500px; margin: auto; border: 1px solid #ccc">
<div style="text-align: left; background: url(http://www.brilliantstore.com/promotion/20110810/images/t_1.jpg) no-repeat; height: 163px;">
    <div style="color: red; font-weight: bold; font-size: 20px; padding-top: 100px; padding-left: 20px;">
        Coupon Code:
        <span style="font-weight: bold; font-size: 24px; color: yellow; border: 1px solid #696929; padding: 10px;">
        {$couponMsg}
        </span>
    </div>
</div>
<div><a href="http://www.brilliantstore.com/jewelry-os-hp1152.html"
	target="_blank"><img src="http://www.brilliantstore.com/promotion/20110810/images/t_2.jpg" border="0" width="500px"></a></div>
<div style="text-align: left; padding: 4px;">
<p style="font-weight: bold; color: red;">NO OTHER PURCHASES NECESSARY!</p>
<p>What can you get for $0.01? "Like" BrilliantStore now and you can get
a nice gift (only $0.01 shipping fee required) and 10% off for storewide
products! This is a coupon code for BrilliantStore fans only. We welcome
you to post our invitation to your friend and on the forums.</p>
</div>
</div>

<!--/body>
</html-->
QQQ;

    return $view;
}

function getCouponErrorMsg() {
    
    global $store_config;
    $storeName = $store_config['storeName'];
    $storeUrl  = $store_config['storeUrl'];
    $storeCCEmail = $store_config['storeCCEmail'];
    
    $errorMsg=<<<QQQ
    <p><font color=red>There is some problem with the system, please refresh the page and try again. 
    If still not working, please contact {$storeName} at <a href="mailto:{$storeCCEmail}?subject=[Facebook App] Coupon Problem">{$storeCCEmail}</a></font></p>
QQQ;
    return $errorMsg;
}
?>