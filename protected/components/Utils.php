<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Utils
 *
 * @author francesco
 */
class Utils {
    public static function isLocalhost(){
	$srv = $_SERVER["SERVER_NAME"];
	$ret=false;
	if ($srv=="localhost") $ret=true; 
	return $ret;
}
}
