<?php

/*
Plugin Name: Openvatar
Plugin URI: http://www.openvatar.com/help
Description: This plugin allows you to generate a openvatar URL complete with size, default, and border options. See the <a href="http://www.openvatar.com/help">documentation</a> for syntax and usage.
Version: 0.2Beta
Author: fdelpozo
Author URI: http://fdelpozo.com.es

*/

function openvatar($size = false, $default = false, $border = false) {
	global $comment;
	if (parse_url($comment->comment_author_url, PHP_URL_PATH)=='')
	{
		$out = "http://www.openvatar.com/avatar.php?openvatar_id=".md5($comment->comment_author_url.'/');
  }
else
  {
	$out = "http://www.openvatar.com/avatar.php?openvatar_id=".md5($comment->comment_author_url);
  }
  if($size && $size != '')
		$out .="&amp;size=".$size;
	if($default && $default != '')
		$out .= "&amp;default=".urlencode($default);
	if($border && $border != '')
		$out .= "&amp;border=".$border;
	echo $out;
}

?>