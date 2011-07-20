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
<?php

$parser = new ParserProductFeed($store_config['feedUrl'], null);
$parser->parse();
//var_dump( $parser->getFeedItems());

?>

<ol>

<?php
foreach ($parser->getFeedItems() as $item):?>
<li>
<a href=<?=$item[T_URL]?>>
<img></img>
</a>
</li>
<?php endfor; ?>
</ol>

<body>

</body>
</html>