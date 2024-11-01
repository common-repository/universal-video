=== Universal Video ===
Contributors: robmcguire
Author URI: http://robmcguire.net/
Plugin homepage: http://robmcguire.net/universal-video/
Tags: html5, video
Tested on: 3.2

Easily insert HTML5 video with the use of shortcodes.

== Description ==

Embed HTML5 video and on your website using shortcodes. The plugin enables HTML5 native playback for users with compatible browsers while offering a simple degradation to other users through the use of the Flowplayer flash player. 

The plugin will make sure this does the following:

1. If the user has HTML5 support for video, it will play the media natively in an appropriate format.
2. Otherwise, if the user has Flash, it will play the media through Flowplayer.

There is no settings panel for this plugin. All you need is the syntax for the shortcode explained below.

Basic syntax: [video src="filename"]

Advanced syntax: [video src="filename" width="pixel size" height="pixel size" poster="image file"]

Example:

[video src="sample-video" height="300" width="450" poster="sample.jpg"]

* 'src' is required. It must be the file name of the video without the file extension ("sample-video", in this example). The versions of your desired video must be the same name (example: "sample-video.ogv" and "sample-video.m4v").  The video files and poster image need to be located in your "wp-content/uploads" folder.
* 'width' and 'height' are optional for native HTML5 playback.  However, 'width' and 'height' must be included for proper flash playback.

If you find this plugin useful, or if you don't like it, feel free to leave your comments on the plugin home page http://robmcguire.net/universal-video/

== Installation ==

1. Upload the unzipped folder 'universal-video' to your 'plugins' directory.
1. Activate the plugin through the 'Plugins' menu in WordPress
1. And then follow the usage instructions on the Description page
