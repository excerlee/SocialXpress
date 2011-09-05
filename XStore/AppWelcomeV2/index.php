<?php
require_once("./common.php");
require_once('./app_conf.php');
require_once('./view.php');
?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <title><?php echo $store_config['storeName']; ?></title>


</head>
<body>
<?php 

function log2Log($d, $var){
    error_log(sprintf($d, var_export($var,true)));
}
function myDebug($d, $var){
    echo '<pre>';
    echo $d.'<br>';
    print_r($var);
    echo '</pre>';
}
    
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
    
    $tmp = doCUrlCall($url);
    //printf("Curl call string is [%s]<br>result is: [%s]", $url, $result); 
    $result = json_decode($tmp, true);
    log2Log("JSon string is:[%s]", $result); 
    if ( $result['s'] == 's') {
        $couponCode = $result['c']; 
    }
    return $couponCode;
    
}

function getFBUserInfo($userId) {
    
    global $facebook;
    
    $fqlResult = null;
    try{
        $fql    =   "select username, email, hometown_location, sex, email from user where uid=" . $userId;
        $param  =   array(
            'method'    => 'fql.query',
            'query'     => $fql,
            'callback'  => ''
        );
        $fqlResult   =   $facebook->api($param);
    }
    catch(Exception $o){
        log2Log("Exception is", $o);
    }
    log2Log("userId is [%s]", $userId);
    log2Log("fqlResult is [%s]", $fqlResult);
    return $fqlResult[0];
}

function getCouponMsg($userId, $userInfo) {
    
    global $store_config;
    $storeName = $store_config['storeName'];
    $storeUrl  = $store_config['storeUrl'];
    
    log2Log("userInfo is:[%s]", $userInfo);
    $code = getCouponCode($userId, $userInfo['email']);
    
    if (isset($code)) {
        $couponMsg=$code;
    }else{
        $couponMsg='ERROR';
    }
    return $couponMsg;
}



$user =   null; //facebook user uid
// Create our Application instance.
$facebook = new Facebook(array(
  'appId'  => $fb_config['appid'],
  'secret' => $fb_config['secret'],
  'cookie' => true,
)); 

//Facebook Authentication part
$user     = $facebook->getUser();
$req      = $facebook->getSignedRequest();
$loginUrl = $facebook->getLoginUrl(
        array(
            //'scope'         => 'user_birthday,user_location,user_work_history,user_about_me,user_hometown'
            'scope'         => 'email,user_birthday,user_location,user_work_history,user_about_me,user_hometown'
        )
    );

/* 
 * If user first time authenticated the application facebook
 * redirects user to baseUrl, so I checked if any code passed
 * then redirect him to the application url 
 * -mahmud
 */
if (isset($_GET['code'])){
    header("Location: " . $fb_config['baseurl']);
    exit;
}
//~~

//
if (isset($_GET['request_ids'])){
    //user comes from invitation
    //track them if you need
}
if ($user) {
  try {
    // Proceed knowing you have a logged in user who's authenticated.
    $userInfo = $facebook->api('/me');
  } catch (FacebookApiException $e) {
    //you should use error_log($e); instead of printing the info on browser
    log2Log($e);  // d is a debug function defined at the end of this file
    $user = null;
  }
}

if (!$user) {
    echo "<script type='text/javascript'>top.location.href = '$loginUrl';</script>";
    exit;
}

if ($signed_request = parsePageSignedRequest($req)) {
    
    if ($signed_request->page->liked) {
        
    	log2Log("ANALYTICS LOG::ISFAN::UserId[%s]", $user);

        //$userInfo = getFBUserInfo($user);
        $couponMsg = getCouponMsg($user, $userInfo);
        echo view($couponMsg);
        if ($couponMsg == 'ERROR') {
            echo getCouponErrorMsg();
        }
        
    } else {
    	log2Log("ANALYTICS LOG::ISNOTFAN::UserId[%s]", $user);

        $imgListName = 'welcomeImages';
        $urlListName = 'welcomeImageTargetUrls';
        renderPage($imgListName, $urlListName);
    }
    
}

?>
</body>
</html>
