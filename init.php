<?php defined('SYSPATH') or die('No direct script access.');

require_once(MODPATH . 'aws/classes/sdk.class.php');

//get config object
$aws_config = Kohana::$config->load("aws");

/*
 * Convert the Kohana config object to an array to be passed into
 * the aws sdk's CFCredentials::set() method. CFCredentials::set()
 * will throw an exception if it's given anything other than an array.
 *************************************/
$config_arr = array();
foreach($aws_config as $key => $val){
	$config_arr[$key] = $val;
}

//send config values to the aws sdk
CFCredentials::set($config_arr);