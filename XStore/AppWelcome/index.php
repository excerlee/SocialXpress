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
  if($signed_request = parsePageSignedRequest($req)) {
	#var_dump($signed_request);
    if($signed_request->page->liked): ?>
	<a target='_blank' href="<?php echo $store_config['fanBannerActionUrl'];?>"><img src="<?php echo $store_config['fanBannerUrl'];?>"></a>
    <?php else: ?>
	<a target='_blank' href="<?php echo $store_config['welcomeBannerActionUrl'];?>"><img src="<?php echo $store_config['welcomeBannerUrl'];?>"></a>
    <?php
    endif;
  }

?>

</body>
</html>
