<?php
/*
Plugin Name: Universal Video
Plugin URI: http://robmcguire.net/universal-video/
Description: Quite possibly the easiest way to insert HTML5 video into your posts or pages | <a href="http://robmcguire.net/universal-video/" title="Universal Video Instructions">Usage instructions</a>
Author: Rob McGuire
Version: 0.7
Author URI: http://robmcguire.net

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 2 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program; if not, write to the Free Software
Foundation, Inc., 59 Temple Place, Suite 330, Boston, MA  02111-1307  USA
*/

 function video_shortcode( $atts, $content = null ) {
	extract( shortcode_atts( array(
	'src' => '',
	'options' => 'controls autobuffer',
	'width' => '',
	'height' => '',
	'poster' => '',
	'format' => 'auto',
	), $atts ) );
	$fallbackext='.m4v';
	$plpath = WP_PLUGIN_URL .'/universal-video/player/flowplayer-3.2.7.swf';
	$vloc = WP_CONTENT_URL .'/uploads/';
	$fallbackpl = '<object id="flowplayer" width="'.$width.'" height="'.$height.'" data="'.$plpath.'" 
	type="application/x-shockwave-flash"><param name="movie" value="'.$plpath.'" /><param name="allowfullscreen" value="true" /><param name="flashvars" value=\'config={"clip": {"url": "'.$vloc.''.$src.'.m4v", "autoPlay":false, "autoBuffering":true}}\' /></object>';
	$output .= '<video width="'.$width.'" height="'.$height.'" poster="'.$vloc.''.$poster.'" '.$options.'>' . "\n";
	$output .= '<source src="'.$vloc.''.$src.'.m4v" type=\'video/mp4; codecs="avc1.42E01E, mp4a.40.2"\' />' . "\n";
	$output .= '<source src="'.$vloc.''.$src.'.ogv" type=\'video/ogg; codecs="theora, vorbis"\' />' . "\n";
	$output .= $fallbackpl.'</video>';
	return $output;
}
add_shortcode('video', 'video_shortcode');

?>