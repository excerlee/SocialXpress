<?php
require_once("./common.php");
require_once('./app_conf.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo $store_config['storeName']; ?></title>


</head>
<body>
<?php 

$user            =   null; //facebook user uid

// Create our Application instance.
$facebook = new Facebook(array(
  'appId'  => $fb_config['appid'],
  'secret' => $fb_config['secret'],
  'cookie' => true,
));

//Facebook Authentication part
$user       = $facebook->getUser();

$req = $facebook->getSignedRequest();

function parsePageSignedRequest( $req ) {
//    if (isset($_REQUEST['signed_request'])) {
      if (isset($req)) {
          $encoded_sig = null;
          $payload = null;
          list($encoded_sig, $payload) = explode('.', $_REQUEST['signed_request'], 2);
          $sig = base64_decode(strtr($encoded_sig, '-_', '+/'));
          $data = json_decode(base64_decode(strtr($payload, '-_', '+/'), true));
          return $data;
    }
    return false;
}

function renderPage($imgList, $urlList) {
    global $store_config;
    foreach ( $store_config[$imgList] as $id=>$imgUrl) :
		if ($store_config[$urlList][$id]) :?>
			<a target='_blank' href="<?php echo $store_config[$urlList][$id] ;?>">
				<img src="<?php echo $imgUrl ;?>" width=490>
			</a>
		<?php else: ?>
			<img src="<?php echo $imgUrl ;?>" width=490>
		<?php endif; ?>
	<?php endforeach; 
}


function doCUrlCall($url) {
    
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_TIMEOUT, 60);
	$result = curl_exec($ch);
    
	return $result;
}

function getCouponCode($fbId, $fbEmail) {

    global $store_config;
    
    $couponCode=null;
    
    //Example brilliant store URL:
    // http://www.brilliantstore.com/mycart/getfbcouponcode.php?ftoken=5fb687e254e3367a96849622a53d1aab&fid={facebook id}&femail={facebook email}
    $url = $store_config['couponWSUrl'].
    		'?ftoken='.$store_config['couponWSToken'].
            '&fid='.$fbId.
            '&femail='.$fbEmail;
    
    $result = json_decode(doCUrlCall($url));
    if ( $result['s'] == 's') {
        $couponCode = $result['c']; 
    }
    return $couponCode;
    
}


var_dump($user);
$fbId = $user['id'];
$fbEmail = $user['email'];

$code = getCouponCode();

if (isset($code)) {
    echo "<H2>Your single use coupon code is ".$code."</H2>";
}else{
    $storeName = $store_config['storeName'];
    $couponCode =<<<QQQ
<h2>Looks like there is some problem with the system, please refresh the page and try again. 
If still not working, please contact {$storeName}
QQQ;
}

if ($signed_request = parsePageSignedRequest($req)) {
    
    if ($signed_request->page->liked) {
        $imgListName = 'fanPageImages';
        $urlListName = 'fanPageImageTargetUrls';
    } else {
        $imgListName = 'welcomeImages';
        $urlListName = 'welcomeImageTargetUrls';
    }
    
    renderPage($imgListName, $urlListName);
    
}


?>

</body>
</html>
