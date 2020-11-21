<?php 

define('APXRUN',true);

////////////////////////////////////////////////////////////////////////////////////////////////////////
require('lib/_start.php');  //////////////////////////////////////////////////////////// SYSTEMSTART ///
////////////////////////////////////////////////////////////////////////////////////////////////////////

$apx->module('sitemap');
$apx->lang->drop('sitemap');

if( isset( $_REQUEST["type"] ) )
{
	$apx->tmpl->loaddesign('blank');
	$apx->tmpl->assign("PROTOCOL", strtolower($_SERVER["REQUEST_SCHEME"]).'://');
	$apx->tmpl->assign("DOMAINNAME", $_SERVER['SERVER_NAME']);
	$type = "google";	
}
else
{
	headline($apx->lang->get('HEADLINE'), str_replace('&','&amp;',$_SERVER['REQUEST_URI']));
	titlebar($apx->lang->get('HEADLINE'));	
	$type = "sitemap";
}

foreach ( $apx->modules AS $module => $info ) 
{
	$path = BASEDIR.getmodulepath($module).'sitemap.php';
	if ( !file_exists($path) ) 
	{
		continue;
	}
	
	include_once($path);
	
	$functionname='sitemap_'.$module;
	if ( !function_exists($functionname) ) continue;
	//if ( isset($set[$module]['searchable']) && !$set[$module]['searchable'] ) continue;

	++$i;
	$apx->lang->drop('func_sitemap',$module);
	$resdata[$i]['TITLE']=$apx->lang->get('SITEMAP_'.strtoupper($module));
	$resdata[$i]['RESULT']=$functionname();
}

$apx->tmpl->assign('MODULE',$resdata);

$apx->tmpl->parse($type);

////////////////////////////////////////////////////////////////////////////////////////////////////////
require('lib/_end.php');  /////////////////////////////////////////////////////////// SCRIPT BEENDEN ///
////////////////////////////////////////////////////////////////////////////////////////////////////////

?>