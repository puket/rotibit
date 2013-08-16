<?
/*
*******************************************************************************
*  																																	*
*******************************************************************************
* This file is part of RotiBIT Project System																					
* Project Inspired by Roti-Design (rotibit@gmail.com)			
*
* ============================================================
*
* Software Version:					RBPS 3.0																			
* Software by:							Roti-Design (http://www.rotibit.com)										
* Copyright(c) 2008 by:				Roti-Design (http://www.rotibit.com)										
* Support, News, Updates at:	    http://www.rotibit.com											
*
*******************************************************************************
*/
ob_start();
session_start();

ini_set("user_agent","Mozilla/4.0 (compatible; MSIE 6.0; Windows NT 5.0)");
ini_set("max_execution_time", 0);
ini_set("memory_limit", "10000M");

$seconds_to_cache = 3600*24;
$maxage = $seconds_to_cache/2;
$ts = gmdate("D, d M Y H:i:s", time() + $seconds_to_cache) . " GMT";
header("Expires: $ts");
header("Pragma: public");
header("Cache-Control: max-age=$maxage");
header('Last-Modified: ' . gmdate('D, d M Y H:i:s') . ' GMT');

define( "INCLUDE_DIR", realpath(dirname( __FILE__)) );

define( "LIB_FILE", INCLUDE_DIR."/./libs_html/" );

// ----  Include system file config
require_once( LIB_FILE . 'cfg.php' );

// ----  Include system file require
require_once( LIB_FILE . "require.php" );

$objModule = new SC_Module();
$objModule->process();
?>

