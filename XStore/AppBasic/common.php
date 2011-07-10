<?php

    $lib_path = realpath(dirname(__FILE__))."/../lib";
    $conf_path = realpath(dirname(__FILE__))."/../conf";
    error_log( $lib_path);
    error_log( $conf_path);
    require_once($lib_path."/facebook-php-sdk/src/facebook.php");
    require_once('./app_conf.php');
