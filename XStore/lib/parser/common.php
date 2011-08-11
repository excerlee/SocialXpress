<?php
$lib_path = realpath(dirname(__FILE__)."/..");
$conf_path = realpath(dirname(__FILE__)."/../../conf");

require_once($lib_path."/magpierss/rss_fetch.inc");
require_once($lib_path."/parser/ParserConfig.php");
require_once($lib_path."/parser/ParserInterface.php");
require_once($lib_path."/parser/ParserImplBase.php");
