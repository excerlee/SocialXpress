<?php
$lib_path = realpath(dirname(__FILE__)."/..");
$conf_path = realpath(dirname(__FILE__)."/../../conf");

error_log('lib path is '.$lib_path);
error_log('conf path is '.$conf_path);

require_once($lib_path."/magpierss/rss_fetch.inc");
require_once($lib_path."/parser/ParserConfig.php");
require_once($lib_path."/parser/ParserInterface.php");
require_once($lib_path."/parser/ParserImplBase.php");