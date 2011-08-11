<?php

$lib_path = realpath(dirname(__FILE__)."/../lib");
$conf_path = realpath(dirname(__FILE__)."/../conf");

require_once($lib_path."/facebook-php-sdk-v3/src/facebook.php");
require_once($lib_path."/magpierss/rss_fetch.inc"); 
require_once($lib_path."/parser/ParserProductFeed.php");
